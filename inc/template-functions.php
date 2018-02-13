<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package fitnes
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function fitnes_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'fitnes_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function fitnes_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'fitnes_pingback_header' );



/**
 * Include Styles
 */
if (is_file( get_template_directory() . '/inc/fitness-styles.php') ) 
	require get_template_directory() . '/inc/fitness-styles.php';

/**
 * Include Styles
 */
if (is_file( get_template_directory() . '/inc/fitness-scripts.php') ) 
	require get_template_directory() . '/inc/fitness-scripts.php';

/**
 * Function Fitness Routing
 */
if (is_file( get_template_directory() . '/inc/fitness-route.php') ) 
	require get_template_directory() . '/inc/fitness-route.php';
