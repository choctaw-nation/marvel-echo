<?php
/**
 * Enqueue styles & scripts
 *
 * @package Bootscore
 * @version 5.3.4
 */


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Enqueue scripts and styles
 */
function bootscore_scripts() {
	// Custom Fontawesome Kit
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/126b3b4955.js', array(), '1.0', array( 'strategy' => 'async' ) );

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

	$animate = require_once get_template_directory() . '/dist/vendors/animate.asset.php';
	wp_enqueue_style(
		'animate',
		get_template_directory_uri() . '/dist/vendors/animate.css',
		array(),
		$animate['version']
	);

	$global = require_once get_template_directory() . '/dist/global.asset.php';
	wp_enqueue_style(
		'global',
		get_template_directory_uri() . '/dist/global.css',
		array( 'bootstrap', 'animate' ),
		$global['version']
	);
	wp_enqueue_script(
		'global',
		get_template_directory_uri() . '/dist/global.js',
		array( 'bootstrap' ),
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
}

add_action( 'wp_enqueue_scripts', 'bootscore_scripts' );