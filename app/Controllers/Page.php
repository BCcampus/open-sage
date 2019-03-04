<?php

namespace App\Controllers;

use BCcampus\OpenTextBooks\Config;
use BCcampus\OpenTextBooks\Models;
use BCcampus\OpenTextBooks\Models\Api;
use BCcampus\OpenTextBooks\Models\Webform;
use BCcampus\Utility;
use Sober\Controller\Controller;
use VisualAppeal\Matomo;

class Page extends Controller {

	/**
	 * Returns the Left Card Page ID that was set in the customizer menu for section "Find Open Textbooks"
	 *
	 * @return string
	 */
	public function getOerLeftCardId() {
		$id = get_theme_mod( 'oer_card_left', '' );

		return intval( $id );
	}

	/**
	 * Returns the Right Card Page ID that was set in the customizer menu for section "Find Open Textbooks"
	 *
	 * @return string
	 */
	public function getOerRightCardId() {
		$id = get_theme_mod( 'oer_card_right', '' );

		return intval( $id );
	}

	/**
	 * Returns the Left Card Page ID that was set in the customizer menu for section "Use Open Textbooks"
	 *
	 * @return string
	 */
	public function getUseOpenLeftCardId() {
		$id = get_theme_mod( 'use_open_card_left', '' );

		return intval( $id );
	}

	/**
	 * Returns the Right Card Page ID that was set in the customizer menu for section "Use Open Textbooks"
	 *
	 * @return string
	 */
	public function getUseOpenRightCardId() {
		$id = get_theme_mod( 'use_open_card_right', '' );

		return intval( $id );
	}

	/**
	 * Returns the Left Card Page ID for the mid-section that was set in the customizer menu for section "Use Open Textbooks"
	 *
	 * @return string
	 */
	public function getUseOpenTripleLeftId() {
		$id = get_theme_mod( 'use_open_triple_card_left', '' );

		return intval( $id );
	}

	/**
	 * Returns the Middle Card Page ID for the mid-section that was set in the customizer menu for section "Use Open Textbooks"
	 *
	 * @return string
	 */
	public function getUseOpenTripleMiddleId() {
		$id = get_theme_mod( 'use_open_triple_card_middle', '' );

		return intval( $id );
	}

	/**
	 * Returns the Right Card Page ID for the mid-section that was set in the customizer menu for section "Use Open Textbooks"
	 *
	 * @return string
	 */
	public function getUseOpenTripleRightId() {
		$id = get_theme_mod( 'use_open_triple_card_right', '' );

		return intval( $id );
	}

	/**
	 *
	 *
	 * @return mixed
	 */
	public function getOtbStats() {
		setlocale( LC_MONETARY, 'en_CA' );
		$data     = new Webform();
		$limit    = 5;
		$savings  = $data->getStudentSavings();
		$top_inst = $data->getTopInstitutions( $limit );

		$stats['num_students']     = $data->getNumStudents();
		$stats['num_institutions'] = $data->getNumInstitutions();
		$stats['num_faculty']      = $data->getNumFaculty();
		$stats['num_adoptions']    = $data->getTotalAdoptions();
		$stats['low']              = \money_format( '%n ', $savings['100'] );
		$stats['high']             = \money_format( '%n ', $savings['actual'] );
		$stats['top']              = Utility\array_to_csv( $top_inst );
		$stats['this_year']        = date( 'Y', time() );
		$stats['limit']            = $limit;

		return $stats;
	}

	/**
	 *
	 * @param $args
	 *
	 * @return array
	 * @throws \Exception
	 */
	public static function getLikelyAdoptions( $args ) {
		$env                  = Config::getInstance()->get();
		$results['downloads'] = 0;
		$low_prob             = 0.0006; // 1 out of every 1500
		$high_prob            = 0.002; // 1 out of every 500
		$default              = [
			'site_id' => 8,
			'range'   => 4,
		];

		// combine default args with supplied
		$merged = array_merge( $args, $default );

		$time_string           = "-{$merged['range']} months";
		$t                     = strtotime( $time_string );
		$merged['range_start'] = date( 'Y-m-d', $t );
		$merged['range_end']   = date( 'Y-m-d', time() );

		// instantiate REST API Analytics object
		$rest_api = new Matomo( $env['matomo']['url'], $env['matomo']['token'], 12, Matomo::FORMAT_JSON );
		$rest_api->setPeriod( Matomo::PERIOD_RANGE );
		$rest_api->setRange( $merged['range_start'], $merged['range_end'] );

		// object for saving REST API data to local storage
		$data  = new Models\Analytics( $rest_api, $merged );
		$multi = $data->getMultiSites();

		// start generating return statement
		$results = [
			'low'    => 0,
			'high'   => 0,
			'visits' => 0,
			'count'  => count( $multi ),
		];

		$range            = $data->getDateRange();
		$days             = round( ( time() - strtotime( $range['start'] ) ) / 84600, 2 );
		$results['start'] = $range['start'];
		$results['end']   = $range['end'];

		foreach ( $multi as $site ) {
			$results['low']    = round( $results['low'] + ( $site['visits'] * $low_prob ) );
			$results['high']   = round( $results['high'] + ( $site['visits'] * $high_prob ) );
			$results['visits'] = $results['visits'] + $site['visits'];
		}

		// Predictions via Visits
		$freq_of_visits              = round( $results['visits'] / $days, 2 );
		$results['low_prob_future']  = ( 0 === $freq_of_visits ) ? 0 : 24 * ( round( 1500 / $freq_of_visits, 2 ) );
		$results['high_prob_future'] = ( 0 === $freq_of_visits ) ? 0 : 24 * ( round( 500 / $freq_of_visits, 2 ) );

		$books_rest_api       = new Api\Equella();
		$books_data           = new Models\OtbBooks( $books_rest_api, [ 'type_of' => 'books' ] );
		$results['num_books'] = count( $books_data->getResponses() );

		// add downloads stats
		$results['downloads']['num_books'] = count( $data->getNumDownloads() );
		foreach ( $data->getNumDownloads() as $download ) {
			$results['downloads']['cumulative'] = $results['downloads']['cumulative'] + $download;
		}

		// Prediction via Downloads
		$freq_of_downloads                          = round( $results['downloads']['cumulative'] / $days, 2 );
		$results['downloads']['low_prob_adoption']  = round( 0.02 * $results['downloads']['cumulative'] );
		$results['downloads']['high_prob_adoption'] = round( 0.1 * $results['downloads']['cumulative'] );
		$results['downloads']['low_prob_future']    = ( 0 === $freq_of_downloads ) ? 0 : 24 * ( round( 50 / $freq_of_downloads, 2 ) );
		$results['downloads']['high_prob_future']   = ( 0 === $freq_of_downloads ) ? 0 : 24 * ( round( 10 / $freq_of_downloads, 2 ) );

		return $results;
	}

}
