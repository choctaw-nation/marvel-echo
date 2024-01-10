<?php

/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Bootscore
 * @version 5.3.3
 */


// Exit if accessed directly
defined( 'ABSPATH' ) || exit;


/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 *
 * @return array
 */
function bootscore_body_classes($classes) {
  // Adds a class of hfeed to non-singular pages.
  if (!is_singular()) {
    $classes[] = 'hfeed';
  }

  // Adds a class of no-sidebar when there is no sidebar present.
  if (!is_active_sidebar('sidebar-1')) {
    $classes[] = 'no-sidebar';
  }

  return $classes;
}

add_filter('body_class', 'bootscore_body_classes');


/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function bootscore_pingback_header() {
  if (is_singular() && pings_open()) {
    printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
  }
}

add_action('wp_head', 'bootscore_pingback_header');

/**
 * Add GTM script to head
 */
function gtm_wp_head() {
  echo "<!-- Google Tag Manager --> <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','GTM-N8NFBXK5');</script> <!-- End Google Tag Manager -->";
}

/**
 * Add GTM noscript to body
 */
add_action('wp_head', 'gtm_wp_head');

function gtm_body_open() {
	echo '<!-- Google Tag Manager (noscript) --> <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N8NFBXK5" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> <!-- End Google Tag Manager (noscript) -->';
}

add_action( 'wp_body_open', 'gtm_body_open' );