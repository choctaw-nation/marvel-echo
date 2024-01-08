<?php
/**
 * Section: Choctaw Culture
 *
 * @package ChoctawNation
 */

$symbols = array(
	array(
		'id'          => 34,
		'body'        => '<p>The Chahta origin story plays a big part at the beginning of Echo. Our ancestors emerged from Nanih Waiya, the Mother Mound, in what is now Mississippi. The imagery of the clay people comes from this story.</p><p>Read our origin story and learn more about our earliest ancestors.</p>',
		'button_text' => '<i class="fa-sharp fa-solid fa-rhombus" aria-hidden="true"></i> Origin Story',
		'button_link' => 'https://www.choctawnation.com/about/history/',
	),
	array(
		'id'          => 30,
		'body'        => '<p>The Biskinik is a special friend to the Chahta people. This little woodpecker was blessed by the Creator to live near our ancestors and warn them of danger by tapping out messages on trees. Today, our tribal newspaper bears its name in honor of the "little Choctaw news bird."</p><p>Learn more about the Biskinik paper.</p>',
		'button_text' => '<i class="fa-solid fa-feather" aria-hidden="true"></i> Biskinik',
		'button_link' => 'https://www.choctawnation.com/biskinik/',
	),
	array(
		'id'          => 31,
		'body'        => '<p>Ishtaboli, or stickball, is an ancient game played by several Native American tribes. Originally, it helped our ancestors settle disputes and avoid war. Today, the game is played competitively and in exhibitions across the Choctaw Nation Reservation and beyond.</p><p>Learn more about this exciting and fast-paced game.</p>',
		'button_text' => '<i class="fa-solid fa-lacrosse-stick-ball" aria-hidden="true"></i> Stickball',
		'button_link' => 'https://www.choctawnation.com/about/culture/traditions/stickball/',
	),
);
?>
<section class="container" id="choctaw-culture">
	<div class="row">
		<div class="col">
			<h2>LIGHTS, CAMERA, CULTURE!</h2>
			<p>One of the many ways Marvel Studios honored Chahta culture in Echo is through the use of symbols, icons, and stories that are important to our people. As the story
				progresses, look for Choctaw diamonds, swirls, artwork, and our seal in costumes and set dressings throughout each episode.</p>
			<p><i>How many Choctaw symbols can you spot?</i></p>
		</div>
	</div>

	<div class="row row-cols-1 row-cols-lg-3">
		<?php foreach ( $symbols as $index => $symbol ) : ?>
		<div class='col mb-5 d-flex flex-column'>
			<?php
			echo wp_get_attachment_image(
				$symbol['id'],
				'full',
				false,
				array(
					'class'           => 'mb-3 animate__animated animate__fadeInLeft',
					'data-aos'        => 'fade-right',
					'data-aos-offset' => $index * 300,
					'loading'         => 'lazy',
				)
			);
			echo $symbol['body'];
			?>
			<p class="h3 mt-auto">
				<a href="<?php echo $symbol['button_link']; ?>" target="_blank" rel="noreferrer noopener"
					class="btn btn-primary btn-lg rounded-0 border-0"><?php echo $symbol['button_text']; ?></a>
			</p>
		</div>
		<?php endforeach; ?>
	</div>

	<div class="row flex-row-reverse">
		<div class="col-12 col-lg-5 ">
			<?php
			echo wp_get_attachment_image(
				32,
				'full',
				false,
				array(
					'class'    => 'mb-3',
					'data-aos' => 'fade-right',
					'loading'  => 'lazy',
				)
			);
			?>
		</div>
		<div class="col-12 col-lg-7">
			<p>Traditional Choctaw dress incorporates some of our most important iconography. The diamond pattern represents the diamondback rattlesnake, who protected our
				ancestors' crops. These snakes are not aggressive, but they stand ready to attack if provoked, traits that are also present in the Chahta people.</p>
			<p>Learn more about the symbols we use in our traditional regalia.</p>
			<p class="h3">
				<a href="https://www.choctawnation.com/about/culture/traditions/dress/" target="_blank" rel="noreferrer noopener" class="btn btn-primary rounded-0 border-0">
					<i class="fa-sharp fa-regular fa-person-dress-burst" aria-hidden="true"></i> Traditional Choctaw Dress</a>
			</p>
		</div>
	</div>
</section>
