<?php
/**
 * Section: Aside (Director's Quote)
 *
 * @package ChoctawNation
 */

?>
<aside class="black-scratch-bg py-5 position-relative overflow-x-hidden" id='director-quote'>
	<div class="scratch-bg z-1 position-absolute" data-aos='fade-left'>
		<div class="scratch-bg__color"></div>
		<div class="scratch-bg__image"></div>
	</div>
	<div class="container position-relative z-2">
		<div class="row d-flex align-items-center">
			<div class="col-12 col-lg-5 position-relative">
				<?php
				echo wp_get_attachment_image(
					47,
					'full',
					false,
					array(
						'loading'        => 'lazy',
						'data-aos'       => 'fade-right',
						'data-aos-delay' => '600',
						'class'          => 'mb-4 mb-lg-0',
					)
				);
				?>
			</div>
			<div class="col-12 col-lg-7 text-white p-5">
				<p class="mb-5 mb-lg-2 text-shadow-subtle">"It's so exciting to be able to premiere Echo and it was extremely meaningful to myself to have this screening in Choctaw
					Nation. One of the things
					we're most excited about is being able to portray the Choctaw culture hopefully in an authentic and exciting way."</p>
				<span class="quote-attribution h3 bg-white p-3 border border-4 border-black d-block text-black" data-aos="fade-down" data-aos-delay="150">- Sydney Freeland, Director</span>
				<button type="button" class="btn btn-easter-egg border-0 position-absolute p-0" data-bs-toggle="modal" data-bs-target="#bowModal">
					<i class="fa-kit fa-choctaw-echo-bow text-light"></i>
				</button>
			</div>
		</div>
	</div>
</aside>

<?php
get_template_part( 'template-parts/modals/modal', 'bow' );