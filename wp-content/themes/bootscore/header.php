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
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Favicons -->
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon/safari-pinned-tab.svg" color="#0d6efd">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	<?php wp_head(); ?>

	<link rel="preload" as="image" href="/wp-content/uploads/2023/12/black-scratch-background.jpg">
	<link rel="preload" as="image" href="/wp-content/uploads/2023/12/echo-poster-slant.png">
	<link rel="preload" as="image" href="/wp-content/uploads/2023/12/echo-poster-wide.jpg">
	<link rel="preload" as="image" href="/wp-content/uploads/2023/12/echo-logo.png">
	<link rel="stylesheet" href="https://use.typekit.net/rux8kck.css" preload>
</head>

<body <?php body_class( 'w-100 overflow-x-hidden' ); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<header id="masthead" class="site-header">
			<div class="container-fluid h-100 px-0" style="background:url(/wp-content/uploads/2023/12/black-scratch-background.jpg); background-size: cover; --bs-gutter-x: 0;">
				<div class="row h-100">
					<div class="col">
						<div class="container-fluid container-lg h-100">
							<div class="row h-100">
								<div class="col-6 col-lg-4 order-1 d-flex align-items-center justify-content-center z-1 py-4">
									<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
										<?php
										echo wp_get_attachment_image(
											8,
											'full',
											true,
											array(
												'style'   => 'width:200px;max-width:80%',
												'class'   => 'logo h-auto',
												'loading' => 'eager',
											)
										);
										?>
									</a>
								</div>
								<div class="col-12 col-lg-4 order-3 order-lg-2 z-0 px-0">
									<?php
										echo wp_get_attachment_image(
											12,
											'full',
											true,
											array(
												'style'   => 'width:285px;',
												'class'   => 'logo h-100 d-none d-lg-block object-fit-cover overflow-visible',
												'loading' => 'eager',
											)
										);
										?>
									<?php
									echo wp_get_attachment_image(
										27,
										'full',
										true,
										array(
											'class'   => 'logo d-block d-lg-none',
											'loading' => 'eager',
										)
									);
									?>
								</div>
								<div class="col-6 col-lg-4 order-2 order-lg-3 d-flex align-items-center justify-content-center z-1 py-4">
									<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
										<?php
										echo wp_get_attachment_image(
											11,
											'full',
											true,
											array(
												'style'   => 'width:285px;',
												'class'   => 'logo h-auto',
												'loading' => 'eager',
											)
										);
										?>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<div class="bg-dark">
			<nav id="nav-main" class="navbar navbar-expand-lg py-0 py-lg-2">
				<div class="container justify-content-center px-0 text-center">
					<div class="header-actions d-flex align-items-center">
						<!-- Navbar Toggler -->
						<button class="btn text-light border-0 d-lg-none ms-1 ms-md-2 w-100" type="button" data-bs-toggle="collapse" data-bs-target="#offcanvas-navbar"
								aria-controls="offcanvas-navbar">
							<svg xmlns="http://www.w3.org/2000/svg" style="--size:40px;width:var(--size);height:var(--size);" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
								<path fill-rule="evenodd"
										d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5m0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5" />
							</svg><span class="visually-hidden-focusable">Menu</span>
						</button>
					</div><!-- .header-actions -->

					<div class="collapse navbar-collapse" tabindex="-1" id="offcanvas-navbar">
						<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'container'      => false,
									'menu_class'     => 'w-100 justify-content-around',
									'fallback_cb'    => '__return_false',
									'items_wrap'     => '<ul id="bootscore-navbar" class="navbar-nav %2$s">%3$s</ul>',
									'depth'          => 2,
									'walker'         => new bootstrap_5_wp_nav_menu_walker(),
								)
							);
							?>
					</div>
				</div>
			</nav><!-- .navbar -->

		</div>
