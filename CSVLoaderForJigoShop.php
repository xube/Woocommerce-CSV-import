<?php
/*
Plugin Name: Jigoshop CSV Loader
Description: CSV loader for Jigoshop
Version: 0.01
Author: Colin
License: GPL
parent: jigoshop
*/

/**
 * This file is part of Jigoshop-csvloader.
 * 
 * Jigoshop CSV Loader is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Jigoshop-csvloader is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Jigoshop-csvloader.  If not, see <http://www.gnu.org/licenses/>.
 */

class CSVLoaderForJigoShop {
	function __construct() {
		add_action( 'init', array( $this, 'init' ) );
		if ( is_admin() ) {
			add_action( 'admin_menu', array( $this, 'admin_menu' ), 99 );
		}
	}

	function init() {
		if ( function_exists( 'load_plugin_textdomain' ) )
			load_plugin_textdomain( 'tcp_csvl', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}

	function admin_menu() {
		
if (function_exists('add_menu_page'))
{
add_menu_page('Csv Loader', 'Csv Loader', 10, dirname( __FILE__ ) . '/admin/CSVLoader.php');
}
	}
}

new CSVLoaderForJigoShop();
?>
