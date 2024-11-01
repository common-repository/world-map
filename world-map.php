<?php

/**
 * Google Map with shortcode
 * 
 * @link              
 * @since             0.1.0
 * @package           World Map
 *
 * @wordpress-plugin
 * Plugin Name:       World Map
 * Plugin URI:        http://www.rampitech.com/google-world-map/ 
 * Description:       Google Map with shortcode
 * Version:           1.2.1
 * Author:            RAMPiT 
 * Author URI:        http://www.rampitech.com/google-world-map/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       world-map
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class 
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-world-map.php';


/**
 * Begins execution of the plugin. 
 *
 * @since    1.0.0
 */
function run_jsps_world_map() {

	$plugin = new Jsps_World_Map();
	$plugin->jsps_run();

}
run_jsps_world_map();


