<?php
/**
 * Diamond Modal
 *
 * @package ChoctawNation
 */

?>
<div class="modal fade" id="diamondModal" tabindex="-1" aria-labelledby="diamondModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title" id="diamondModalLabel"><i class="fa-kit fa-choctaw-echo-diamond-icon"></i> Diamond Symbol</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<p>One of the most traditional patterns found in Choctaw beadwork is the diamond, which represents the eastern diamondback rattlesnake. Our ancestors revered it
								as an animal of great strength and power, but it did not attack without provocation or warning.</p>
						</div>
						<?php
						$modal_images = array(
							array(
								'id'      => 44,
								'caption' => 'Traditional Dress featuring DIAMOND SYMBOLs in the pattern.',
							),
							array(
								'id'      => 41,
								'caption' => "ECHO's armor features a DIAMOND SYMBOL on the shoulder piece.",
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
									'class'   => 'border border-3 border-black border-bottom-0',
									'loading' => 'lazy',
								)
							);
							?>
							<p class="border border-3 border-black font-comic bg-white px-4 py-1"><?php echo $modal_image['caption']; ?></p>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
