<?php
/**
 * Bootstraps the Theme
 *
 * @package Merak
 */

namespace MERAK_THEME\inc;

use MERAK_THEME\Inc\Traits\Singleton;

/**
 * Merak theme
 */
class MERAK_THEME {
	use Singleton;

	/**
	 * Construct.
	 */
	protected function __construct() {
		// load class.

		Assets::get_instance();
		Menus::get_instance();
		Meta_Boxes::get_instance();

		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 */
	protected function setup_hooks() {
		// actions and filters.

		add_action( 'after_setup_theme', array( $this, 'setup_theme' ) );
	}

	/**
	 * Setup theme.
	 *
	 * @return void
	 */
	public function setup_theme() {
		add_theme_support( 'title-tag' );

		add_theme_support(
			'custom-logo',
			array(
				'header-text' => array( 'site-title', 'site-description' ),
				'height'      => 58,
				'width'       => 141,
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		add_theme_support(
			'custom-background',
			array(
				'default-color'  => '#fff',
				'default-image'  => '',
				'default-repeat' => 'no-repeat',
			)
		);

		add_theme_support( 'post-thumbnails' );

		add_image_size( 'featured-thumbnail', 350, 233, true );

		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support(
			'html5',
			array(
				'comment-list',
				'comment-form',
				'search-form',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		add_theme_support( 'wp-block-styles' );

		add_theme_support( 'align-wide' );

		global $content_width;
		if ( ! isset( $content_width ) ) {
			$content_width = 1240;
		}
	}
}
