<?php

/**
 * @author RAMPiT
 * @copyright 2017
 * 
 * Main plugin class 
 * 
 * @link       
 * @since      1.0.0
 *
 * @package    World_Map
 * @subpackage World_Map/includes
 */
if ( ! defined( 'ABSPATH' ) ) exit;
class Jsps_World_Map {


	/**
	 * The unique identifier of this plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $plugin_name    The string used to uniquely identify this plugin.
	 */
	protected $jsps_plugin_name;

	/**
	 * The current version of the plugin.
	 *
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $version    The current version of the plugin.
	 */
	protected $jsps_version;

	/**
	 * Define the core functionality of the plugin.
	 *
	 * Set the plugin name and the plugin version that can be used throughout the plugin.	 
	 *
	 * @since    1.0.0
	 */
	public function __construct() {

		$this->jsps_plugin_name = 'world-map';
		$this->jsps_version = '1.0.0';

		$this->jsps_load_dependencies();		
		$this->jsps_admin_hooks();
		$this->jsps_public_hooks();
        /*
        * Add admin menu hook function
        */
        $this->jsps_map_menu();
	}

	/**
	 * Load the required dependencies for this plugin.
	 *
	 * Include the following files that make up the plugin:
	 *
     * - Jsps_World_Map_Loader. Define the Action/Filters of the plugin.
	 * - Jsps_World_Map_Admin. Defines all hooks for the admin area.
	 * - Jsps_World_Map_Public. Defines all hooks for the public side of the site.
	 *
	 * Create an instance of the loader which will be used to register the hooks
	 * with WordPress.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function jsps_load_dependencies() {

		/**
		 * The class responsible for orchestrating the actions and filters of the
		 * core plugin.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-jsps-map-loader.php';


		/**
		 * All Google Map API related functions
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-jsps-google-api.php';		
        
        
        /**
		 * The class responsible for defining all actions that occur in the admin area.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-jsps-map-admin.php';

		/**
		 * The class responsible for defining all actions that occur in the public-facing
		 * side of the site.
		 */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-jsps-map-public.php';


		/**
		 * The class responsible for all Main shortcode process jsps_world_map
         */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-jsps-map-shortcode.php';


		/**
		 * The class responsible for all Main shortcode process jsps_world_map
         */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-jsps-pin-shortcode.php';       
        

		/**
		 * Map all Process from Starting to END
         */
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-jsps-main-map.php';       
        
                
		//require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/skin-template/class-skin1.php';          
        
		
		$this->jsps_loader = new Jsps_Map_Loader(); // Load all Style and Script and main functions
        
        /**
		* world map admin page process
		*/
        require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/admin-master.php';

	}

	/**
	 * Register all of the hooks related to the admin area functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function jsps_admin_hooks() {

		$plugin_admin = new Jsps_Map_Admin( $this->jsps_get_plugin_name(), $this->jsps_get_version() );

		$this->jsps_loader->jsps_add_action( 'admin_enqueue_scripts', $plugin_admin, 'jsps_enqueue_styles' );
		$this->jsps_loader->jsps_add_action( 'admin_enqueue_scripts', $plugin_admin, 'jsps_enqueue_scripts' );

	}

	/**
	 * Register all of the hooks related to the public-facing functionality
	 * of the plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 */
	private function jsps_public_hooks() {

		$plugin_public = new Jsps_Map_Public( $this->jsps_get_plugin_name(), $this->jsps_get_version() );

		$this->jsps_loader->jsps_add_action( 'wp_enqueue_scripts', $plugin_public, 'jsps_enqueue_styles' );
		$this->jsps_loader->jsps_add_action( 'wp_enqueue_scripts', $plugin_public, 'jsps_enqueue_scripts' );

	}

	/**
	 * Run the loader to execute all of the hooks with WordPress.
	 *
	 * @since    1.0.0
	 */
	public function jsps_run() {
		$this->jsps_loader->jsps_run();
	}

	/**
	 * The name of the plugin used to uniquely identify it within the context of
	 * WordPress and to define internationalization functionality.
	 *
	 * @since     1.0.0
	 * @return    string    The name of the plugin.
	 */
	public function jsps_get_plugin_name() {
		return $this->jsps_plugin_name;
	}

	/**
	 * The reference to the class that orchestrates the hooks with the plugin.
	 *
	 * @since     1.0.0
	 * @return    Plugin_Name_Loader    Orchestrates the hooks of the plugin.
	 */
	public function jsps_get_loader() {
		return $this->jsps_loader;
	}

	/**
	 * Retrieve the version number of the plugin.
	 *
	 * @since     1.0.0
	 * @return    string    The version number of the plugin.
	 */
	public function jsps_get_version() {
		return $this->jsps_version;
	}
    public function jsps_js_include() {
        
	$this->obj_map_short = new Jsps_Map_Shortcode(); 
    $this->obj_map_short->jsps_world_map_fun();      
	$api_key_map_set = $this->obj_map_short->getMainShortAttr();
	echo '<pre>'; print_r($api_key_map_set); 
	if(!$api_key_map_set){
		$api_key_map_set ='AIzaSyAzXoaC9OV09c-sTdIWWR1hWzUcJppx_g8';
	}

	wp_enqueue_script('map_google', '//maps.googleapis.com/maps/api/js?key='.$api_key_map_set.'&libraries=places', array(), '1.0', null);
	
    }

    /**
	 * Call  admin menu action to jsps_admin_map_menu function
	 *
	 * @since    1.2.1
	 * 
	 */
    public function jsps_map_menu(){
        $plugin_admin = new Jsps_Map_Admin( $this->jsps_get_plugin_name(), $this->jsps_get_version() );
        $this->jsps_loader->jsps_add_action( 'admin_menu', $plugin_admin, 'jsps_admin_map_menu' );
    }
}

