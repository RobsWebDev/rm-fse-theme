<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package RMFSE
 * @since 1.0.0
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function rm_fse_styles() {
	wp_enqueue_style(
		'rm_fse-style',
		get_stylesheet_uri(),
		wp_get_theme()->get( 'Version' )
	);

}
add_action( 'wp_enqueue_scripts', 'rm_fse_styles' );

if ( ! function_exists( 'rm_fse_setup' ) ) {
	function rm_fse_setup() {
		add_theme_support( 'wp-block-styles' );
	}
}
add_action( 'after_setup_theme', 'rm_fse_setup' );