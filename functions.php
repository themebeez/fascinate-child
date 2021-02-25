<?php
/**
 * Child theme functions
 *
 * Functions file for child theme, enqueues parent and child stylesheets by default.
 *
 * @since	1.0.0
 * @package Fascinate Child
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {

	exit;
}

if ( ! function_exists( 'fascinate_child_enqueue_styles' ) ) {

	/**
	 * Enqueue Styles.
	 *
	 * Enqueue parent style and child styles where parent are the dependency
	 * for child styles so that parent styles always get enqueued first.
	 *
	 * @since 1.0.0
	 */
	function fascinate_child_enqueue_styles() {

		// Enqueue Child theme's stylesheet.
		// Setting 'parent-style' as a dependency will ensure that the child theme stylesheet loads after it.
		wp_enqueue_style( 'fascinate-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'fascinate-style', 'fascinate-main' ) );
	}
}
// Add enqueue function to the desired action.
add_action( 'wp_enqueue_scripts', 'fascinate_child_enqueue_styles' );