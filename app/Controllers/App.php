<?php

namespace App\Controllers;

use BCcampus\BootWalker;
use BCcampus\OpenTextBooks\Controllers\Catalogue;
use BCcampus\OpenTextBooks\Controllers\Reviews;
use BCcampus\OpenTextBooks\Models;
use Inc2734\WP_Breadcrumbs;
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
	 * Returns the url of the post thumbnail, or default img url
	 *
	 * @param $id
	 *
	 * @return mixed
	 */
	public static function getThumbUrl( $id ) {

		if ( has_post_thumbnail( $id ) ) {
			$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'single-post-thumbnail' );
		} else {
			$image[] = \App\asset_path( 'images/placeholder-image-300x200.jpg' );
		}

		return $image[0];
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

	/**
	 * Return the excerpt given a post ID, otherwise placeholder text
	 *
	 * @param $id
	 *
	 * @return string
	 */
	public static function getPostExcerpt( $id ) {
		$excerpt = has_excerpt( $id );

		( $excerpt ) ? $excerpt_text = get_the_excerpt( $id ) : $excerpt_text = 'Please add excerpt text in your page to replace this message.';

		return $excerpt_text;
	}

	/**
	 * Content imported from other sites will have a permalink that leads back
	 * to the original site. This attempts to resolve that.
	 *
	 * @param int $id post_id
	 * @param string $name post_name
	 *
	 * @return string
	 */
	public static function maybeGuid( $id, $name ) {
		static $current_domain = null;
		if ( null === $current_domain ) {
			$current_domain = site_url();
		}
		$current  = wp_parse_url( $current_domain, PHP_URL_HOST );
		$url      = esc_url( get_permalink( $id ) );
		$incoming = wp_parse_url( $url, PHP_URL_HOST );
		if ( 0 !== strcmp( $current, $incoming ) ) {
			$url = $current_domain . '/' . $name;
		}

		return $url;
	}

	/**
	 * robust breadcrumb functionality
	 *
	 * @return array
	 */
	public function breadCrumbs() {
		$bc = new WP_Breadcrumbs\Breadcrumbs();

		return $bc->get();
	}

	/**
	 * Returns the main catalogue of books
	 *
	 * @param string $args
	 */
	public static function getCollection( $args = [] ) {
		$args['type_of'] = 'books';

		new Catalogue\Otb( $args );

		if ( isset( $args['uuid'] ) && $args['uuid'] !== '' ) {

			// get relevant based on uuid
			$args['type_of'] = 'relevant';

			new Catalogue\Otb( $args );

			// overwrite variable
			$args['type_of'] = 'reviews';

			try {
				new Reviews\LimeSurvey( $args );
			} catch ( \Exception $exc ) {
				error_log( $exc->getMessage(), 0 ); //@codingStandardsIgnoreLine
			}
		}
	}

	/**
	 * Useful in `wp_list_pages` to switch context based on the existence of
	 * children
	 *
	 * @param $id
	 *
	 * @return false|int
	 */
	public static function getChildOf( $id ) {
		// check for children
		$args = [
			'post_parent' => $id,
			'post_type'   => 'page',
			'post_status' => 'publish',
		];

		$children = get_children( $args, ARRAY_A );

		if ( empty( $children ) ) {
			$parent_id = wp_get_post_parent_id( $id );
		} else {
			$parent_id = $id;
		}

		return $parent_id;
	}

	/**
	 * Useful in `wp_list_pages` to return different title based on
	 * ancestry context
	 *
	 * @param $id
	 *
	 * @return string
	 */
	public static function getListHeading( $id ) {
		// check for children
		$args = [
			'post_parent' => $id,
			'post_type'   => 'page',
			'post_status' => 'publish',
		];

		$children  = get_children( $args );
		$parent_id = wp_get_post_parent_id( $id );

		// no sub-pages heading will be a parent
		if ( empty( $children ) ) {
			// top of the tree, return id of front page
			if ( 0 === $parent_id ) {
				$parent_id = get_option( 'page_on_front' );
			}

			$maybe_parent_title = get_the_title( $parent_id );
		} else {
			// heading will be current post
			$maybe_parent_title = get_the_title( $id );
		}

		$html = $maybe_parent_title;

		return $html;
	}

	/**
	 * @return BootWalker
	 */
	public function navWalker() {
		return new BootWalker();
	}

	/**
	 * @param array $args
	 *
	 * @return array
	 */
	public static function getLatestAdditions( $args = [] ) {
		$default  = [
			'type_of'  => 'books',
			'lists'    => 'latest_additions',
			'limit'    => 4,
			'random'   => false,
			'featured' => false,
		];
		$merged   = array_merge( $default, $args );
		$rest_api = new Models\Api\Equella();
		$data     = new Models\OtbBooks( $rest_api, $merged );
		$sorted   = $data->sortByCreatedDate();
		$result   = [];
		$i        = 0;
		$featured = 'FeaturedYese3f7e81dfdb9f7b171b36e572613a3cb';

		if ( true === $merged['random'] ) {
			shuffle( $sorted );
		}

		foreach ( $sorted as $datum ) {
			// skip all non-curated books
			if ( true === $merged['featured'] && false === mb_strpos( $datum['metadata'], $featured ) ) {
				continue;
			}

			$status = self::isNewOrUpdated( $datum['createdDate'], $datum['modifiedDate'] );

			$i ++;
			$meta_xml                     = \simplexml_load_string( $datum['metadata'] );
			$cover                        = \preg_replace( '/^http:\/\//iU', '//', $meta_xml->item->cover );
			$result[ $i ]['name']         = $datum['name'];
			$result[ $i ]['created_date'] = date( 'M j, Y', strtotime( $datum['createdDate'] ) );
			$result[ $i ]['uuid']         = $datum['uuid'];
			$result[ $i ]['cover_url']    = $cover;
			$result[ $i ]['book_url']     = \sprintf( '%1$s%2$s%3$s', get_home_url(), '/find-open-textbooks/?uuid=', $datum['uuid'] );
			$result[ $i ]['status']       = $status;
			if ( $i === $merged['limit'] ) {
				break;
			}
		}
		return $result;
	}

	/**
	 * @param $date_created
	 * @param $date_modified
	 *
	 * @return string
	 */
	private static function isNewOrUpdated( $date_created, $date_modified ) {
		$now              = time();
		$created          = strtotime( $date_created );
		$modified         = strtotime( $date_modified );
		$new_duration     = 60 * DAY_IN_SECONDS;
		$updated_duration = 2 * $new_duration;
		$status           = '';

		// new
		if ( ( $now - $created ) < $new_duration ) {
			$status = 'new';
		}

		// updated
		if ( ( $now - $created ) >= $new_duration && ( $now - $modified ) < $updated_duration ) {
			$status = 'updated';
		}

		return $status;

	}
}
