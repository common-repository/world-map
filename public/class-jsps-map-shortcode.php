<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       
 * @since      1.0.0
 * 
 * Defines Main Shortcode process
 *
 * @package    World_Map
 * @subpackage World_Map/public
 * @author     RAMPiT
 */
if ( ! defined( 'ABSPATH' ) ) exit;  
class Jsps_Map_Shortcode {
	
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
	public function __construct( ) {
       
       $this->jspsMapAttrArr = array();       
    
       // Main Shortcode starting action 
       add_shortcode('jsps_world_map', array($this, 'jsps_world_map_fun'));

    
	}

	/**
	 * Main Shortcode callback function
	 *
	 * @since    1.0.0
	 * @param    $jsps_atts  Shortcode all values 
	 * @param    $jsps_content Shortcode Main Content Like [jsps_pin]Address[/jsps_pin]     
	 */
	public function jsps_world_map_fun( $jsps_atts, $jsps_content ) {
	      	        
                
            $default_image =  plugin_dir_url( __FILE__ ).'\image\marker_blue.png';;
            //Print_r($jsps_atts);
            //Print_r($jsps_content);           
            $this->jspsMapAttrArr = shortcode_atts( array( 'width' => '100%',
                                                           'height' => '400px',
                                                           'zoom' => '5',
                                                           'apikey' =>'AIzaSyAzXoaC9OV09c-sTdIWWR1hWzUcJppx_g8',
                                                           'marker' => $default_image,
														   'cenlat' => '',
														   'cenlong' => '',
                                                           'style' => 'standard',
														   'removecontrols' => ''
                                                          ), $jsps_atts); // Set all main shortcode array values
                                                       
            $this->jspsMapContStr = sanitize_text_field(trim($jsps_content)); // Set all PIN shortcode content as string
		
            /*
             * Call the Jsps_Pin_Shortcode class to create object and execute for each Pin
             * @since    1.0.0
             */            
            $this->obj_pin_short = new Jsps_Pin_Shortcode();          
            $this->setMapPinDetails(); //Set Map all Pin details into array through PIN main class
		
			//$this->obj_map_styles = new Jsps_Skin1(); 
            /*
             * Call the getMapStyles fuction to get skin values
             * @since    1.2.1
             */ 
            $map_style_content = $this->getMapStyles();    
            $map_json_style = '';
            if(count($map_style_content) > 0) {               
               $map_json_style =($map_style_content)?$map_style_content['0']->option_value:''; 
               
            }else{
                
                $jspsclassname = 'class-'.$this->jspsMapAttrArr['style'].'.php'; 
                require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/skin-template/'.$jspsclassname;    
                
                $jspstemplateclass = Jsps_.ucfirst($this->jspsMapAttrArr['style']);
                $this->obj_map_styles = new $jspstemplateclass(); 
                $map_json_style = $this->obj_map_styles->getTemplateSkin();
            }             
            /*$jspsclassname = 'class-'.$this->jspsMapAttrArr['style'].'.php'; 
            require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/skin-template/'.$jspsclassname;    
            
            $jspstemplateclass = Jsps_.ucfirst($this->jspsMapAttrArr['style']);
            $this->obj_map_styles = new $jspstemplateclass(); */
            //$this->jspsMapAttrArr = array_merge($this->jspsMapAttrArr, $this->obj_pin_short->jspsGetCenterPoint());	
		
			/*
             * Call the jspsGetCenterPoint if short code cenlat, cenlong value not in 
             * @since    1.1.1
             */
			 if( empty($this->jspsMapAttrArr['cenlat']) || empty($this->jspsMapAttrArr['cenlong'])){
				
				 $this->jspsMapAttrArr = array_merge($this->jspsMapAttrArr, $this->obj_pin_short->jspsGetCenterPoint()); 
			 }
             //$this->jspsCreateMapAPI = new Jsps_Google_Map_Api($this->jspsMapAttrArr, $this->getMapPinDetails(),$this->obj_map_styles->getTemplateSkin());
             $this->jspsCreateMapAPI = new Jsps_Google_Map_Api($this->jspsMapAttrArr, $this->getMapPinDetails(),$map_json_style);
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
        return $this->jspsPinDetailsArr;      

	}


	/**
	 * return all Main Shortcode attribuate values as array
	 *
	 * @since    1.0.0
	 * @param     
	 * @param         
	 */
	public function getMainShortAttr() {
	  
            return $this->jspsMapAttrArr; // return all main shortcode array values
                        
	}    

	/**
	 * return all PIN Shortcode content values as string
	 *
	 * @since    1.0.0
	 * @param     
	 * @param         
	 */
	public function getPinShortCon() {            
            return $this->jspsMapContStr; // return all PIN shortcode string values
                                    
	} 
    
    /**
	 * return skin values 
	 *
	 * @since    1.2.1
	 * @param     
	 * @param         
	 */
	public function getMapStyles() {  
            global $wpdb;
            $map_style_name = $this->jspsMapAttrArr['style'];
            $table_name = $wpdb->prefix .'options';
            $results = $wpdb->get_results( $wpdb->prepare('SELECT * FROM '.$table_name.' WHERE option_name like %s',$map_style_name) );  
            return  $results;        
	} 
   

}

        $this->obj_map_short = new Jsps_Map_Shortcode();



