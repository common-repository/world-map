<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       
 * @since      1.0.0
 * 
 * @package    World_Map
 * @subpackage World_Map/admin
 * @author     RAMPiT
 */
if ( ! defined( 'ABSPATH' ) ) exit;  
class Jsps_Map_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $jsps_plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $jsps_version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $jsps_plugin_name, $jsps_version ) {

		$this->jsps_plugin_name = $jsps_plugin_name;
		$this->jsps_version = $jsps_version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function jsps_enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */
		wp_enqueue_style( $this->jsps_plugin_name, plugin_dir_url( __FILE__ ) . 'css/jsps-map-admin.css', array(), $this->jsps_version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function jsps_enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Plugin_Name_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Plugin_Name_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->jsps_plugin_name, plugin_dir_url( __FILE__ ) . 'js/jsps-map-admin.js', array( 'jquery' ), $this->jsps_version, false );

	}
    
    /**
    * world map add admin menu  
    * @since      1.2.1
    */
    public function jsps_admin_map_menu() {
      add_menu_page('World Map', 'World Map', 'manage_options', 'addmap','jsps_addmap');	   
      add_submenu_page('addmap', 'Skin', 'Skin', 'manage_options', 'addskin','jsps_addskin' );
    } 
}
