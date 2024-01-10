<?php

/**
 * Container
 *
 * @package Bootscore
 * @version 5.3.3
 */


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Allow modifying the default bootstrap container class
 *
 * @return string
 */
if ( ! function_exists( '"container"' ) ) {
	function 'container'() {
		return 'container';
	}
}
