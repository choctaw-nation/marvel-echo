<?php
/**
 * Section: Interviews
 *
 * @package ChoctawNation
 */

$interviews = array(
	array(
		'src'         => '899924143',
		'headline'    => 'Chief Gary Batton',
		'subheadline' => "Chief Gary Batton reflects on the significance of the Choctaw Nation's partnership with Marvel Studios and the mutual desire to showcase Choctaw culture in a respectful
		and meaningful way.",
	),
	array(
		'src'         => '899924274',
		'headline'    => 'Seth Fairchild',
		'subheadline' => 'Seth Fairchild, Executive Director of Cultural Services, shares the importance of having community input to help represent the Choctaw origin story and stickball
		accurately.',
	),
	array(
		'src'         => '899927693',
		'headline'    => 'Stacy Shepherd',
		'subheadline' => 'Stacy Shepherd, Executive Director of Member Services, discusses the use of Choctaw language and iconography throughout the series.',
	),
);
?>
<section class="container" id="interviews">
	<div class="row row-cols-1 row-cols-lg-3 row-gap-5">
		<?php foreach ( $interviews as $index => $interview ) : ?>
		<div class="col">
			<div class="ratio ratio-16x9 mb-3" data-aos='fade-right' <?php echo cno_get_delay( $index ); ?>>
				<lite-vimeo videoid='<?php echo $interview['src']; ?>'></lite-vimeo>
			</div>
			<h3><?php echo $interview['headline']; ?></h3>
			<p><?php echo $interview['subheadline']; ?></p>
		</div>
		<?php endforeach; ?>
	</div>
</section>
