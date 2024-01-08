<?php
/**
 * Section: Aside (Chief's Quote)
 *
 * @package ChoctawNation
 */

?>
<section class="container-fluid black-scratch-bg-right py-5 align-items-center justify-content-center d-flex" id="pullout-1">
	<div class="row">
		<div class="col">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-12 col-lg-5 position-relative">
						<?php
						echo wp_get_attachment_image(
							33,
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
						<p class="mb-5">We want to see our culture, our history, and the story of our Choctaw people in mainstream society. I think the partnership with Disney is
							a great way to educate everybody about the things we have done to contribute to the United States, to France, to Ireland, to the world, and to share
							that story with everybody so they can truly know who we are as Chahta people.</p>
						<span class="h3" data-aos="fade-down">- Gary Batton, Chief of the Choctaw Nation</span>
						<button type="button" class="btn btn-easter-egg" data-bs-toggle="modal" data-bs-target="#diamondModal">
							<i class="fa-kit fa-choctaw-echo-diamond-icon text-light"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php
get_template_part( 'template-parts/modals/modal', 'diamond' );

