<?php
/**
 * Section: How to Watch
 *
 * @package ChoctawNation
 */

?>
<section class="container" id="how-to-watch">
	<div class="row">
		<div class="col-12 col-lg-6">
			<a href="https://ondisneyplus.disney.com/show/echo" target="_blank" rel="noopener noreferrer">
				<?php
				echo wp_get_attachment_image(
					24,
					'full',
					false,
					array(
						'loading' => 'lazy',
						'class'   => 'mb-3',
					)
				);
				?>
			</a>
		</div>
		<div class="col-12 col-lg-6">
			<h2>How to Watch</h2>
			<p>Echo can be streamed on Hulu and Disney+ beginning January 10, 2024.</p>
		</div>
	</div>
</section>
