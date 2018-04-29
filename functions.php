<?php /*
================================================================================
The Ball 2006 Child Theme Functions
================================================================================
AUTHOR: Christian Wach <needle@haystack.co.uk>
--------------------------------------------------------------------------------
NOTES

Theme amendments and overrides.

--------------------------------------------------------------------------------
*/



// set our version here
define( 'THEBALL2006_VERSION', '1.0.1' );



/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * @since 1.0
 */
if ( ! isset( $content_width ) ) { $content_width = 660; }



/**
 * Augment the Base Theme's setup function.
 *
 * @since 1.0
 */
function theball2006_setup() {

	/*
	 * Make theme available for translation.
	 * Translations can be added to the /languages/ directory of the child theme.
	 */
	load_theme_textdomain(
		'theball2006',
		get_stylesheet_directory() . '/languages'
	);

}

// add after theme setup hook
add_action( 'after_setup_theme', 'theball2006_setup' );



/**
 * Add child theme's CSS file(s).
 *
 * @since 1.0
 */
function theball2006_enqueue_styles() {

	// enqueue file
	wp_enqueue_style(
		'theball2006_css',
		get_stylesheet_directory_uri() . '/assets/css/style-overrides.css',
		array( 'theball_screen_css' ),
		THEBALL2006_VERSION, // version
		'all' // media
	);

}

// add a filter for the above
add_filter( 'wp_enqueue_scripts', 'theball2006_enqueue_styles', 105 );



/**
 * Override image of The Ball.
 *
 * @since 1.0
 *
 * @param str $default The existing markup for the image file.
 * @return str $default The modified markup for the image file.
 */
function theball2006_theball_image( $default ) {

	// ignore default and set our own
	return '<a href="' . get_option( 'home' ) . '" title="' . __( 'Home', 'theball2006' ) . '" class="ball_image">' .
			'<img src="' . get_stylesheet_directory_uri() . '/assets/images/interface/the_ball_2006.png" ' .
				 'alt="' . esc_attr( __( 'The Ball 2006', 'theball2006' ) ) . '" ' .
				 'title="' . esc_attr( __( 'The Ball 2006', 'theball2006' ) ) . '" ' .
				 'style="width: 100px; height: 100px;" ' .
				 'id="the_ball_header" />' .
			'</a>' ;

}

// add a filter for the above
add_filter( 'theball_image', 'theball2006_theball_image', 10, 1 );



/**
 * Override page list template file.
 *
 * @since 1.0
 *
 * @param str $default The default path to the template file.
 * @return str $default The modified path to the template file.
 */
function theball2006_pagelist( $default ) {

	// return out theme's page list file
	return get_stylesheet_directory() . '/assets/includes/page_list.php';

}

// add a filter for the above
add_filter( 'theball_pagelist', 'theball2006_pagelist', 10, 1 );



/**
 * Override supporters footer template file.
 *
 * @since 1.0
 *
 * @param str $default The default path to the template file.
 * @return str $default The modified path to the template file.
 */
function theball2006_supporters_file( $default ) {

	// return our theme's supporters list file
	return get_stylesheet_directory() . '/assets/includes/supporters_2006.php';

}

// add a filter for the above
add_filter( 'theball_supporters', 'theball2006_supporters_file', 10, 1 );



/**
 * Override video width.
 *
 * @since 1.0
 */
function theball2006_video_width( $default ) {

	// return full width
	return 640;

}

// add a filter for the above
add_filter( 'sofvm_video_width', 'theball2006_video_width', 10, 1 );






/**
 * Override video height.
 *
 * @since 1.0
 */
function theball2006_video_height( $default ) {

	// return full height
	return 480;

}

// add a filter for the above
add_filter( 'sofvm_video_height', 'theball2006_video_height', 10, 1 );



/**
 * Override active menu item for a custom post type.
 *
 * @since 1.0
 */
function theball2006_change_page_menu_classes( $menu ) {

	// access post
	global $post;

	// is this our video post type?
	if ( get_post_type( $post ) == 'sofvm_video' ) {

		// remove all current_page_parent classes
		$menu = str_replace( 'current_page_parent', '', $menu );

		// add the current_page_parent class to the page we want
		$menu = str_replace( 'menu-item-372', 'menu-item-372 current_page_parent', $menu );

	}

	// --<
	return $menu;

}

// add a filter for the above
add_filter( 'wp_nav_menu', 'theball2006_change_page_menu_classes', 10, 1 );






