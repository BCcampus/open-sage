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
			'homepage_card_left', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'homepage_card_left', [
				'type' => 'dropdown-pages',
				'label'    => __( 'Left card', 'open-sage' ),
				'section'  => 'static_front_page',
				'settings' => 'homepage_card_left',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'homepage_card_right', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'homepage_card_right', [
				'type' => 'dropdown-pages',
				'label'    => __( 'Right card', 'open-sage' ),
				'section'  => 'static_front_page',
				'settings' => 'homepage_card_right',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'homepage_quote', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'homepage_quote', [
				'type' => 'dropdown-pages',
				'label'    => __( 'Quote section', 'open-sage' ),
				'section'  => 'static_front_page',
				'settings' => 'homepage_quote',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);
		// Use Open section
		$wp_customize->add_section(
			'use_open', [
				'title'    => __( 'Use Open Textbooks', 'open-sage' ),
				'priority' => 120,
			]
		);

		$wp_customize->add_setting(
			'use_open_card_left', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'use_open_card_left', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Top section left card', 'open-sage' ),
				'section'     => 'use_open',
				'settings'    => 'use_open_card_left',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'use_open_card_right', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'open_card_right', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Top section right card', 'open-sage' ),
				'section'     => 'use_open',
				'settings'    => 'use_open_card_right',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'use_open_triple_card_left', [
				'default'    => '',
				'capability' => 'edit_theme_options',
			]
		);

		$wp_customize->add_control(
			'use_open_triple_card_left', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Left mid-section card', 'open-sage' ),
				'section'     => 'use_open',
				'settings'    => 'use_open_triple_card_left',
				'description' => __( 'Page with a featured image' ),
			]
		);

		$wp_customize->add_setting(
			'use_open_triple_card_middle', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'use_open_triple_card_middle', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Center mid-section card', 'open-sage' ),
				'section'     => 'use_open',
				'settings'    => 'use_open_triple_card_middle',
				'description' => __( 'Page with a featured image' ),
			]
		);

		$wp_customize->add_setting(
			'use_open_triple_card_right', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'use_open_triple_card_right', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Right mid-section card', 'open-sage' ),
				'section'     => 'use_open',
				'settings'    => 'use_open_triple_card_right',
				'description' => __( 'Page with a featured image' ),
			]
		);

		// Find Open section
		$wp_customize->add_section(
			'oer', [
				'title'    => __( 'OER Landing Page', 'open-sage' ),
				'priority' => 130,
			]
		);

		$wp_customize->add_setting(
			'oer_card_left', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'oer_card_left', [
				'type' => 'dropdown-pages',
				'label'    => __( 'Left card', 'open-sage' ),
				'section'  => 'oer',
				'settings' => 'oer_card_left',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'oer_card_right', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'oer_card_right', [
				'type' => 'dropdown-pages',
				'label'    => __( 'Right card', 'open-sage' ),
				'section'  => 'oer',
				'settings' => 'oer_card_right',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		// Create Open section
		$wp_customize->add_section(
			'create_open', [
				'title'    => __( 'Create Open Textbooks', 'open-sage' ),
				'priority' => 130,
			]
		);

		$wp_customize->add_setting(
			'create_hero', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'create_hero', [
				'type' => 'dropdown-pages',
				'label'    => __( 'Hero section', 'open-sage' ),
				'section'  => 'create_open',
				'settings' => 'create_hero',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'create_pb', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'create_pb', [
				'type' => 'dropdown-pages',
				'label'    => __( 'Pressbooks section', 'open-sage' ),
				'section'  => 'create_open',
				'settings' => 'create_pb',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		// What is Open Ed section
		$wp_customize->add_section(
			'what_is_open', [
				'title'    => __( 'What is Open Education', 'open-sage' ),
				'priority' => 140,
			]
		);

		$wp_customize->add_setting(
			'what_is_open_1', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'what_is_open_1', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'First card', 'open-sage' ),
				'section'     => 'what_is_open',
				'settings'    => 'what_is_open_1',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'what_is_open_2', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'what_is_open_2', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Second card', 'open-sage' ),
				'section'     => 'what_is_open',
				'settings'    => 'what_is_open_2',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'what_is_open_3', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'what_is_open_3', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Third card', 'open-sage' ),
				'section'     => 'what_is_open',
				'settings'    => 'what_is_open_3',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'what_is_open_4', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'what_is_open_4', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Fourth card', 'open-sage' ),
				'section'     => 'what_is_open',
				'settings'    => 'what_is_open_4',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'what_is_open_5', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'what_is_open_5', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Fifth card', 'open-sage' ),
				'section'     => 'what_is_open',
				'settings'    => 'what_is_open_5',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'what_is_open_6', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'what_is_open_6', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Sixth card', 'open-sage' ),
				'section'     => 'what_is_open',
				'settings'    => 'what_is_open_6',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);

		$wp_customize->add_setting(
			'what_is_open_7', [
				'default'    => '',
				'capability' => 'edit_theme_options',

			]
		);

		$wp_customize->add_control(
			'what_is_open_7', [
				'type'        => 'dropdown-pages',
				'label'       => __( 'Seventh card', 'open-sage' ),
				'section'     => 'what_is_open',
				'settings'    => 'what_is_open_7',
				'description' => __( 'Page with a featured image and excerpt' ),
			]
		);
	}
);

/**
 * Enables excerpts on pages
 */
add_post_type_support( 'page', 'excerpt' );
