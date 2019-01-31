<?php

namespace App;

/**
 * Theme customizer
 */
add_action(
	'customize_register', function ( \WP_Customize_Manager $wp_customize ) {
		// Add postMessage support
		$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
		$wp_customize->selective_refresh->add_partial(
			'blogname', [
				'selector' => '.brand',
				'render_callback' => function () {
					bloginfo( 'name' );
				},
			]
		);
	}
);

/**
 * Customizer JS
 */
add_action(
	'customize_preview_init', function () {
		wp_enqueue_script( 'sage/customizer.js', asset_path( 'scripts/customizer.js' ), [ 'customize-preview' ], null, true );
	}
);


/**
 *  Adds page select list to the "Homepage Settings" section for the Hero Section
 */

add_action(
	'customize_register', function ( \WP_Customize_Manager $wp_customize ) {

		$wp_customize->add_setting(
			'homepage_hero', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'homepage_hero', [
				'type' => 'dropdown-pages',
				'label'    => __( 'Hero section', 'open-sage' ),
				'section'  => 'static_front_page',
				'settings' => 'homepage_hero',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

	$wp_customize->add_setting(
		'homepage_card_1', [
			'default'    => '',
			'capability' => 'edit_theme_options',

		]
	);

	$wp_customize->add_control(
		'homepage_card_1', [
			'type' => 'dropdown-pages',
			'label'    => __( 'Left card', 'open-sage' ),
			'section'  => 'static_front_page',
			'settings' => 'homepage_card_1',
			'description' => __( 'Page with a featured image and excerpt' ),
		]
	);

	$wp_customize->add_setting(
		'homepage_card_2', [
			'default'    => '',
			'capability' => 'edit_theme_options',

		]
	);

	$wp_customize->add_control(
		'homepage_card_2', [
			'type' => 'dropdown-pages',
			'label'    => __( 'Right card', 'open-sage' ),
			'section'  => 'static_front_page',
			'settings' => 'homepage_card_2',
			'description' => __( 'Page with a featured image and excerpt' ),
		]
	);
	}
);

/**
 * Enables excerpts on pages
 */
add_post_type_support( 'page', 'excerpt' );
