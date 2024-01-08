<?php
/**
 * Sun Modal
 *
 * @package ChoctawNation
 */

?>
<div class="modal fade" id="sunModal" tabindex="-1" aria-labelledby="sunModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title" id="sunModalLabel"><i class="fa-kit fa-choctaw-echo-sun-icon"></i> Sun Symbol</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<p>The sun as a symbol of great power and reverence is a major component of southeastern Native cultures.</p>
						</div>
						<?php
						$modal_images = array(
							array(
								'id'      => 35,
								'caption' => 'Chief Batton wears a SUN SYMBOL medallion.',
							),
							array(
								'id'      => 37,
								'caption' => "ECHO's armor features a SUN SYMBOL on the chestplate.",
							),
						);
						?>
						<?php foreach ( $modal_images as $modal_image ) : ?>
						<div class="col-12 col-xl-6 position-relative mb-3">
							<?php
							echo wp_get_attachment_image(
								$modal_image['id'],
								'full',
								false,
								array(
									'class'   => 'easter-egg-image pb-5',
									'loading' => 'lazy',
								)
							);
							?>
							<p class="easter-egg-overlay-text"><?php echo $modal_image['caption']; ?></p>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

