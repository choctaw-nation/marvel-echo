<?php
/**
 * The page.
 *
 * @package ChoctawNation
 */

get_header();
?>
<div id="content" class="site-content">
	<div id="primary" class="content-area">
		<main id="main" class="site-main my-3">
			<section class="container" id="overview">
				<div class="row">
					<div class="col">
						<h2>ITT<span class='fw-semibold' style="padding-left:2px;">I̱</span>KANA ACHUKMA (A Good Friendship)</h2>
						<p>Native American representation in television and film has a long, not-so-sterling history, but things seem to be changing for the better in recent years. Studios
							have shown interest in reversing some of the damaging and inaccurate stereotypes Native Americans have faced on the big screen. Groundbreaking and award-winning
							shows like Reservation Dogs have blazed a trail for Indigenous inclusion in storytelling, cultural representation, casting, costume design, and much more.</p>
						<p>Marvel Studios' new series, Echo, is an exciting project where Native representation, specifically Choctaw representation, has been placed squarely at the
							forefront of
							creative development. From the beginning, experts in Choctaw history, culture, and language were included in conversations about how Choctaw people would be
							portrayed. This significant step shows Marvel Studios' desire to be part of the future of Native American representation in Hollywood, and the Choctaw Nation is
							proud to
							partner with the studio on this project.</p>
					</div>
				</div>
			</section>

			<section class="container" id="interviews">
				<div class="row row-cols-1 row-cols-lg-3">
					<?php
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
					<?php foreach ( $interviews as $index => $interview ) : ?>
					<div class="col mb-5">
						<div class="<?php echo 'ratio ratio-16x9 mb-3 animate__animated animate__fadeInLeft ' . get_animation_delay_class( $index ); ?>">
							<iframe loading="lazy" src="<?php echo $interview['src']; ?>" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture"></iframe>
						</div>
						<h3><?php echo $interview['headline']; ?></h3>
						<p><?php echo $interview['subheadline']; ?></p>
					</div>
					<?php endforeach; ?>
				</div>
			</section>

			<section class="container-fluid bg-dark" id="tile-gallery">
				<div class="row d-flex flex-row">
					<div class="col">
						<div class="container position-relative">
							<div class="row h-100 py-4">
								<?php
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
								<?php foreach ( $aside_photos as $aside_photo ) : ?>
								<div class="col-12 col-xl-6 position-relative mb-3">
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
					<?php
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
					<?php foreach ( $symbols as $index => $symbol ) : ?>
					<div class='col mb-5 d-flex flex-column'>
						<?php
						echo wp_get_attachment_image(
							$symbol['id'],
							'full',
							false,
							array(
								'class'   => 'mb-3 animate__animated animate__fadeInLeft ' . get_animation_delay_class( $index ),
								'loading' => 'lazy',
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

				<div class="row">
					<div class="col-12 col-lg-5 order-1 order-lg-2">
						<?php
						echo wp_get_attachment_image(
							32,
							'full',
							false,
							array(
								'class'   => 'mb-3',
								'loading' => 'lazy',
							)
						);
						?>
					</div>
					<div class="col-12 col-lg-7 order-2 order-lg-1">
						<p>Traditional Choctaw dress incorporates some of our most important iconography. The diamond pattern represents the diamondback rattlesnake, who protected our
							ancestors' crops. These snakes are not aggressive, but they stand ready to attack if provoked, traits that are also present in the Chahta people.</p>
						<p>Learn more about the symbols we use in our traditional regalia.</p>
						<p class="h3"><a href="https://www.choctawnation.com/about/culture/traditions/dress/" target="_blank" rel="noreferrer noopener"
							   class="btn btn-primary rounded-0 border-0"><i class="fa-sharp fa-regular fa-person-dress-burst" aria-hidden="true"></i> Traditional Choctaw Dress</a></p>
					</div>
				</div>
			</section>

			<section class="container-fluid black-scratch-bg-right py-5 align-items-center justify-content-center d-flex" id="pullout-1">
				<div class="row">
					<div class="col">
						<div class="container">
							<div class="row d-flex align-items-center">
								<div class="col-12 col-lg-5 position-relative">
									<?php
									echo wp_get_attachment_image(
										33,
										'full',
										false,
										array(
											'loading' => 'lazy',
										)
									);
									?>
								</div>
								<div class="col-12 col-lg-7 pullout-text">
									<p class="mb-5">We want to see our culture, our history, and the story of our Choctaw people in mainstream society. I think the partnership with Disney is
										a great way to educate everybody about the things we have done to contribute to the United States, to France, to Ireland, to the world, and to share
										that story with everybody so they can truly know who we are as Chahta people.</p>
									<span class="h3">- Gary Batton, Chief of the Choctaw Nation</span>
									<button type="button" class="btn btn-easter-egg" data-bs-toggle="modal" data-bs-target="#diamondModal">
										<i class="fa-kit fa-choctaw-echo-diamond-icon text-light"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="container" id="choctaw-language">
				<div class="row">
					<div class="col">
						<h2>Choctaw Language</h2>
						<p>One of the most important ways the Choctaw Nation exercises its sovereignty is through its language. For generations, Choctaw people were discouraged or outright
							forbidden to speak their language, and as fluent speakers passed away without handing it down to younger generations, it nearly died out.</p>
						<p>The Choctaw Language is going through a period of revitalization, however. In recent years, the <a href="https://www.choctawnation.com/about/language/"
							   target="_blank">Chahta Anumpa Aiikhvna (Choctaw School of Language)</a> has ramped up efforts to increase the number of speakers through the incorporation of
							technology and a wide variety of learning options.</p>
						<p>At each regular meeting, the <a href="https://www.choctawnation.com/about/government/tribal-council/" target="_blank">Tribal Council</a> honors a Choctaw First
							Language Speaker of the Month. These culture keepers hold a cherished place in our tribe.</p>
						<p>Having <a href="https://www.marvel.com/tv-shows/echo/1" target="_blank">Echo</a> dubbed in Choctaw is an especially significant milestone for the tribe. Teresa
							Billy and other language experts worked diligently with Marvel Studios to ensure the highest level of accuracy in the translation process.</p>
					</div>
				</div>
			</section>

			<section class="container" id="teri-billy">
				<div class="row">
					<div class="col-12 col-lg-6 order-1 order-lg-2">
						<div class="ratio ratio-16x9 mb-3">
							<iframe loading="lazy" src="https://player.vimeo.com/video/899934703?h=6df7bf7874" width="640" height="360" frameborder="0"
									allow="autoplay; fullscreen; picture-in-picture"></iframe>
						</div>
					</div>
					<div class="col-12 col-lg-6 order-2 order-lg-1">
						<h2>Teresa Billy</h2>
						<p>Teresa Billy is the Assistant Director of the Chahta Anumpa Aiikhvna, or the Choctaw School of Language. Teresa is a first language Choctaw speaker, and her main
							goal is to protect the identity of the Choctaw people by preserving their language. According to her, "It is important for each of us, as well as for our future
							generations, to connect us to our mother tongue, which relates us to our rich history, culture and language."</p>
					</div>
					<div class="col-12 order-3">
						<p>Teresa's work with Marvel Studios' translators allowed the show to be subtitled in Choctaw, a first for our tribe. Not only can tribal members see the language of
							their
							ancestors on a major television series, but it will help them realize how important it is to learn their language and use it in their everyday lives.</p>
						<p>Teresa's husband, Curtis Billy, also worked on the Echo project, providing valuable historical information about the game of stickball. Unfortunately, Curtis
							passed away before he could see his contributions on the big screen, but we are so grateful for his involvement.</p>
					</div>
				</div>
			</section>

			<section class="container" id="behind-the-scenes">
				<div class="row">
					<div class="col-12 col-lg-6">
						<div class="ratio ratio-16x9 mb-3">
							<iframe loading="lazy" src="https://player.vimeo.com/video/899928430" width="640" height="360" frameborder="0"
									allow="autoplay; fullscreen; picture-in-picture"></iframe>
						</div>
					</div>
					<div class="col-12 col-lg-6">
						<h2>This Is Choctaw</h2>
						<p>Go behind the scenes to see how working closely with Choctaw Nation helped bring Marvel Studios' #Echo to life.</p>
					</div>
				</div>
			</section>

			<section class="container-fluid black-scratch-bg-right py-1 align-items-center justify-content-center d-flex" id="echo-story">
				<div class="row">
					<div class="col">
						<div class="container">
							<div class="row d-flex align-items-center">
								<div class="col-12 col-lg-6 position-relative">
									<?php
									echo wp_get_attachment_image( 19, 'full', false, array( 'loading' => 'lazy' ) );
									?>
								</div>
								<div class="col-12 col-lg-6 pullout-text">
									<h2>The Story of ECHO</h2>
									<p class="mb-4">Streaming exclusively on Disney+ and Hulu, the origin story of Echo revisits Maya Lopez, whose ruthless behavior in New York City catches
										up with
										her in her hometown. She must face her past, reconnect with her Native American roots and embrace the meaning of family and community if she ever
										hopes to move forward.</p>
									<span>
										<small>Courtesy of <a href="https://press.disneyplus.com/media-kits/echo" target="_blank" rel="noopener noreferrer">Disney Media
												Kit</a></small>
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

			<section class="container" id="trailer">
				<div class="row">
					<div class="col">
						<h2>Official Trailer (Choctaw Subbed)</h2>
						<div class="ratio ratio-16x9 mb-3">
							<iframe loading="lazy" width="560" height="315" src="https://www.youtube.com/embed/wlgpDnsU12E?si=GW4aEmDC5YpiVUMt&rel=0"
									title="Echo Official Trailer (Choctaw Subbed)" frameborder="0"
									allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"></iframe>
						</div>
					</div>
				</div>
			</section>

			<section class="container" id="hollywood-x-choctaw">
				<div class="row">
					<div class="col">
						<h2>Hollywood Comes to the Choctaw Nation</h2>
						<p>Marvel Studios screened the first two episodes of the upcoming series Echo during Choctaw Nation's annual powwow at The District Theater on November 3, 2023.</p>
						<p>The episodes were presented by director Sydney Freeland, who was joined by Seth Fairchild, Executive Director of Cultural Services for Choctaw Nation, for a Q&A
							conversation after the screening.</p>
						<p class="h3"><a href="https://www.choctawnation.com/biskinik/news/marvel-studios-unveils-echo-at-choctaw-day-celebration/" target="_blank" rel="noreferrer noopener"
							   class="btn btn-primary rounded-0 border-0"><i class="fa-solid fa-arrow-up-right-from-square" aria-hidden="true"></i> View Article</a></p>
					</div>
				</div>

				<div class="row position-relative">
					<div class="col-1">
						<div class="swiper-button-prev"></div>
					</div>

					<div class="col-10">
						<!-- Swiper -->
						<div class="swiper">
							<div class="swiper-wrapper">
								<?php
								$swiper_slide_image_ids = array( 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74 );
								$content                = '';
								foreach ( $swiper_slide_image_ids as $image_id ) {
									$content .= "<div class='swiper-slide'><a href='" . wp_get_attachment_url( $image_id ) . "'>" . wp_get_attachment_image( $image_id, 'medium', false, 'loading="lazy"' ) . '</a></div>';
								}
								if ( function_exists( 'slb_activate' ) ) {
									$content = slb_activate( $content );
								}
								echo $content;
								?>
							</div>
						</div>

						<div class="col-1">
							<div class="swiper-button-next"></div>
						</div>
					</div>
				</div>
			</section>

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

			<section class="container" id="who-is-echo">
				<div class="row">
					<div class="col-12 col-lg-6 order-2 order-lg-1">
						<h2>Who is ECHO?</h2>
						<p>Alaqua Cox grew up on the Menominee Indian Reservation in Wisconsin. Prior to being cast in the role of Maya Lopez/Echo, she did not have acting experience outside
							of a high school play.</p>
						<p>Like her character, Cox is deaf and a partial amputee, making her one of the first actresses with a disability to play a leading role in the Marvel Cinematic
							Universe (MCU). She first appeared as Maya Lopez/Echo in the MCU's 2021 series Hawkeye.</p>
					</div>

					<div class="col-12 col-lg-6 order-1 order-lg-2">
						<div class="container-fluid">
							<div class="row">
								<?php
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

			<section class="container-fluid black-scratch-bg-right py-5 align-items-center justify-content-center d-flex" id="pullout-1">
				<div class="row">
					<div class="col">
						<div class="container">
							<div class="row d-flex align-items-center">
								<div class="col-12 col-lg-5 position-relative">
									<?php echo wp_get_attachment_image( 47, 'full', false, array( 'loading' => 'lazy' ) ); ?>
								</div>
								<div class="col-12 col-lg-7 pullout-text">
									<p class="mb-5">"It's so exciting to be able to premiere Echo and it was extremely meaningful to myself to have this screening in Choctaw Nation. One of
										the things we're most excited about is being able to portray the Choctaw culture hopefully in an authentic and exciting way."</p>
									<span class="h3">- Sydney Freeland, Director</span>
									<button type="button" class="btn btn-easter-egg" data-bs-toggle="modal" data-bs-target="#bowModal">
										<i class="fa-kit fa-choctaw-echo-bow text-light"></i>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

		</main><!-- #main -->

	</div><!-- #primary -->
</div><!-- #content -->

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

<?php
get_footer();