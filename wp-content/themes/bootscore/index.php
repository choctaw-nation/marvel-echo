<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>
  <div id="content" class="site-content">
    <div id="primary" class="content-area">

      <!-- Hook to add something nice -->
      <?php bs_after_primary(); ?>

      <main id="main" class="site-main my-3">

      <section class="container" id="overview">
        <div class="row">
          <div class="col">
            <h2>ITT<span style="font-weight:600; padding-left:2px;">I̱</span>KANA ACHUKMA (A Good Friendship)</h2>
            <p>Native American representation in television and film has a long, not-so-sterling history, but things seem to be changing for the better in recent years. Studios have shown interest in reversing some of the damaging and inaccurate stereotypes Native Americans have faced on the big screen. Groundbreaking and award-winning shows like Reservation Dogs have blazed a trail for Indigenous inclusion in storytelling, cultural representation, casting, costume design, and much more.</p>
			<p>Marvel's new series, Echo, is an exciting project where Native representation, specifically Choctaw representation, has been placed squarely at the forefront of creative development. From the beginning, experts in Choctaw history, culture, and language were included in conversations about how Choctaw people would be portrayed. This significant step shows Marvel's desire to be part of the future of Native American representation in Hollywood, and the Choctaw Nation is proud to partner with the studio on this project.</p>
          </div>
        </div>
      </section>

      <section class="container" id="interviews">
        <div class="row">
          <div class="col-12 col-lg-4" style="margin-bottom: 5rem;">
            <div class="embed-container mb-3"><iframe src="https://player.vimeo.com/video/899924143?h=e063f2ed1b" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
            <h3>Chief Gary Batton</h3>
            <p>Chief Gary Batton reflects on the significance of the Choctaw Nation's partnership with Marvel and the mutual desire to showcase Choctaw culture in a respectful and meaningful way.</p>
          </div>

          <div class="col-12 col-lg-4" style="margin-bottom: 5rem;">
            <div class="embed-container mb-3"><iframe src="https://player.vimeo.com/video/899924274?h=4a9fc7828d" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
            <h3>Seth Fairchild</h3>
            <p>Seth Fairchild, Executive Director of Cultural Services, shares the importance of having community input to help represent the Choctaw origin story and stickball accurately.</p>
          </div>

          <div class="col-12 col-lg-4">
            <div class="embed-container mb-3"><iframe src="https://player.vimeo.com/video/899927693?h=662057a9b8" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
            <h3>Stacy Shepherd</h3>
            <p>Stacy Shepherd, Executive Director of Member Services, discusses the use of Choctaw language and iconography throughout the series.</p>
          </div>
        </div>
      </section>

      <section class="container-fluid bg-dark" id="tile-gallery">
        <div class="row d-flex flex-row">
          <div class="col">
            <div class="container position-relative" >
              <div class="row h-100 py-4">
				  <div class="col-12 col-xl-6 position-relative mb-3">
				  <img src="/wp-content/uploads/2024/01/cno-associates-on-set-feature.jpg" alt="CNO Associates on Set" class="easter-egg-image" style="border-bottom:0;" />
					<p class="easter-egg-overlay-text position-relative" style="right: 0; left: 0;">Choctaw Nation consultants and Choctaw artist and writer Steven Paul Judd pose on set during the first day of filming.</p>
				  </div>
				  <div class="col-12 col-xl-6 position-relative mb-3">
					<img src="/wp-content/uploads/2024/01/cno-associates-on-set-feature2.jpg" alt="CNO Associates on Set" class="easter-egg-image" style="border-bottom:0;" />
					<p class="easter-egg-overlay-text position-relative" style="right: 0; left: 0;">Following a demonstration of the Choctaw Walk Dance, the cast, crew, and consultants come together to commemorate the first day of filming.</p>
				  </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="container" id="choctaw-culture">
        <div class="row">
          <div class="col">
            <h2>LIGHTS, CAMERA, CULTURE!</h2>
            <p>One of the many ways Marvel honored Chahta culture in Echo is through the use of symbols, icons, and stories that are important to our people. As the story progresses, look for Choctaw diamonds, swirls, artwork, and our seal in costumes and set dressings throughout each episode.</p>
            <p>How many Choctaw symbols can you spot?</p>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-4" style="margin-bottom: 5rem;">
            <img src="/wp-content/uploads/2024/01/culture-chahta-origin.jpg" class="mb-3" />
            <p>The Chahta origin story plays a big part at the beginning of Echo. Our ancestors emerged from Nanih Waiya, the Mother Mound, in what is now Mississippi. The imagery of the clay people comes from this story.</p>
            <p>Read our origin story and learn more about our earliest ancestors.</p>
            <p class="h3"><a href="https://www.choctawnation.com/about/history/" target="_blank" rel="noreferrer noopener" class="btn btn-primary rounded-0 border-0">Origin Story</a></p>
          </div>

          <div class="col-12 col-lg-4" style="margin-bottom: 5rem;">
            <img src="/wp-content/uploads/2024/01/culture-biskinik.jpg" class="mb-3" />
            <p>The Biskinik is a special friend to the Chahta people. This little woodpecker was blessed by the Creator to live near our ancestors and warn them of danger by tapping out messages on trees. Today, our tribal newspaper bears its name in honor of the "little Choctaw news bird."</p>
            <p>Learn more about the Biskinik newspaper and read the story of how this little bird became so special to our people.</p>
            <p class="h3"><a href="https://www.choctawnation.com/biskinik/" target="_blank" rel="noreferrer noopener" class="btn btn-primary rounded-0 border-0">Biskinik Paper</a></p>
          </div>

          <div class="col-12 col-lg-4">
            <img src="/wp-content/uploads/2024/01/culture-stickball.jpg" class="mb-3" />
            <p>Ishtaboli, or stickball, is an ancient game played by several Native American tribes. Originally, it helped our ancestors settle disputes and avoid war. Today, the game is played competitively and in exhibitions across the Choctaw Nation Reservation and beyond.</p>
            <p>Learn more about this exciting and fast-paced game.</p>
            <p class="h3"><a href="https://www.choctawnation.com/about/culture/traditions/stickball/" target="_blank" rel="noreferrer noopener" class="btn btn-primary rounded-0 border-0">Stickball Game</a></p>
          </div>
        </div>

        <div class="row">
          <div class="col-12 col-lg-5 order-1 order-lg-2">
            <img src="/wp-content/uploads/2024/01/culture-choctaw-dress.jpg" class="mb-3" />
          </div>

          <div class="col-12 col-lg-7 order-2 order-lg-1">
            <p>Traditional Choctaw dress incorporates some of our most important iconography. The diamond pattern represents the diamondback rattlesnake, who protected our ancestors' crops. These snakes are not aggressive, but they stand ready to attack if provoked, traits that are also present in the Chahta people.</p>
            <p>Learn more about the symbols we use in our traditional regalia.</p>
            <p class="h3"><a href="https://www.choctawnation.com/about/culture/traditions/dress/" target="_blank" rel="noreferrer noopener" class="btn btn-primary rounded-0 border-0">Traditional Choctaw Dress</a></p>
          </div>
        </div>
      </section>

      <section class="container-fluid black-scratch-bg-right py-5 align-items-center justify-content-center d-flex" id="pullout-1">
        <div class="row">
          <div class="col">
            <div class="container">
              <div class="row d-flex align-items-center">
                <div class="col-12 col-lg-5 position-relative" >
                  <img src="/wp-content/uploads/2024/01/culture-chief-gary-batton.jpg" />
                </div>
                <div class="col-12 col-lg-7 pullout-text">
                  <p class="mb-5">We want to see our culture, our history, and the story of our Choctaw people in mainstream society. I think the partnership with Disney is a great way to educate everybody about the things we have done to contribute to the United States, to France, to Ireland, to the world, and to share that story with everybody so they can truly know who we are as Chahta people.</p>
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
            <p>One of the most important ways the Choctaw Nation exercises its sovereignty is through its language. For generations, Choctaw people were discouraged or outright forbidden to speak their language, and as fluent speakers passed away without handing it down to younger generations, it nearly died out.</p>
            <p>The Choctaw Language is going through a period of revitalization, however. In recent years, the <a href="https://www.choctawnation.com/about/language/" target="_blank">Chahta Anumpa Aiikhvna (Choctaw School of Language)</a> has ramped up efforts to increase the number of speakers through the incorporation of technology and a wide variety of learning options.</p>
            <p>At each regular meeting, the <a href="https://www.choctawnation.com/about/government/tribal-council/" target="_blank">Tribal Council</a> honors a Choctaw First Language Speaker of the Month. These culture keepers hold a cherished place in our tribe.</p>
            <p>Having <a href="https://www.marvel.com/tv-shows/echo/1" target="_blank">Echo</a> dubbed in Choctaw is an especially significant milestone for the tribe. Teresa Billy and other language experts worked diligently with Marvel to ensure the highest level of accuracy in the translation process.</p>
          </div>
        </div>
      </section>

      <section class="container" id="teri-billy">
        <div class="row">
          <div class="col-12 col-lg-6 order-1 order-lg-2">
            <div class="embed-container mb-3"><iframe src="https://player.vimeo.com/video/899934703?h=6df7bf7874" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
          </div>

          <div class="col-12 col-lg-6 order-2 order-lg-1">
            <h2>Teresa Billy</h2>
            <p>Teresa Billy is the Assistant Director of the Chahta Anumpa Aiikhvna, or the Choctaw School of Language. Teresa is a first language Choctaw speaker, and her main goal is to protect the identity of the Choctaw people by preserving their language. According to her, "It is important for each of us, as well as for our future generations, to connect us to our mother tongue, which relates us to our rich history, culture and language."</p>
          </div>
          <div class="col-12 order-3">
            <p>Teresa's work with Marvel's translators allowed the show to be subtitled in Choctaw, a first for our tribe. Not only can tribal members see the language of their ancestors on a major television series, but it will help them realize how important it is to learn their language and use it in their everyday lives.</p><p>Teresa's husband, Curtis Billy, also worked on the Echo project, providing valuable historical information about the game of stickball. Unfortunately, Curtis passed away before he could see his contributions on the big screen, but we are so grateful for his involvement.</p>
          </div>
        </div>
      </section>

      <section class="container" id="teri-billy">
        <div class="row">
          <div class="col-12 col-lg-6">
            <div class="embed-container mb-3"><iframe src="https://player.vimeo.com/video/899928430" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe></div>
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
                <div class="col-12 col-lg-6 position-relative" >
                  <img src="/wp-content/uploads/2023/12/echo-overview.jpg" />
                </div>
                <div class="col-12 col-lg-6 pullout-text">
                  <h2>The Story of ECHO</h2>
                  <p class="mb-4">Streaming exclusively on Disney, the origin story of Echo revisits Maya Lopez, whose ruthless behavior in New York City catches up with her in her hometown. She must face her past, reconnect with her Native American roots and embrace the meaning of family and community if she ever hopes to move forward.</p>
                  <span><small>(Courtesy of <a href="https://press.disneyplus.com/media-kits/echo">Disney Media Kit</a>)</small></span>
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
            <div class="embed-container mb-3"><iframe width="560" height="315" src="https://www.youtube.com/embed/wlgpDnsU12E?si=GW4aEmDC5YpiVUMt&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe></div>
          </div>
        </div>
      </section>

      <section class="container" id="hollywood-x-choctaw">
        <div class="row">
          <div class="col">
            <h2>Hollywood Comes to the Choctaw Nation</h2>
            <p>Marvel Studios screened the first two episodes of the upcoming series Echo during Choctaw Nation's annual powwow at The District Theater on November 3, 2023.</p>
            <p>The episodes were presented by director Sydney Freeland, who was joined by Seth Fairchild, Executive Director of Cultural Services for Choctaw Nation, for a Q&A conversation after the screening.</p>
            <p class="h3"><a href="https://www.choctawnation.com/biskinik/news/marvel-studios-unveils-echo-at-choctaw-day-celebration/" target="_blank" rel="noreferrer noopener" class="btn btn-primary rounded-0 border-0">View Article</a></p>
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
                <?php $content = '<div class="swiper-slide"><a href="/wp-content/uploads/2024/01/biskinik.jpg"><img src="/wp-content/uploads/2024/01/biskinik.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/cahokia-crowd.jpg"><img src="/wp-content/uploads/2024/01/cahokia-crowd.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/cahokia-establishing-shot.jpg"><img src="/wp-content/uploads/2024/01/cahokia-establishing-shot.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/concept-stickball-arena.jpg"><img src="/wp-content/uploads/2024/01/concept-stickball-arena.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/durant-screening.jpg"><img src="/wp-content/uploads/2024/01/durant-screening.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/durant-screening2.jpg"><img src="/wp-content/uploads/2024/01/durant-screening2.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/durant-screening3.jpg"><img src="/wp-content/uploads/2024/01/durant-screening3.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/durant-screening4.jpg"><img src="/wp-content/uploads/2024/01/durant-screening4.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/durant-screening5.jpg"><img src="/wp-content/uploads/2024/01/durant-screening5.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/lighthorse.jpg"><img src="/wp-content/uploads/2024/01/lighthorse.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/maya.jpg"><img src="/wp-content/uploads/2024/01/maya.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set-seth.jpg"><img src="/wp-content/uploads/2024/01/on-set-seth.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set-stacy.jpg"><img src="/wp-content/uploads/2024/01/on-set-stacy.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set-teri.jpg"><img src="/wp-content/uploads/2024/01/on-set-teri.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set.jpg"><img src="/wp-content/uploads/2024/01/on-set.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set2.jpg"><img src="/wp-content/uploads/2024/01/on-set2.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set3.jpg"><img src="/wp-content/uploads/2024/01/on-set3.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set4.jpg"><img src="/wp-content/uploads/2024/01/on-set4.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set5.jpg"><img src="/wp-content/uploads/2024/01/on-set5.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set6.jpg"><img src="/wp-content/uploads/2024/01/on-set6.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set7.jpg"><img src="/wp-content/uploads/2024/01/on-set7.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set8.jpg"><img src="/wp-content/uploads/2024/01/on-set8.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set9.jpg"><img src="/wp-content/uploads/2024/01/on-set9.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set10.jpg"><img src="/wp-content/uploads/2024/01/on-set10.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set11.jpg"><img src="/wp-content/uploads/2024/01/on-set11.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set12.jpg"><img src="/wp-content/uploads/2024/01/on-set12.jpg" /></a></div>
                <div class="swiper-slide"><a href="/wp-content/uploads/2024/01/on-set13.jpg"><img src="/wp-content/uploads/2024/01/on-set13.jpg" /></a></div>';
                if ( function_exists('slb_activate') ) {
                  $content = slb_activate($content);
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
            <a href="https://ondisneyplus.disney.com/show/echo"><img src="/wp-content/uploads/2023/12/hulu-disney-logo.jpg" alt="Hulu/Disney Logo" class="mb-3" /></a>
          </div>

          <div class="col-12 col-lg-6">
            <h2>How to Watch</h2>
            <p>Echo can be streamed on Hulu and Disney+ beginning January 9, 2024.</p>
          </div>
        </div>
      </section>

      <section class="container" id="who-is-echo">
        <div class="row">
          <div class="col-12 col-lg-6 order-2 order-lg-1">
            <h2>Who is ECHO?</h2>
            <p>Alaqua Cox grew up on the Menominee Indian Reservation in Wisconsin. Prior to being cast in the role of Maya Lopez/Echo, she did not have acting experience outside of a high school play.</p>
            <p>Like her character, Cox is deaf and a partial amputee, making her the first actress with a disability to play a leading role in the Marvel Cinematic Universe (MCU). She first appeared as Maya Lopez/Echo in the MCU's 2021 series Hawkeye.</p>
          </div>

          <div class="col-12 col-lg-6 order-1 order-lg-2">
            <div class="container-fluid">
              <div class="row">
                <div class="col mb-4">
                  <img src="/wp-content/uploads/2023/12/echo-character-in-jacket.jpg" alt="Echo in Jacket" />
                  <small>Source: Disney Media Kit</small>
                </div>
                <div class="col mb-4">
                  <img src="/wp-content/uploads/2023/12/echo-character-actor-profile.jpg" alt="Alaqua Cox" />
                  <small>Source: IMDB Profile</small>
                </div>
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
                <div class="col-12 col-lg-5 position-relative" >
                  <img src="/wp-content/uploads/2024/01/echo-sydney-freeland.jpg" />
                </div>
                <div class="col-12 col-lg-7 pullout-text">
                  <p class="mb-5">"It's so exciting to be able to premiere Echo and it was extremely meaningful to myself to have this screening in Choctaw Nation. One of the things we're most excited about is being able to portray the Choctaw culture hopefully in an authentic and exciting way."</p>
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
          <h1 class="modal-title" id="sunModalLabel">Sun Symbol <i class="fa-kit fa-choctaw-echo-sun-icon"></i></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <p>The sun as a symbol of great power and reverence is a major component of southeastern Native cultures.</p>
              </div>
              <div class="col-12 col-xl-6 position-relative mb-3">
                <img src="/wp-content/uploads/2024/01/sun-easter-egg-chief.jpg" alt="sun-easter-egg-chief" class="easter-egg-image pb-5" />
                <p class="easter-egg-overlay-text">Chief Batton wears a SUN SYMBOL medallion.</p>
              </div>
              <div class="col-12 col-xl-6 position-relative mb-3">
                <img src="/wp-content/uploads/2024/01/sun-easter-egg-echo-armor.jpg" alt="sun-easter-egg-chief" class="easter-egg-image pb-5" />
                <p class="easter-egg-overlay-text">ECHO's armor features a SUN SYMBOL on the chestplate.</p>
              </div>
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
          <h1 class="modal-title" id="diamondModalLabel">Diamond Symbol <i class="fa-kit fa-choctaw-echo-diamond-icon"></i></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <p>One of the most traditional patterns found in Choctaw beadwork is the diamond, which represents the eastern diamondback rattlesnake. Our ancestors revered it as an animal of great strength and power, but it did not attack without provocation or warning.</p>
              </div>
              <div class="col-12 col-xl-6 position-relative mb-3">
                <img src="/wp-content/uploads/2024/01/diamond-easter-egg-traditional-dress.jpg" alt="Traditional Dress with Diamonds" class="easter-egg-image pb-5" />
                <p class="easter-egg-overlay-text">Traditional Dress featuring DIAMOND SYMBOLs in the pattern.</p>
              </div>
              <div class="col-12 col-xl-6 position-relative mb-3">
                <img src="/wp-content/uploads/2024/01/diamond-easter-egg-echo-armor.jpg" alt="ECHO's armor with diamonds in shoulder" class="easter-egg-image pb-5" />
                <p class="easter-egg-overlay-text">ECHO's armor features a DIAMOND SYMBOL on the shoulder piece.</p>
              </div>
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
          <h1 class="modal-title" id="diamondModalLabel">Center of Seal <i class="fa-kit fa-choctaw-echo-bow"></i></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="container-fluid">
            <div class="row">
              <div class="col-12">
                <p>The center of the Choctaw Seal features rising tobacco smoke from the pipe which can symbolize prayer connections, and the unstrung bow is a symbol of the Choctaw people's love of peace but willingness to go to war if attacked. The three arrows honor Choctaw Chiefs Pushmataha, Moshulatubbee and Apuckshunnubbee.</p>
              </div>
              <div class="col-12 col-xl-6 position-relative mb-3">
                <img src="/wp-content/uploads/2024/01/seal-easter-egg-flag.jpg" alt="Choctaw Nation Flag" class="easter-egg-image pb-5" />
                <p class="easter-egg-overlay-text">The offical flag of the Choctaw Nation featuring the Seal.</p>
              </div>
              <div class="col-12 col-xl-6 position-relative mb-3">
                <img src="/wp-content/uploads/2024/01/seal-easter-egg-armor-arm.jpg" alt="ECHO's armor with center of seal in arm" class="easter-egg-image pb-5" />
                <p class="easter-egg-overlay-text">ECHO's armor features the CENTER OF THE SEAL on the arm piece.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php
get_footer();
