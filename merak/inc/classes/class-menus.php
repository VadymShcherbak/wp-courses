<?php
/**
 * Register Menus
 *
 * @package Merak
 */

namespace MERAK_THEME\inc;

use MERAK_THEME\Inc\Traits\Singleton;

/**
 * Merak theme.
 */
class Menus {
	use Singleton;

	/**
	 * Construct.
	 */
	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}

	/**
	 * Setup hooks.
	 */
	protected function setup_hooks() {
		// actions and filters.

		add_action( 'init', array( $this, 'register_menus' ) );
	}

	/**
	 * Register menus.
	 */
	public function register_menus() {
		register_nav_menus(
			array(
				'merak-header-menu' => esc_html__( 'Header Menu', 'merak' ),
				'merak-footer-menu' => esc_html__( 'Footer Menu', 'merak' ),
			)
		);
	}
}
