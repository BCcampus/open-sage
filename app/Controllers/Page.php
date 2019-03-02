<?php

	namespace App\Controllers;

	use BCcampus\OpenTextBooks\Controllers\Catalogue;
	use BCcampus\OpenTextBooks\Controllers\Reviews;
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
	 * Returns the main catalogue of books
	 *
	 * @param array $args
	 *
	 * @return Catalogue\Otb
	 */
	public static function getCollection( $args = [] ) {
		$args['type_of'] = 'books';

		new Catalogue\Otb( $args );
	}

	/**
	 * Returns the reviews if there's a UUID
	 *
	 * @param array $args
	 *
	 * @return Reviews\LimeSurvey|string
	 */
	public static function getReviews( $args = [] ) {

		if ( isset( $args['uuid'] ) && $args['uuid'] !== '' ) {

			$args['type_of'] = 'reviews';

			try {
				new Reviews\LimeSurvey( $args );
			} catch ( \Exception $exc ) {
				error_log( $exc->getMessage(), 0 ); //@codingStandardsIgnoreLine
			}
		}
	}

}
