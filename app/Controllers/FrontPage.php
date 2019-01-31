<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class FrontPage extends Controller {

	/**
	 * Returns the Hero Page set in the customizer menu
	 *
	 * @return string
	 */
	public function getHeroPage() {
		$id        = get_theme_mod( 'homepage_hero', '' );
		$hero_page = get_post( $id );

		return $hero_page;
	}
}

