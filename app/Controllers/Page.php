<?php

	namespace App\Controllers;

	use Sober\Controller\Controller;

class Page extends Controller {

	/**
	 * Returns the Left Card Page ID that was set in the customizer menu for section "Find Open Textbooks"
	 *
	 * @return string
	 */
	public function getFindOpenLeftCardId() {
		$id = get_theme_mod( 'find_card_left', '' );

		return intval( $id );
	}

	/**
	 * Returns the Right Card Page ID that was set in the customizer menu for section "Find Open Textbooks"
	 *
	 * @return string
	 */
	public function getFindOpenRightCardId() {
		$id = get_theme_mod( 'find_card_right', '' );

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

}
