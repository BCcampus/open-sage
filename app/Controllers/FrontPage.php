<?php

namespace App\Controllers;

use BCcampus\OpenTextBooks\Models;
use Sober\Controller\Controller;

class FrontPage extends Controller {

	/**
	 * Returns the Hero Page ID that was set in the customizer menu
	 *
	 * @return string
	 */
	public function getHeroPageId() {
		$id = get_theme_mod( 'homepage_hero', '' );

		return intval( $id );
	}

	/**
	 * Returns the Left Card Page ID that was set in the customizer menu
	 *
	 * @return string
	 */
	public function getLeftCardId() {
		$id = get_theme_mod( 'homepage_card_left', '' );

		return intval( $id );
	}

	/**
	 * Returns the Right Card Page ID that was set in the customizer menu
	 *
	 * @return string
	 */
	public function getRightCardId() {
		$id = get_theme_mod( 'homepage_card_right', '' );

		return intval( $id );
	}

	/**
	 * Returns the Hero Page ID that was set in the customizer menu
	 *
	 * @return string
	 */
	public function getQuotePageId() {
		$id = get_theme_mod( 'homepage_quote', '' );

		return intval( $id );
	}

	/**
	 * @return array
	 */
	public function getSummaryStats() {
		$data = new Models\WebForm();

		$savings = $data->getStudentSavings();
		$stats   = [
			'savings-min'  => number_format($savings['100']),
			'savings-max'  => number_format($savings['actual']),
			'faculty'      => $data->getNumFaculty(),
			'institutions' => $data->getNumInstitutions(),
			'students'     => number_format($data->getNumStudents()),
		];

		return $stats;
	}
}

