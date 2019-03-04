<?php

namespace App;

use Roots\Sage\Assets\JsonManifest;
use Roots\Sage\Container;
use Roots\Sage\Template\Blade;
use Roots\Sage\Template\BladeProvider;

/**
 * Theme assets
 */
add_action(
	'wp_enqueue_scripts', function () {
		wp_enqueue_style( 'sage/main.css', asset_path( 'styles/main.css' ), false, null );
		wp_enqueue_script( 'sage/main.js', asset_path( 'scripts/main.js' ), [ 'jquery' ], null, true );
		wp_enqueue_style( 'uio/normalize.css', get_theme_file_uri() . '/lib/infusion/src/lib/normalize/css/normalize.css', false, null );
		wp_enqueue_style( 'uio/fluid.css', get_theme_file_uri() . '/lib/infusion/src/framework/core/css/fluid.css', false, null );
		wp_enqueue_style( 'uio/enactors.css', get_theme_file_uri() . '/lib/infusion/src/framework/preferences/css/Enactors.css', false, null );
		wp_enqueue_style( 'uio/prefseditor.css', get_theme_file_uri() . '/lib/infusion/src/framework/preferences/css/PrefsEditor.css', false, null );
		wp_enqueue_style( 'uio/separatedpanelprefseditor.css', get_theme_file_uri() . '/lib/infusion/src/framework/preferences/css/SeparatedPanelPrefsEditor.css', false, null );
		wp_enqueue_script( 'uio.js', get_theme_file_uri() . '/lib/infusion/infusion-uiOptions.js', [ 'jquery' ], null, true );

		if ( is_page_template( [ 'views/template-stats.blade.php' ] ) ) {
			wp_enqueue_script( 'tablesorter.js', asset_path( 'scripts/jquery.tablesorter.js' ), [ 'jquery' ], null, true );
			wp_enqueue_script( 'tablesorter', asset_path( 'scripts/tablesorter.js' ), [ 'tablesorter.js' ], null, true );
		}

		/* convey PHP data into the JavaScript */
		$php_data = [ 'pluginUrl' => get_theme_file_uri() ];
		wp_localize_script( 'uio.js', 'phpData', $php_data );

		if ( is_single() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}, 100
);

/**
 * Theme setup
 */
add_action(
	'after_setup_theme', function () {
		/**
		 * Enable features from Soil when plugin is activated
		 * @link https://roots.io/plugins/soil/
		 */
		add_theme_support( 'soil-clean-up' );
		add_theme_support( 'soil-jquery-cdn' );
		add_theme_support( 'soil-nav-walker' );
		add_theme_support( 'soil-nice-search' );
		add_theme_support( 'soil-relative-urls' );

		/**
		 * Enable plugins to manage the document title
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#title-tag
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Register navigation menus
		 * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
		 */
		register_nav_menus(
			[
				'header_navigation'   => __( 'Header Navigation', 'open-sage' ),
				'primary_navigation'  => __( 'Primary Navigation', 'open-sage' ),
				'footer_navigation_1' => __( 'Footer Primary Navigation', 'open-sage' ),
				'footer_navigation_2' => __( 'Footer Horizontal Navigation', 'open-sage' ),
			]
		);

		/**
		 * Enable post thumbnails
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Enable HTML5 markup support
		 * @link https://developer.wordpress.org/reference/functions/add_theme_support/#html5
		 */
		add_theme_support( 'html5', [ 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ] );

		/**
		 * Enable selective refresh for widgets in customizer
		 * @link https://developer.wordpress.org/themes/advanced-topics/customizer-api/#theme-support-in-sidebars
		 */
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Use main stylesheet for visual editor
		 * @see resources/assets/styles/layouts/_tinymce.scss
		 */
		add_editor_style( asset_path( 'styles/main.css' ) );
	}, 20
);

/**
 * Register sidebars
 */
add_action(
	'widgets_init', function () {
		$config = [
			'before_widget' => '<section class="widget %1$s %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		];
		register_sidebar(
			[
				'name'          => __( 'Primary', 'sage' ),
				'id'            => 'sidebar-primary',
			] + $config
		);
		register_sidebar(
			[
				'name'          => __( 'Footer', 'sage' ),
				'id'            => 'sidebar-footer',
			] + $config
		);
	}
);

/**
 * Updates the `$post` variable on each iteration of the loop.
 * Note: updated value is only available for subsequently loaded views, such as partials
 */
add_action(
	'the_post', function ( $post ) {
		sage( 'blade' )->share( 'post', $post );
	}
);

/**
 * Setup Sage options
 */
add_action(
	'after_setup_theme', function () {
		/**
		 * Add JsonManifest to Sage container
		 */
		sage()->singleton(
			'sage.assets', function () {
				return new JsonManifest( config( 'assets.manifest' ), config( 'assets.uri' ) );
			}
		);

		/**
		 * Add Blade to Sage container
		 */
		sage()->singleton(
			'sage.blade', function ( Container $app ) {
				$cache_path = config( 'view.compiled' );
				if ( ! file_exists( $cache_path ) ) {
					wp_mkdir_p( $cache_path );
				}
				(new BladeProvider( $app ))->register();
				return new Blade( $app['view'] );
			}
		);

		/**
		 * Create @asset() Blade directive
		 */
		sage( 'blade' )->compiler()->directive(
			'asset', function ( $asset ) {
				return '<?= ' . __NAMESPACE__ . "\\asset_path({$asset}); ?>";
			}
		);
	}
);

/**
 * Anonymous closure function for otb error messages
 *
 * @param $message
 * @param string $subtitle
 * @param string $title
 */
$otb_error = function ( $message, $subtitle = '', $title = '' ) {
	$title   = $title ?: __( 'Open Sage &rsaquo; Error', 'open-sage' );
	$footer  = '<a href="https://github.com/BCcampus/opentextbooks">opentextbooks application</a>';
	$message = "<h1>{$title}<br><small>{$subtitle}</small></h1><p>{$message}</p><p>{$footer}</p>";
	wp_die( $message, $title );
};

/**
 * To bring in the opentextbook application
 */
if ( ! class_exists( 'BCcampus\\Opentextbooks\\Config' ) ) {
	if ( ! file_exists( $opentextbooks = ABSPATH . 'wp-content/opentextbooks/autoloader.php' ) ) {
		$otb_error(
			__( 'You must include <code>git clone https://github.com/BCcampus/opentextbooks</code> in wp/wp-content/.', 'open-sage' ),
			__( 'Dependency not found.', 'open-sage' )
		);
	}
	require_once $opentextbooks;
}
