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
			<?php
			$sections = array(
				array(
					'type' => 'content',
					'name' => 'overview',
				),
				array(
					'type' => 'content',
					'name' => 'interviews',
				),
				array(
					'type' => 'content',
					'name' => 'tile-gallery',
				),
				array(
					'type' => 'content',
					'name' => 'choctaw-culture',
				),
				array(
					'type' => 'aside',
					'name' => 'chief-quote',
				),
				array(
					'type' => 'content',
					'name' => 'choctaw-language',
				),
				array(
					'type' => 'content',
					'name' => 'teri-billy',
				),
				array(
					'type' => 'content',
					'name' => 'behind-the-scenes',
				),
				array(
					'type' => 'aside',
					'name' => 'echo-story',
				),
				array(
					'type' => 'content',
					'name' => 'trailer',
				),
				array(
					'type' => 'content',
					'name' => 'hollywood',
				),
				array(
					'type' => 'content',
					'name' => 'how-to-watch',
				),
				array(
					'type' => 'content',
					'name' => 'who-is-echo',
				),
				array(
					'type' => 'aside',
					'name' => 'director-quote',
				),
			);
			foreach ( $sections as $section ) {
				get_template_part( "template-parts/sections/{$section['type']}", $section['name'] );
			}
			?>
		</main><!-- #main -->

	</div><!-- #primary -->
</div><!-- #content -->

<?php
get_footer();