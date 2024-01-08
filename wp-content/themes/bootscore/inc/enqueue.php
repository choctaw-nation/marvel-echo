<?php
/**
 * Enqueue styles & scripts
 *
 * @package ChoctawNation
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Enqueue scripts and styles
 */
function cno_scripts() {
	wp_enqueue_style(
		'typekit',
		'https://use.typekit.net/rux8kck.css',
		array(),
		wp_get_theme()->get( 'Version' )
	);
	// Custom Fontawesome Kit
	wp_enqueue_script(
		'fontawesome',
		'https://kit.fontawesome.com/126b3b4955.js',
		array(),
		'1.0',
		array( 'strategy' => 'async' )
	);

	cno_enqueue_vendors();

	$global = require_once get_template_directory() . '/dist/global.asset.php';
	wp_enqueue_style(
		'global',
		get_template_directory_uri() . '/dist/global.css',
		array( 'bootstrap', 'aos' ),
		$global['version']
	);
	wp_enqueue_script(
		'global',
		get_template_directory_uri() . '/dist/global.js',
		array( 'bootstrap', 'aos', 'lite-vimeo' ),
		$global['version'],
		array( 'strategy' => 'defer' )
	);

	// Style CSS
	wp_enqueue_style(
		'main',
		get_stylesheet_uri(),
		array( 'global' ),
		wp_get_theme()->get( 'Version' )
	);

	cno_enqueue_gtm_scripts();
	cno_remove_wordpress_styles(
		array(
			'classic-theme-styles',
			'wp-block-library',
			'dashicons',
			'global-styles',
			'wp-emoji-styles-inline',
		)
	);
}

add_action( 'wp_enqueue_scripts', 'cno_scripts' );

/** Enqueue Vendor Script/Styles */
function cno_enqueue_vendors() {
	$bootstrap = require_once get_template_directory() . '/dist/vendors/bootstrap.asset.php';
	wp_enqueue_style(
		'bootstrap',
		get_template_directory_uri() . '/dist/vendors/bootstrap.css',
		array(),
		$bootstrap['version']
	);
	wp_enqueue_script(
		'bootstrap',
		get_template_directory_uri() . '/dist/vendors/bootstrap.js',
		array(),
		$bootstrap['version'],
		array( 'strategy' => 'defer' )
	);

	$aos = require_once get_template_directory() . '/dist/vendors/aos.asset.php';
	wp_enqueue_style(
		'aos',
		get_template_directory_uri() . '/dist/vendors/aos.css',
		array(),
		$aos['version']
	);
	wp_enqueue_script(
		'aos',
		get_template_directory_uri() . '/dist/vendors/aos.js',
		array(),
		$aos['version'],
		array( 'strategy' => 'defer' )
	);

	$lite_vimeo = require_once get_template_directory() . '/dist/vendors/lite-vimeo.asset.php';
	wp_enqueue_script(
		'lite-vimeo',
		get_template_directory_uri() . '/dist/vendors/lite-vimeo.js',
		array(),
		$lite_vimeo['version'],
		array( 'strategy' => 'defer' )
	);
}

/** Adds Google Tag Manager scripts to their appropriate places. */
function cno_enqueue_gtm_scripts() {
	add_action(
		'wp_head',
		function (): void {
			echo "<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-N8NFBXK5');</script>
		<!-- End Google Tag Manager -->";
		}
	);

	/**
	 * Triggered after the opening body tag.
	 */
	add_action(
		'wp_body_open',
		function (): void {
			echo '<!-- Google Tag Manager (noscript) -->
			<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8NFBXK5"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) -->';
		}
	);
}

/**
 * Removes WP Core styles
 *
 * @param array $handles the styles to dequeue
 */
function cno_remove_wordpress_styles( array $handles ) {
	foreach ( $handles as $handle ) {
		wp_dequeue_style( $handle );
	}
}
