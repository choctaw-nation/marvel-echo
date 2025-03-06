<?php
/**
 * Basic Footer Template
 *
 * @package ChoctawNation
 */

?>

<footer>
	<div class="py-5 overflow-hidden position-relative">
		<div class="scratch-bg__image z-n1"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-2 p-3">
					<a class="navbar-brand" href="<?php echo esc_url( home_url() ); ?>">
						<?php
						echo wp_get_attachment_image(
							8,
							'full',
							true,
							array(
								'style'   => 'height:200px',
								'class'   => 'logo',
								'loading' => 'lazy',
							)
						);
						?>
					</a>
				</div>

				<div class="col-md-5 p-3 d-flex flex-column">
					<?php
					$links = array(
						array(
							'title' => 'Choctaw Nation of Oklahoma',
							'href'  => 'https://www.choctawnation.com/',
						),
						array(
							'title' => 'Choctaw Cultural Center',
							'href'  => 'https://choctawculturalcenter.com/',
						),
						array(
							'title' => 'Learn Choctaw Language',
							'href'  => 'https://www.choctawnation.com/about/language/',
						),
						array(
							'title' => 'Stickball',
							'href'  => 'https://www.choctawnation.com/about/culture/traditions/stickball/',
						),
					);

					foreach ( $links as $footer_link ) {
						echo '<a class="fs-3 mb-2 text-white" target="_blank" rel="noopener noreferrer" href="' . esc_url( $footer_link['href'] ) . '">' . esc_html( $footer_link['title'] ) . '</a>';
					}
					?>
				</div>
				<div class="col-md-5 p-3 d-flex flex-column">
					<?php
					$links = array(
						array(
							'title' => 'Marvel',
							'href'  => 'https://www.marvel.com/',
						),
						array(
							'title' => 'ECHO: Maya Lopez',
							'href'  => 'https://www.marvel.com/characters/echo-maya-lopez/in-comics',
						),
						array(
							'title' => 'ECHO on Disney Plus',
							'href'  => 'https://ondisneyplus.disney.com/show/echo',
						),
					);

					foreach ( $links as $footer_link ) {
						echo '<a class="fs-3 mb-2 text-white" target="_blank" rel="noopener noreferrer" href="' . esc_url( $footer_link['href'] ) . '">' . esc_html( $footer_link['title'] ) . '</a>';
					}
					?>
				</div>
			</div>
		</div>
	</div>

	<div class="text-bg-dark text-light py-2 text-center">
		<div class="container justify-content-center d-flex">
			<p class="m-0 p-0 w-75">&copy;&nbsp;<?php echo date( 'Y' ); // phpcs:ignore WordPress.DateTime.RestrictedFunctions.date_date ?> Choctaw Nation of Oklahoma. All Rights Reserved.</p>
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>

</html>
