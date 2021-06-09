<?php
/**
 * WP lesson
 *
 * @package Merak
 */

if ( ! defined( 'MERAK_DIR_PATH' ) ) {
	define( 'MERAK_DIR_PATH', untrailingslashit( get_template_directory() ) );
}

if ( ! defined( 'MERAK_DIR_URI' ) ) {
	define( 'MERAK_DIR_URI', untrailingslashit( get_template_directory_uri() ) );
}

require_once MERAK_DIR_PATH . '/inc/helpers/autoloader.php';

if ( ! function_exists( 'merak_get_theme_instance' ) ) {
	/**
	 * Merak get theme instance
	 *
	 * @return void
	 */
	function merak_get_theme_instance() {
		\MERAK_THEME\Inc\MERAK_THEME::get_instance();
	}

	merak_get_theme_instance();
}


