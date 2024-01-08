<?php
/**
 * Section: Aside (Chief's Quote)
 *
 * @package ChoctawNation
 */

?>
<aside class="black-scratch-bg py-5 position-relative overflow-x-hidden" id='chiefs-quote'>
	<div class="scratch-bg z-1 position-absolute" data-aos='fade-left'>
		<div class="scratch-bg__color"></div>
		<div class="scratch-bg__image" style="background-image:url(/wp-content/uploads/2023/12/black-scratch-background.jpg);"></div>
	</div>
	<div class="container position-relative z-2">
		<div class="row align-items-center">
			<div class="col-12 col-lg-5 position-relative">
				<?php
				echo wp_get_attachment_image(
					33,
					'full',
					false,
					array(
						'loading'        => 'lazy',
						'data-aos'       => 'fade-right',
						'data-aos-delay' => '300',
					)
				);
				?>
			</div>
			<div class="col-12 col-lg-7 text-white">
				<p class="mb-5">We want to see our culture, our history, and the story of our Choctaw people in mainstream society. I think the partnership with Disney is
					a great way to educate everybody about the things we have done to contribute to the United States, to France, to Ireland, to the world, and to share
					that story with everybody so they can truly know who we are as Chahta people.</p>
				<span class="h3 bg-white p-3 border border-4 border-black d-block" data-aos="fade-down" data-aos-delay="400">- Gary Batton, Chief of the Choctaw Nation</span>
				<button type="button" class="btn btn-easter-egg" data-bs-toggle="modal" data-bs-target="#diamondModal">
					<i class="fa-kit fa-choctaw-echo-diamond-icon text-light"></i>
				</button>
			</div>
		</div>
	</div>
</aside>
<?php
get_template_part( 'template-parts/modals/modal', 'diamond' );