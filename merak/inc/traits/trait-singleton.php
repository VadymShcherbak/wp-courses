<?php
/**
 * Trait singleton
 *
 * @package Merak
 */

namespace MERAK_THEME\inc\traits;

trait Singleton {
	public function __construct() {
	}

	public function __clone() {
	}

	final public static function get_instance() {
		static $instsnce = [];

		$called_class = get_called_class();

		if ( ! isset( $instsnce[ $called_class ] ) ) {
			$instsnce[ $called_class ] = new $called_class;

			do_action( sprintf( 'merak_theme_singleton_init%s', $called_class ) );
		}

		return $instsnce[ $called_class ];
	}
}
