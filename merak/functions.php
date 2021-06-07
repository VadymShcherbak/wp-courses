<?php
/**
 * WP lesson
 *
 * @package Merak
 */

if ( ! defined( 'MERAK_DIR_PATH' ) ) {
	define( 'MERAK_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

require_once MERAK_DIR_PATH . '/inc/helpers/autoloader.php';

if ( ! function_exists( 'va_register_styles' ) ) {
	/**
	 * Register styles.
	 */
	function va_register_styles() {
		wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'magnific', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'swiper', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css', array(), '1.0', 'all' );
		wp_enqueue_style( 'fontawesome', 'https://pro.fontawesome.com/releases/v5.10.0/css/all.css', array(), '5.10.0', 'all' );
		wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Archivo&family=Hind:wght@400;500;600&family=Spartan:wght@400;500;600;700&display=swap', array(), '1.0', 'all' );
	}

	add_action( 'wp_enqueue_scripts', 'va_register_styles' );
}

if ( ! function_exists( 'va_register_scripts' ) ) {
	/**
	 * Register scripts.
	 *
	 * @return void
	 */
	function va_register_scripts() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/lib/swiper-bundle.min.js', array(), '1.0', true );
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/lib/isotope.pkgd.min.js', array(), '1.0', true );
		wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/lib/jquery.waypoints.js', array(), '1.0', true );
		wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/lib/magnific-popup.js', array(), '1.0', true );
		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/lib/bootstrap.bundle.min.js', array(), '1.0', true );
		wp_enqueue_script( 'autocomplete', get_template_directory_uri() . '/assets/lib/jquery.autocomplete.min.js', array(), '1.0', true );
		wp_enqueue_script( 'mockjax', get_template_directory_uri() . '/assets/lib/jquery.mockjax.js', array(), '1.0', true );
		wp_enqueue_script( 'countries', get_template_directory_uri() . '/assets/lib/countries.js', array(), '1.0', true );
		wp_enqueue_script( 'main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true );
	}

	add_action( 'wp_enqueue_scripts', 'va_register_scripts' );
}

