<?php

/**
 * Bootscore functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bootscore
 * @version 5.3.3
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Load required files
 */
require_once 'inc/theme-setup.php';             // Theme setup and custom theme supports
require_once 'inc/enqueue.php';                 // Enqueue scripts and styles


/**
 * Load Bootstrap 5 Nav Walker and registers menus
 * Remove this snippet in v6 and add nav-walker to the enqueue list
 * https://github.com/orgs/bootscore/discussions/347
 */
if ( ! function_exists( 'register_navwalker' ) ) :
	function register_navwalker() {
		require_once 'inc/class-bootstrap-5-navwalker.php';
		// Register Menus
		register_nav_menu( 'main-menu', 'Main menu' );
		register_nav_menu( 'footer-menu', 'Footer menu' );
	}
endif;
add_action( 'after_setup_theme', 'register_navwalker' );



/**
 * Returns the `data-aos-offset` value for objects in a loop
 *
 * @param int $index the loop's index
 */
function get_offset( int $index ): string {
	return 0 === $index ? '' : "data-aos-offset='" . ( $index * 300 ) . "'";
}
