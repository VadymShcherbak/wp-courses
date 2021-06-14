<?php
/**
 * Register sidebars.
 *
 * @package Merak
 */

namespace MERAK_THEME\inc;

use MERAK_THEME\Inc\Traits\Singleton;

/**
 * Merak theme
 */
class Sidebars {
	use Singleton;

	/**
	 * Construct
	 */
	protected function __construct() {
		// load class.
		$this->setup_hooks();
	}

	/**
	 * Setup hooks
	 */
	protected function setup_hooks() {
		// actions and filters.
		add_action( 'widgets_init', array( $this, 'register_sidebars' ) );
	}

	/**
	 * Register Sidebars
	 */
	public function register_sidebars() {
		register_sidebar(
			array(
				'name'          => __( 'Sidebar', 'merak' ),
				'id'            => 'sidebar-1',
				'description'   => __( 'Main sidebar', 'merak' ),
				'before_widget' => '<div id="%1$s" class="widget widget-sidebar %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
		register_sidebar(
			array(
				'name'          => __( 'Footer', 'merak' ),
				'id'            => 'sidebar-2',
				'description'   => __( 'Footer sidebar', 'merak' ),
				'before_widget' => '<div id="%1$s" class="widget widget-footer %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widget-title">',
				'after_title'   => '</h3>',
			)
		);
	}
}

