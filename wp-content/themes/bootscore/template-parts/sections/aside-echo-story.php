<?php
/**
 * Section: Aside (Echo Story)
 *
 * @package ChoctawNation
 */

?>
<aside class="black-scratch-bg position-relative py-5 overflow-x-hidden" id='echo-story'>
	<div class="scratch-bg z-1 position-absolute" data-aos='fade-left'>
		<div class="scratch-bg__color"></div>
		<div class="scratch-bg__image">
			<?php
			echo wp_get_attachment_image(
				7,
				'full',
				false,
				array(
					'loading' => 'lazy',
					'class'   => 'h-100 w-100 object-fit-cover',
				)
			);
			?>
		</div>
	</div>
	<div class="container z-2 position-relative">
		<div class="row d-flex align-items-center">
			<div class="col-12 col-lg-6 position-relative">
				<?php
				echo wp_get_attachment_image(
					19,
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
			<div class="col-12 col-lg-6 text-white my-5 p-5">
				<h2 class="text-white">The Story of ECHO</h2>
				<p class="mb-5 text-shadow-subtle">Streaming exclusively on Disney+ and Hulu, the origin story of Echo revisits Maya Lopez, whose ruthless behavior in New
					York
					City catches
					up with
					her in her hometown. She must face her past, reconnect with her Native American roots and embrace the meaning of family and community if she ever
					hopes to move forward.</p>
				<small data-aos="fade-down" class="quote-attribution bg-white border border-3 border-black p-3 text-black">Courtesy of <a href="https://press.disneyplus.com/media-kits/echo"
						target="_blank" rel="noopener noreferrer">Disney Media Kit</a></small>
				<button type="button" class="btn btn-easter-egg position-absolute p-0 border-0" data-bs-toggle="modal" data-bs-target="#sunModal">
					<i class="fa-kit fa-choctaw-echo-sun-icon text-light"></i>
				</button>
			</div>
		</div>
	</div>
</aside>

<?php
get_template_part( 'template-parts/modals/modal', 'sun' );
