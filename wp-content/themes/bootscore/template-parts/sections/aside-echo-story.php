<?php
/**
 * Section: Aside (Echo Story)
 *
 * @package ChoctawNation
 */

?>
<section class="container-fluid black-scratch-bg-right py-1 align-items-center justify-content-center d-flex" id="echo-story">
	<div class="row">
		<div class="col">
			<div class="container">
				<div class="row d-flex align-items-center">
					<div class="col-12 col-lg-6 position-relative">
						<?php
						echo wp_get_attachment_image(
							19,
							'full',
							false,
							array(
								'loading'  => 'lazy',
								'data-aos' => 'fade-right',
							)
						);
						?>
					</div>
					<div class="col-12 col-lg-6 pullout-text">
						<h2>The Story of ECHO</h2>
						<p class="mb-4">Streaming exclusively on Disney+ and Hulu, the origin story of Echo revisits Maya Lopez, whose ruthless behavior in New York
							City catches
							up with
							her in her hometown. She must face her past, reconnect with her Native American roots and embrace the meaning of family and community if she ever
							hopes to move forward.</p>
						<span data-aos="fade-down">
							<small>Courtesy of <a href="https://press.disneyplus.com/media-kits/echo" target="_blank" rel="noopener noreferrer">Disney Media Kit</a></small>
						</span>
						<button type="button" class="btn btn-easter-egg" data-bs-toggle="modal" data-bs-target="#sunModal">
							<i class="fa-kit fa-choctaw-echo-sun-icon text-light"></i>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php
get_template_part( 'template-parts/modals/modal', 'sun' );
