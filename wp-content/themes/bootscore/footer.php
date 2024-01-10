<?php
/**
 * The template for displaying the footer
 *
 * @package ChoctawNation
 */

?>
<footer>
	<div class="bootscore-footer py-5 overflow-hidden position-relative">
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
					<a class='fs-3 mb-2 text-white' target="_blank" rel="noopener noreferrer" href="https://www.choctawnation.com/">Choctaw Nation of Oklahoma</a>
					<a class='fs-3 mb-2 text-white' target="_blank" rel="noopener noreferrer" href="https://choctawculturalcenter.com/">Choctaw Cultural Center</a>
					<a class='fs-3 mb-2 text-white' target="_blank" rel="noopener noreferrer" href="https://www.choctawnation.com/about/language/">Learn Choctaw Language</a>
					<a class='fs-3 mb-2 text-white' target="_blank" rel="noopener noreferrer" href="https://www.choctawnation.com/about/culture/traditions/stickball/">Stickball</a>
				</div>

				<div class="col-md-5 p-3 d-flex flex-column">
					<a class='fs-3 mb-2 text-white' target="_blank" rel="noopener noreferrer" href="https://www.marvel.com/">Marvel</a>
					<a class='fs-3 mb-2 text-white' target="_blank" rel="noopener noreferrer" href="https://www.marvel.com/characters/echo-maya-lopez/in-comics">ECHO: Maya Lopez</a>
					<a class='fs-3 mb-2 text-white' target="_blank" rel="noopener noreferrer" href="https://ondisneyplus.disney.com/show/echo">ECHO on Disney Plus</a>
				</div>
			</div>
		</div>
	</div>

	<div class="bootscore-info bg-dark text-light py-2 text-center">
		<div class="container justify-content-center d-flex">
			<p class="bootscore-copyright m-0 p-0 w-75"><span class="cr-symbol">&copy;</span>&nbsp;<?php echo gmdate( 'Y' ); ?> Choctaw Nation of Oklahoma. All Rights Reserved.</p>
		</div>
	</div>

</footer>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>