<?php
/**
 * The global helper functions to use.
 *
 * This file should be used to define functions that are specifically meant to live in the global scope. Remember to prefix your functions with `cno_` to avoid conflicts.
 *
 * @package ChoctawNation
 */

/**
 * Reads an SVG file and returns its content.
 *
 * @param string       $logo_path The path to the logo file (must exist inside the theme directory).
 * @param string|false $alt_text The alt text for the image. False to not set an alt text.
 * @param string       $fallback The fallback text if the file cannot be read.
 *
 * @return string The SVG content.
 */
function cno_read_svg( string $logo_path, string|false $alt_text, string $fallback = 'This file could not be found' ): string {
	// Initialize the WP Filesystem
	global $wp_filesystem;
	if ( empty( $wp_filesystem ) ) {
		require_once ABSPATH . '/wp-admin/includes/file.php';
		WP_Filesystem();
	}

	// Get the path to the logo file
	$theme_directory = get_template_directory();
	$svg_path        = $theme_directory . $logo_path;

	// Check if file exists and read it
	if ( ! $wp_filesystem->exists( $svg_path ) ) {
		return $fallback;
	}

	$svg_content = $wp_filesystem->get_contents( $svg_path );
	if ( $svg_content ) {
		$svg_content = str_replace( '<svg', '<svg alt="' . esc_attr( $alt_text ) . '"', $svg_content );
		return $svg_content;
	}
	return $fallback;
}

/**
 * Echoes SVG Content
 *
 * @param string       $logo_path The path to the logo file (must exist inside the theme directory).
 * @param string|false $alt_text The alt text for the image. False to not set an alt text.
 * @param string       $fallback The fallback text if the file cannot be read.
 *
 * @return void
 */
function cno_echo_svg( string $logo_path, string|false $alt_text, string $fallback = 'This file could not be found' ): void {
	echo cno_read_svg( $logo_path, $alt_text, $fallback );
}


/**
 * Returns the `data-aos-delay` value for objects in a loop
 *
 * @param int $index the loop's index
 */
function cno_get_delay( int $index ): string {
	return 0 === $index ? '' : "data-aos-delay='" . ( $index * 150 ) . "'";
}

/**
 * Gets the randomized Gallery Image Ids from Cache, or creates a new randomized array if the cache has expired
 *
 * @return array
 */
function cno_get_gallery_image_ids(): array {
	$transient_length       = 60 * 60; // 1 hour
	$swiper_slide_image_ids = get_transient( 'cno_gallery_image_ids' );
	if ( ! $swiper_slide_image_ids ) {
		$swiper_slide_image_ids = array_merge( array( 48, 49 ), range( 51, 74 ), range( 82, 92 ) );
		shuffle( $swiper_slide_image_ids );
		set_transient( 'cno_gallery_image_ids', $swiper_slide_image_ids, $transient_length );
	}
	return $swiper_slide_image_ids;
}
