<?php
/**
 * WP lesson
 *
 * @package Blog
 */

if ( ! function_exists( 'va_theme_support' ) ) {
	/**
	 * Theme support.
	 */
	function va_theme_support() {
		add_theme_support( 'title-tag' );
		add_theme_support( 'custom-logo' );
		add_theme_support( 'post-thumbnails' );
	}

	add_action( 'after_setup_theme', 'va_theme_support' );
}

if ( ! function_exists( 'va_register_styles' ) ) {
	/**
	 * Register styles.
	 */
	function va_register_styles() {
		wp_enqueue_style( 'va-style', get_template_directory_uri() . '/style.css', array( 'va-bootstrap' ), '1.0', 'all' );
		wp_enqueue_style( 'va-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all' );
		wp_enqueue_style( 'va-fonawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all' );
	}

	add_action( 'wp_enqueue_scripts', 'va_register_styles' );
}

if ( ! function_exists( 'va_register_scripts' ) ) {
	/**
	 * Register scripts.
	 */
	function va_register_scripts() {
		wp_enqueue_script( 'va-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true );
		wp_enqueue_script( 'va-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true );
		wp_enqueue_script( 'va-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true );
		wp_enqueue_script( 'va-main', get_template_directory_uri() . '/js/main.js', array(), '1.0', true );
	}

	add_action( 'wp_enqueue_scripts', 'va_register_scripts' );
}

if ( ! function_exists( 'va_menus' ) ) {
	/**
	 * Menus.
	 */
	function va_menus() {
		$locations = array(
			'primary' => 'Desktop Primary Left Sidebar',
			'footer'  => 'Footer Menu Items',
		);

		register_nav_menus( $locations );
	}

	add_action( 'init', 'va_menus' );
}

if ( ! function_exists( 'va_widget_areas' ) ) {
	/**
	 * Widget_areas.
	 */
	function va_widget_areas() {

		register_sidebar(
			array(
				'before_title'  => '',
				'after_title'   => '',
				'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
				'after_widget'  => '</ul>',
				'name'          => 'Sidebar Area',
				'id'            => 'sidebar-1',
				'description'   => 'Sidebar Widget Area',
			)
		);
		register_sidebar(
			array(
				'before_title'  => '',
				'after_title'   => '',
				'before_widget' => '<ul class="social-list list-inline py-3 mx-auto">',
				'after_widget'  => '</ul>',
				'name'          => 'Footer Area',
				'id'            => 'footer-1',
				'description'   => 'Footer Widget Area',
			)
		);
	}

	add_action( 'widgets_init', 'va_widget_areas' );
}


