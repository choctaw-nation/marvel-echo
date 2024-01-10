<?php
/**
 * Section: Hollywood & Choctaw
 *
 * @package ChoctawNation
 */

?>
<section class="container" id="hollywood-x-choctaw">
	<div class="row">
		<div class="col">
			<h2>Hollywood Comes to the Choctaw Nation</h2>
			<p>Marvel Studios screened the first two episodes of the upcoming series Echo during Choctaw Nation's annual powwow at The District Theater on November 3, 2023.</p>
			<p>The episodes were presented by director Sydney Freeland, who was joined by Seth Fairchild, Executive Director of Cultural Services for Choctaw Nation, for a Q&A
				conversation after the screening.</p>
			<p class="h3">
				<a href="https://www.choctawnation.com/biskinik/news/marvel-studios-unveils-echo-at-choctaw-day-celebration/" target="_blank" rel="noreferrer noopener"
				   class="btn btn-primary rounded-0 border-0"><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i> View Article</a>
			</p>
		</div>
	</div>
	<div class="row position-relative" style="--swiper-navigation-color:var(--bs-primary);">
		<div class="col-1">
			<div class="swiper-button-prev"></div>
		</div>
		<div class="col-10">
			<!-- Swiper -->
			<div class="swiper w-100 h-100">
				<div class="swiper-wrapper">
					<?php
					$swiper_slide_image_ids = array( 48, 49, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74 );
					$content                = '';
					foreach ( $swiper_slide_image_ids as $image_id ) {
						$content .= "<div class='swiper-slide text-center d-flex justify-content-center align-items-center bg-white'><a href='" . wp_get_attachment_url( $image_id ) . "'>" . wp_get_attachment_image(
							$image_id,
							'medium',
							false,
							array(
								'loading' => 'lazy',
								'class'   => 'object-fit-cover',
							)
						) . '</a></div>';
					}
					if ( function_exists( 'slb_activate' ) ) {
						$content = slb_activate( $content );
					}
								echo $content;
					?>
				</div>
			</div>
			<div class="col-1">
				<div class="swiper-button-next"></div>
			</div>
		</div>
	</div>
</section>
