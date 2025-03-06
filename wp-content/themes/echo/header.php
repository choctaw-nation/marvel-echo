<?php
/**
 * Basic Header Template
 *
 * @package ChoctawNation
 */

use ChoctawNation\Simple_Navwalker;
?>

<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
	<link rel="preload" as="image" href="/wp-content/uploads/2023/12/black-scratch-background.webp">
	<link rel="dns-prefetch" as='style' href="//use.typekit.net/rux8kck.css">
</head>

<body <?php body_class( 'w-100 overflow-x-hidden' ); ?>>
	<?php wp_body_open(); ?>
	<header id="masthead" class="site-header">
			<div class="container-fluid h-100 px-0 position-relative overflow-hidden">
				<div class="scratch-bg__image"></div>
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
												'class'   => 'logo--mobile h-auto',
												'loading' => 'eager',
												'data-spai-eager' => true,
											)
										);
										?>
									</a>
								</div>
								<div class="col-12 col-lg-4 order-3 order-lg-2 z-0 px-0 logo-container">
									<?php
										echo wp_get_attachment_image(
											12,
											'full',
											true,
											array(
												'class'   => 'logo--desktop h-100 d-none d-lg-block object-fit-cover overflow-visible',
												'loading' => 'eager',
												'data-spai-eager' => true,
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
											'data-spai-eager' => true,
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
												'data-spai-eager' => true,
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
								'walker'         => new Simple_Navwalker(),
							)
						);
						?>
				</div>
			</div>
		</nav><!-- .navbar -->
	</div>
