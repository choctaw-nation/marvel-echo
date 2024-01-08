<?php
/**
 * Section: Interviews
 *
 * @package ChoctawNation
 */

$interviews = array(
	array(
		'src'         => 'https://player.vimeo.com/video/899924143?h=e063f2ed1b',
		'headline'    => 'Chief Gary Batton',
		'subheadline' => "Chief Gary Batton reflects on the significance of the Choctaw Nation's partnership with Marvel Studios and the mutual desire to showcase Choctaw culture in a respectful
		and meaningful way.",
	),
	array(
		'src'         => 'https://player.vimeo.com/video/899924274?h=4a9fc7828d',
		'headline'    => 'Seth Fairchild',
		'subheadline' => 'Seth Fairchild, Executive Director of Cultural Services, shares the importance of having community input to help represent the Choctaw origin story and stickball
		accurately.',
	),
	array(
		'src'         => 'https://player.vimeo.com/video/899927693?h=662057a9b8',
		'headline'    => 'Stacy Shepherd',
		'subheadline' => 'Stacy Shepherd, Executive Director of Member Services, discusses the use of Choctaw language and iconography throughout the series.',
	),
);
?>
<section class="container" id="interviews">
	<div class="row row-cols-1 row-cols-lg-3">
		<?php foreach ( $interviews as $index => $interview ) : ?>
		<div class="col mb-5">
			<div class="ratio ratio-16x9 mb-3" data-aos='fade-right' <?php echo get_offset( $index ); ?>>
				<iframe loading="lazy" src="<?php echo $interview['src']; ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>
			</div>
			<h3><?php echo $interview['headline']; ?></h3>
			<p><?php echo $interview['subheadline']; ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</section>
