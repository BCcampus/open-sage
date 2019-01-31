<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller {

	/**
	 * Returns the Hero Page ID that was set in the customizer menu
	 *
	 * @return string
	 */
	public function getHeroPageId() {
		$id = get_theme_mod( 'homepage_hero', '' );

		return $id;
	}
}

