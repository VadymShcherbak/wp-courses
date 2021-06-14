<?php
/**
 * Trait singleton
 *
 * @package Merak
 */

namespace MERAK_THEME\inc\traits;

trait Singleton {
	/**
	 * Construct
	 */
	public function __construct() {
	}

	/**
	 * Clone
	 */
	public function __clone() {
	}

	/**
	 * Get instance
	 */
	final public static function get_instance() {
		static $instance = array();

		$called_class = get_called_class();

		if ( ! isset( $instance[ $called_class ] ) ) {
			$instance[ $called_class ] = new $called_class();

			do_action( sprintf( 'merak_theme_singleton_init%s', $called_class ) );
		}

		return $instance[ $called_class ];
	}
}
