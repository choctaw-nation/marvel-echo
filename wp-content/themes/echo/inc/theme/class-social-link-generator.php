<?php
/**
 * Social Link Generator
 * Builds links for social sharing
 *
 * @package ChoctawNation
 * @subpackage Content
 */

namespace ChoctawNation;

use CNO_Facebook_Link_Generator;

/**
 * Social Link Generator
 * Builds links for social sharing
 */
class Social_Link_Generator {
	/**
	 * Facebook Link Generator
	 *
	 * @var CNO_Facebook_Link_Generator $fb
	 */
	private CNO_Facebook_Link_Generator $fb;

	/**
	 * Constructor
	 *
	 * @param string $the_permalink The permalink of the profile to share
	 */
	public function __construct( string $the_permalink ) {
		if ( class_exists( 'CNO_Facebook_Link_Generator' ) ) {
			$this->fb = new CNO_Facebook_Link_Generator( $the_permalink );
		} else {
			wp_die( 'CNO_Facebook_Link_Generator class not found. Please install the plugin from the CNO Github Repo' );
		}
	}


	/**
	 * Gets the href
	 *
	 * @param "Facebook"|"Twitter"|"Email"|"Pinterest" $platform The social platform
	 * @return string
	 */
	public function get_the_href( string $platform ): ?string {
		$allowed_platforms = array( 'Facebook', 'Twitter', 'Email' );
		if ( ! in_array( $platform, $allowed_platforms, true ) ) {
			_doing_it_wrong(
				__FUNCTION__,
				'Invalid platform. Expected one of: ' . implode( ', ', $allowed_platforms ) . 'but got ' . $platform,
				'1.0'
			);
			return null;
		}
		if ( 'Facebook' === $platform ) {
			return $this->fb->get_the_href();
		}
		if ( 'Twitter' === $platform ) {
			return 'https://twitter.com/intent/tweet?url=' . rawurlencode( get_the_permalink() ) . '&text=' . rawurlencode( 'Check out this ' . get_the_title() . 'event!' );
		}
		if ( 'Email' === $platform ) {
			$post_title = get_the_title();
			$permalink  = get_permalink();
			$subject    = rawurlencode( "Look at this {$post_title} event" );
			$body       = rawurlencode( "Check out this {$post_title} event! {$permalink}" );
			return "mailto:?subject={$subject}&body={$body}";
		}
		return null;
	}
}
