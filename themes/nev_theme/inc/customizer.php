<?php
/**
 * nevTheme Theme Customizer
 *
 * @package nevTheme
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nev_theme_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'nev_theme_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'nev_theme_customize_partial_blogdescription',
		) );
	}

	/**
	 * PANELS
	 */
	$wp_customize->add_panel( 'nev_theme_social_media_panel', array(
		'title' => esc_html__( 'Social Media', 'nev_theme' ),
		'capability' => 'edit_theme_options',
	) );

	/**
	 * SECTIONS
	 */
	$wp_customize->add_section('nev_theme_facebook_section', array(
		'title' => esc_html__( 'Facebook', 'nev_theme' ),
		'capability' => 'edit_theme_options',
		'panel' => 'nev_theme_social_media_panel',
	));
	$wp_customize->add_section('nev_theme_twitter_section', array(
		'title' => esc_html__( 'Twitter', 'nev_theme' ),
		'capability' => 'edit_theme_options',
		'panel' => 'nev_theme_social_media_panel',
	));
	$wp_customize->add_section('nev_theme_instagram_section', array(
		'title' => esc_html__( 'Instagram', 'nev_theme' ),
		'capability' => 'edit_theme_options',
		'panel' => 'nev_theme_social_media_panel',
	));

	/**
	 * SETTINGS
	 */
	$wp_customize->add_setting( 'nev_theme_facebook_url', array(
		'transport' => 'refresh',
		'default' => 'www.facebook.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'nev_theme_twitter_url', array(
		'transport' => 'refresh',
		'default' => 'www.twitter.com',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_setting( 'nev_theme_instagram_url', array(
		'transport' => 'refresh',
		'default' => 'www.instagram.com',
		'sanitize_callback' => 'esc_url_raw',
	) );

	/**
	 * CONTROLS
	 */
	$wp_customize->add_control( 'nev_theme_facebook_url', array(
		'label' => esc_html__( 'Facebook URL', 'nev_theme' ),
		'description' => esc_html__( 'Add URL to your facebook icon', 'nev_theme' ),
		'section' => 'nev_theme_facebook_section',
		'type' => 'input',
		'input_attrs' => array(
			'placeholder' => esc_html__('https://facebook.com', 'nev_theme'),
		),
	) );
	$wp_customize->add_control( 'nev_theme_twitter_url', array(
		'label' => esc_html__( 'Twitter URL', 'nev_theme' ),
		'description' => esc_html__( 'Add URL to your twitter icon', 'nev_theme' ),
		'section' => 'nev_theme_twitter_section',
		'type' => 'input',
		'input_attrs' => array(
			'placeholder' => esc_html__('https://twitter.com/', 'nev_theme'),
		),
	) );
	$wp_customize->add_control( 'nev_theme_instagram_url', array(
		'label' => esc_html__( 'Instagram URL', 'nev_theme' ),
		'description' => esc_html__( 'Add URL to your instagram icon', 'nev_theme' ),
		'section' => 'nev_theme_instagram_section',
		'type' => 'input',
		'input_attrs' => array(
			'placeholder' => esc_html__('https://instagram.com/', 'nev_theme'),
		),
	) );
}
//adding action to render the customize_register
add_action( 'customize_register', 'nev_theme_customize_register' );
