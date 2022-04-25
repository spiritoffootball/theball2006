<?php
/**
 * The Ball 2006 Child Theme Functions
 *
 * Theme amendments and overrides.
 *
 * @since 1.0.0
 * @package The_Ball_2006
 */

// Set our version here.
define( 'THEBALL2006_VERSION', '2.0.0' );

/**
 * Load theme class if not yet loaded and return instance.
 *
 * @since 1.0.1
 *
 * @return SOF_The_Ball_Theme $theme The theme instance.
 */
function sof_the_ball_2006_theme() {

	// Declare as static.
	static $theme;

	// Instantiate plugin if not yet instantiated.
	if ( ! isset( $theme ) ) {
		include get_stylesheet_directory() . '/includes/class-theme.php';
		$theme = new SOF_The_Ball_2006_Theme();
	}

	// --<
	return $theme;

}

// Init immediately.
sof_the_ball_2006_theme();
