<?php

namespace App\Controllers;

use BCcampus\OpenTextBooks\Models\Webform;
use BCcampus\Utility;
use Sober\Controller\Controller;

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
		$stats['low']              = money_format( '%n ', $savings['100'] );
		$stats['high']             = money_format( '%n ', $savings['actual'] );
		$stats['top']              = Utility\array_to_csv( $top_inst );
		$stats['this_year']        = date( 'Y', time() );
		$stats['limit']            = $limit;

		return $stats;
	}

}
