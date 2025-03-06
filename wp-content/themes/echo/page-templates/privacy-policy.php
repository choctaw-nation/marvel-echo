<?php
/**
 * Template Name: Privacy Policy
 * Federated Privacy Policy Page
 *
 * @package ChoctawNation
 */

$federated_policy = cno_get_federated_privacy_policy();
if ( is_wp_error( $federated_policy ) ) {
	wp_safe_redirect( 'https://www.choctawnation.com/privacy-policy/' );
	exit;
}
if ( ! get_field( 'use_choctaw_nation_privacy_policy' ) ) {
	$policy = get_field( 'page_content' );
} else {
	$policy = $federated_policy;
}
get_header();
?>
<main <?php post_class( 'container my-5' ); ?>>
	<div class="row">
		<div class="col-lg-10">
			<?php
			the_title( '<h1 class="text-primary">', '</h1>' );
			echo acf_esc_html( $policy );
			?>
		</div>
	</div>
</main>
<?php
get_footer();
