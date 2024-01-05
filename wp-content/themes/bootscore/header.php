<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootscore
 *
 * @version 5.3.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <!-- Favicons -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
  <link rel="mask-icon" href="<?= get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="theme-color" content="#ffffff">
  <?php wp_head(); ?>

  <link rel="preload" as="image" href="/wp-content/uploads/2023/12/black-scratch-background.jpg">
  <link rel="preload" as="image" href="/wp-content/uploads/2023/12/echo-poster-slant.png">
  <link rel="preload" as="image" href="/wp-content/uploads/2023/12/echo-poster-wide.jpg">
  <link rel="preload" as="image" href="/wp-content/uploads/2023/12/echo-logo.png">


  <link rel="stylesheet" href="https://use.typekit.net/rux8kck.css">
</head>

<body <?php body_class(); ?>>

<?php wp_body_open(); ?>

<div id="page" class="site">

  <header id="masthead" class="site-header">

    <div class="container-fluid h-100 px-0" style="background:url(/wp-content/uploads/2023/12/black-scratch-background.jpg); background-size: cover; --bs-gutter-x: 0;">
      <div class="row h-100">
        <div class="col">
          <div class="container-fluid container-lg h-100">
            <div class="row h-100">
              <div class="col-6 col-lg-4 order-1 d-flex align-items-center justify-content-center z-1 py-4">
                <!-- Navbar Brand -->
                <a class="navbar-brand" href="<?= esc_url(home_url()); ?>"><img src="/wp-content/uploads/2023/12/cno-seal.svg" alt="Choctaw Nation of Oklahoma Seal" class="logo" style="max-width: 80%; height: auto; width: 200px;"></a>
              </div>
              <div class="col-12 col-lg-4 order-3 order-lg-2 z-0 px-0">
                <!-- Navbar Brand -->
                <img src="/wp-content/uploads/2023/12/echo-poster-slant.png" alt="Echo Poster Art" class="logo h-100 d-none d-lg-block" style="object-fit: cover; overflow:visible;" />
                <img src="/wp-content/uploads/2023/12/echo-poster-wide.jpg" alt="Echo Poster Art" class="logo d-block d-lg-none" />
              </div>
              <div class="col-6 col-lg-4 order-2 order-lg-3 d-flex align-items-center justify-content-center z-1 py-4">
                <!-- Navbar Brand -->
                <a class="navbar-brand" href="<?= esc_url(home_url()); ?>"><img src="/wp-content/uploads/2023/12/echo-logo.png" alt="Marvel Echo Logo" class="logo" style="width: 285px; height:auto;"></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header><!-- #masthead -->

  <div class="bg-dark">

      <nav id="nav-main" class="navbar navbar-expand-lg">

        <div class="<?= bootscore_container_class(); ?> justify-content-center px-0">

        <div class="header-actions d-flex align-items-center">

          <!-- Top Nav Widget -->
          <?php if (is_active_sidebar('top-nav')) : ?>
            <?php dynamic_sidebar('top-nav'); ?>
          <?php endif; ?>

          <!-- Navbar Toggler -->
          <button class="btn text-light border-0 d-lg-none ms-1 ms-md-2 w-100" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas-navbar" aria-controls="offcanvas-navbar">
            <i class="fa-solid fa-bars fa-xl py-4"></i><span class="visually-hidden-focusable">Menu</span>
          </button>

        </div><!-- .header-actions -->

          <!-- Offcanvas Navbar -->
          <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvas-navbar">
            <div class="offcanvas-body">

              <!-- Bootstrap 5 Nav Walker Main Menu -->
              <?php
              wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container'      => false,
                'menu_class'     => 'w-100 justify-content-around',
                'fallback_cb'    => '__return_false',
                'items_wrap'     => '<ul id="bootscore-navbar" class="navbar-nav %2$s">%3$s</ul>',
                'depth'          => 2,
                'walker'         => new bootstrap_5_wp_nav_menu_walker()
              ));
              ?>

              <!-- Top Nav 2 Widget -->
              <?php if (is_active_sidebar('top-nav-2')) : ?>
                <?php dynamic_sidebar('top-nav-2'); ?>
              <?php endif; ?>

            </div>
          </div>

        </div><!-- bootscore_container_class(); -->

      </nav><!-- .navbar -->

    </div><!-- .fixed-top .bg-light -->