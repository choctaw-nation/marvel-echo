<?php
/**
 * Section: Aside (Director's Quote)
 *
 * @package ChoctawNation
 */

?>
<section class="container-fluid black-scratch-bg-right py-5 align-items-center justify-content-center d-flex">
	<div class="row">
		<div class="col">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-12 col-lg-5 position-relative">
						<?php
						echo wp_get_attachment_image(
							47,
							'full',
							false,
							array(
								'loading'  => 'lazy',
								'data-aos' => 'fade-right',
							)
						);
						?>
					</div>
					<div class="col-12 col-lg-7 pullout-text">
						<p class="mb-5">"It's so exciting to be able to premiere Echo and it was extremely meaningful to myself to have this screening in Choctaw Nation. One of the things
							we're most excited about is being able to portray the Choctaw culture hopefully in an authentic and exciting way."</p>
						<span class="h3" data-aos="fade-down">- Sydney Freeland, Director</span>
						<!-- <button type="button" class="btn btn-easter-egg" data-bs-toggle="modal" data-bs-target="#bowModal">
						<i class="fa-kit fa-choctaw-echo-bow text-light"></i>
					</button> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/modals/modal', 'bow' );
