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
require_once 'inc/bootscore/theme-setup.php';             // Theme setup and custom theme supports
require_once 'inc/bootscore/enqueue.php';                 // Enqueue scripts and styles


/**
 * Load Bootstrap 5 Nav Walker and registers menus
 * Remove this snippet in v6 and add nav-walker to the enqueue list
 * https://github.com/orgs/bootscore/discussions/347
 */
if ( ! function_exists( 'register_navwalker' ) ) :
	function register_navwalker() {
		require_once 'inc/bootscore/class-bootstrap-5-navwalker.php';
		// Register Menus
		register_nav_menu( 'main-menu', 'Main menu' );
		register_nav_menu( 'footer-menu', 'Footer menu' );

		add_image_size( 'gallery-image', 2880, 2160 );
	}
endif;
add_action( 'after_setup_theme', 'register_navwalker' );



/**
 * Returns the `data-aos-delay` value for objects in a loop
 *
 * @param int $index the loop's index
 */
function get_delay( int $index ): string {
	return 0 === $index ? '' : "data-aos-delay='" . ( $index * 150 ) . "'";
}

/**
 * Gets the randomized Gallery Image Ids from Cache, or creates a new randomized array if the cache has expired
 *
 * @return array
 */
function cno_get_gallery_image_ids(): array {
	// Check if the WP_Filesystem class is available
	if ( ! class_exists( 'WP_Filesystem' ) ) {
		include_once ABSPATH . 'wp-admin/includes/file.php';
	}

	// Initialize the WordPress filesystem
	WP_Filesystem();

	// Path to the cache file
	$cache_file = trailingslashit( WP_CONTENT_DIR ) . 'themes/bootscore/inc/theme/gallery-cache.php';
	$one_hour   = 3600;

	// Check if the cache file exists and is not expired (e.g., cache for 1 hour)
	if ( $GLOBALS['wp_filesystem']->exists( $cache_file ) && ( time() - $GLOBALS['wp_filesystem']->mtime( $cache_file ) < $one_hour ) ) {
		// Load cached data
		$swiper_slide_image_ids = include $cache_file;
	} else {
		$swiper_slide_image_ids = array_merge( array( 48, 49 ), range( 51, 74 ), range( 82, 92 ) );
		shuffle( $swiper_slide_image_ids );
		// Save the array to the cache file
		$GLOBALS['wp_filesystem']->put_contents(
			$cache_file,
			'<?php return ' . var_export( $swiper_slide_image_ids, true ) . ';' // phpcs:ignore
		);
	}
	return $swiper_slide_image_ids;
}