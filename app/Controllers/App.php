<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller {

	public function siteName() {
		return get_bloginfo( 'name' );
	}

	public static function title() {
		if ( is_home() ) {
			$home = get_option( 'page_for_posts', true );

			if ( $home ) {
				return get_the_title( $home );
			}
			return __( 'Latest Posts', 'sage' );
		}
		if ( is_archive() ) {
			return get_the_archive_title();
		}
		if ( is_search() ) {
			return sprintf( __( 'Search Results for %s', 'sage' ), get_search_query() );
		}
		if ( is_404() ) {
			return __( 'Not Found', 'sage' );
		}
		return get_the_title();
	}

	/**
	 * Return authors name outside of the loop when given the post ID, otherwise an empty string
	 *
	 * @param $id
	 *
	 * @return string
	 */
	public static function getPostAuthor( $id ) {
		$author_id = get_post_field( 'post_author', $id );
		$author    = get_the_author_meta( 'display_name', $author_id );

		return $author;
	}

}
