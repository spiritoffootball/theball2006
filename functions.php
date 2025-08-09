<?php
/**
 * The Ball 2006 Child Theme Functions
 *
 * Theme amendments and overrides.
 *
 * @package The_Ball_2006
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Set our version here.
define( 'THEBALL2006_VERSION', '2.0.0' );

/**
 * Load theme class if not yet loaded and return instance.
 *
 * @since 1.0.1
 *
 * @return SOF_The_Ball_2006_Theme $theme The theme instance.
 */
function sof_the_ball_2006_theme() {

	// Maybe instantiate theme class.
	static $theme;
	if ( ! isset( $theme ) ) {
		include get_stylesheet_directory() . '/includes/class-theme.php';
		$theme = new SOF_The_Ball_2006_Theme();
	}

	// --<
	return $theme;

}

// Init immediately.
sof_the_ball_2006_theme();
