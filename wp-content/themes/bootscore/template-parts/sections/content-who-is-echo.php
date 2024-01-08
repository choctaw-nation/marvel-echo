<?php
/**
 * Section: Who is Echo?
 *
 * @package ChoctawNation
 */

$photos = array(
	array(
		'id'     => 26,
		'source' => 'Disney Media Kit',
	),
	array(
		'id'     => 25,
		'source' => 'IMDB Profile',
	),
);

?>
<section class="container" id="who-is-echo">
	<div class="row">
		<div class="col-12 col-lg-6 order-2 order-lg-1">
			<h2>Who is ECHO?</h2>
			<p>Alaqua Cox grew up on the Menominee Indian Reservation in Wisconsin. Prior to being cast in the role of Maya Lopez/Echo, she did not have acting experience outside of a high school play.</p>
			<p>Like her character, Cox is deaf and a partial amputee, making her one of the first actresses with a disability to play a leading role in the Marvel Cinematic Universe (MCU). She first appeared as Maya Lopez/Echo in the MCU's 2021 series Hawkeye.</p>
		</div>
		<div class="col-12 col-lg-6 order-1 order-lg-2">
			<div class="container-fluid">
				<div class="row">
					<?php foreach ( $photos as $photo ) : ?>
					<div class="col mb-4">
						<?php echo wp_get_attachment_image( $photo['id'], 'full', false, array( 'loading' => 'lazy' ) ); ?>
						<small>Source: <?php echo $photo['source']; ?></small>
					</div>
					<?php endforeach; ?>

				</div>
			</div>
		</div>
	</div>
</section>
