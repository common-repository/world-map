<?php

/**
 * The Main map all process/ function calls
 *
 * @link       
 * @since      1.0.0
 *
 * This class used to manage all the map display process like call Main shortcode, PIN shortcode and Map API display process 
 *
 * @package    World_Map
 * @subpackage World_Map/public
 * @author     RAMPiT
 */
if ( ! defined( 'ABSPATH' ) ) exit;   
class Jsps_Main_Map_Process {


    protected $jspsMapAttrArr; // all map attr details @since    1.0.0 @access   protected  @var  array
    protected $jspsMapContStr; // all pin content @since    1.0.0 @access   protected  @var  string    
    protected $jspsPinDetailsArr; // all pin details @since    1.0.0 @access   protected  @var  array     
    

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      
	 * @param      
	 */
	public function __construct() {
		
        echo "tset";
        
       $this->jspsMapAttrArr = array();       
       $this->jspsPinDetailsArr = array();        
        
		/**
         * Call Map Main shortcode call and get the values	
         * Create object and execute at first time
         * @since    1.0.0 
		 */		
        $this->obj_map_short = new Jsps_Map_Shortcode();
           echo "tset";
        $this->jspsMapAttrArr = $this->obj_map_short->getMainShortAttr(); // Get all Main shortocde attr values as array        
        $this->jspsMapContStr = $this->obj_map_short->getPinShortCon(); // Get PIN shortcode as string     
        
        print_r($this->jspsMapAttrArr);
           echo "2222tset";
        /*
         * Call the Jsps_Pin_Shortcode class to create object and execute for each Pin
         * @since    1.0.0
         */            
        $this->obj_pin_short = new Jsps_Pin_Shortcode();          
        $this->setMapPinDetails(); //Set Map all Pin details into array through PIN main class
        $this->getMapPinDetails();
	}

	/**
	 * Set the PIN all address and other deails into array
	 *
	 * @since    1.0.0
	 */
	public function setMapPinDetails() {
	   
        do_shortcode($this->jspsMapContStr); // user end execuation for each jsps_pin shortcode

	}
    
    

	/**
	 * Get the PIN all address and other deails as array
	 *
	 * @since    1.0.0
	 */
	public function getMapPinDetails() {

        /*
         * Call the Jsps_Pin_Shortcode class function to get the Pin details
         * @since    1.0.0
         */            
        $this->jspsPinDetailsArr = $this->obj_pin_short->jsps_get_pin_details(); // Get all Pin details as array   
        

	}



}

        //$this->jspsMainMapProcess = new Jsps_Main_Map_Process(); // Load all Style and Script and main functions
