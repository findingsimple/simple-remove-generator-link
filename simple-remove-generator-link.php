<?php
/*
Plugin Name: Simple Remove Generator Link
Plugin URI: http://plugins.findingsimple.com
Description: Drop in for disabling the head generator link containing the WP version number. 
Version: 1.0
Author: Finding Simple
Author URI: http://findingsimple.com
License: GPL2
*/
/*
Copyright 2013  Finding Simple  (email : plugins@findingsimple.com)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! class_exists( 'Simple_Remove_Generator_Link' ) ) :

/**
 * Plugin Main Class.
 *
 * @package Simple Remove Generator Link
 * @author Jason Conroy <jason@findingsimple.com>
 * @since 1.0
 */
class Simple_Remove_Generator_Link {
	
	/**
	 * Initialise
	 */
	function Simple_Remove_Generator_Link() {
		
		add_action( 'init', array( &$this , 'simple_remove_generator_action' ) );

	}

	/**
	 * Remove action that create the generator link
	 */
	function simple_remove_generator_action() {
	
		remove_action('wp_head', 'wp_generator');
		
	}		

}

$Simple_Remove_Generator_Link = new Simple_Remove_Generator_Link();

endif;

