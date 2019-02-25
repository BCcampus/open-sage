<?php

	namespace App\Controllers;

	use Sober\Controller\Controller;

class Page extends Controller {

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
}
