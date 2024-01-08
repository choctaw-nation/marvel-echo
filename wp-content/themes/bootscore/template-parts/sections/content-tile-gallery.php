<?php
/**
 * Section: Tile Gallery
 *
 * @package ChoctawNation
 */

$aside_photos = array(
	array(
		'id'      => 45,
		'caption' => 'Choctaw Nation consultants and Choctaw artist and writer Steven Paul Judd
	pose on set during the first day of filming.',
	),
	array(
		'id'      => 46,
		'caption' => 'Following a demonstration of the Choctaw Walk Dance, the cast, crew, and
	consultants come together to commemorate the first day of filming.',
	),
);
?>
<section class="container-fluid bg-dark" id="tile-gallery">
	<div class="row d-flex flex-row">
		<div class="col">
			<div class="container position-relative">
				<div class="row h-100 py-4">
					<?php foreach ( $aside_photos as $aside_photo ) : ?>
					<div class="col-12 col-lg-6 position-relative mb-3">
						<?php
						echo wp_get_attachment_image(
							$aside_photo['id'],
							'full',
							false,
							array(
								'class'   => 'easter-egg-image border-bottom-0',
								'loading' => 'lazy',
							)
						);
						?>
						<p class="easter-egg-overlay-text position-relative" style="right: 0; left: 0;"><?php echo $aside_photo['caption']; ?></p>
					</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</section>
