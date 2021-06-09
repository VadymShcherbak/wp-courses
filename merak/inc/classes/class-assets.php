<?php
/**
 * Bootstraps the Theme.
 *
 * @package Merak
 */

namespace MERAK_THEME\inc;

use MERAK_THEME\Inc\Traits\Singleton;

/**
 * Merak theme
 */
class Assets {
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

		add_action( 'wp_enqueue_scripts', array( $this, 'register_styles' ) );
		add_action( 'wp_enqueue_scripts', array( $this, 'register_scripts' ) );
	}

	/**
	 * Register styles
	 */
	public function register_styles() {
		wp_enqueue_style( 'style', MERAK_DIR_URI . '/style.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'magnific', MERAK_DIR_URI . '/assets/css/magnific-popup.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'swiper', MERAK_DIR_URI . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), '5.10.0', 'all' );
		wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Archivo&family=Hind:wght@400;500;600&family=Spartan:wght@400;500;600;700&display=swap', array(), '1.0', 'all' );
	}

	/**
	 * Register scripts
	 */
	public function register_scripts() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'swiper-bundle', MERAK_DIR_URI . '/assets/lib/swiper-bundle.min.js', array(), '1.0', true );
		wp_enqueue_script( 'isotope', MERAK_DIR_URI . '/assets/lib/isotope.pkgd.min.js', array(), '1.0', true );
		wp_enqueue_script( 'waypoints', MERAK_DIR_URI . '/assets/lib/jquery.waypoints.js', array(), '1.0', true );
		wp_enqueue_script( 'magnific-popup', MERAK_DIR_URI . '/assets/lib/magnific-popup.js', array(), '1.0', true );
		wp_enqueue_script( 'bootstrap', MERAK_DIR_URI . '/assets/lib/bootstrap.bundle.min.js', array(), '1.0', true );
		wp_enqueue_script( 'autocomplete', MERAK_DIR_URI . '/assets/lib/jquery.autocomplete.min.js', array(), '1.0', true );
		wp_enqueue_script( 'mockjax', MERAK_DIR_URI . '/assets/lib/jquery.mockjax.js', array(), '1.0', true );
		wp_enqueue_script( 'countries', MERAK_DIR_URI . '/assets/lib/countries.js', array(), '1.0', true );
		wp_enqueue_script( 'main', MERAK_DIR_URI . '/assets/js/main.js', array(), '1.0', true );
	}
}
