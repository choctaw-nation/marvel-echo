<?php
/**
 * Bow Modal
 *
 * @package ChoctawNation
 */

?>
<div class="modal fade" id="bowModal" tabindex="-1" aria-labelledby="bowModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered modal-xl">
		<div class="modal-content">
			<div class="modal-header">
				<h1 class="modal-title" id="diamondModalLabel"><i class="fa-kit fa-choctaw-echo-bow"></i> Center of Seal</h1>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<div class="modal-body">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<p>The center of the Choctaw Seal features rising tobacco smoke from the pipe which can symbolize prayer connections, and the unstrung bow is a symbol of the
								Choctaw people's love of peace but willingness to go to war if attacked. The three arrows honor Choctaw Chiefs Pushmataha, Moshulatubbee and Apuckshunnubbee.
							</p>
						</div>
						<?php
						$modal_images = array(
							array(
								'id'      => 43,
								'caption' => 'The official flag of the Choctaw Nation featuring the Seal.',
							),
							array(
								'id'      => 42,
								'caption' => "ECHO's armor features the CENTER OF THE SEAL on the arm piece.",
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
									'class'   => 'border border-3 border-black border-bottom-0 pb-5',
									'loading' => 'lazy',
								)
							);
							?>
							<p class="border border-3 border-black font-comic bg-white px-4 py-1">
								<?php echo $modal_image['caption']; ?>
							</p>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
