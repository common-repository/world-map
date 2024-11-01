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
class Jsps_Pin_Shortcode {
	
    protected $jsps_pin_details; // all Pin details @since    1.0.0 @access   public  @var  array
    protected $jsps_pin_count; // Pin count for array @since    1.0.0 @access   protected  @var  int
	protected $jspsPinCenterPoint; // Pin center lat lon  @since    1.0.0 @access   protected  @var  array
	protected $jspsPinCenterArrVal; //  Pin center val @since    1.0.0 @access   protected  @var  int
  
	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param    
	 * @param    
	 */
	public function __construct( ) {       
		
        $this->jsps_pin_details = array();     
        $this->jsps_pin_count = 1; 
		$this->jspsPinCenterPoint = array();    
       
       // Main Shortcode starting action 
       add_shortcode('jsps_pin', array($this, 'jsps_pin_fun'));

	}

	/**
	 * Main Shortcode callback function
	 *
	 * @since    1.0.0
	 * @param    $jsps_atts  Shortcode all values 
	 * @param    $jsps_content Shortcode Main Content Like [jsps_pin]Address[/jsps_pin]     
	 */
	public function jsps_pin_fun( $jsps_atts, $jsps_content ) {	  

            $this->jsps_pin_details[$this->jsps_pin_count]['lat'] = isset($jsps_atts['lat']) ? sanitize_text_field(trim($jsps_atts['lat'])) : ''; // Add all pin latitude into array variable
            $this->jsps_pin_details[$this->jsps_pin_count]['long'] = isset($jsps_atts['long']) ? sanitize_text_field(trim($jsps_atts['long'])) : ''; // Add all pin longitude into array variable
            $this->jsps_pin_details[$this->jsps_pin_count]['address'] = isset($jsps_content) ? sanitize_text_field(trim($jsps_content)) : ''; // Add all pin address into array variable  
    		$this->jsps_pin_details[$this->jsps_pin_count]['center'] = isset($jsps_atts['center']) ? sanitize_text_field(trim($jsps_atts['center'])) : '';	 // Center pin details.		
            $this->jsps_pin_count++;          
	}
    
	/**
	 * Return all the PIN shortcode details as array
	 *
	 * @since    1.0.0
	 */
	public function jsps_get_pin_details() {
	       return $this->jsps_pin_details;
                      
	}  
	
    /**
	 * Return all the PIN shortcode details as array
	 *
	 * @since    1.0.0
	 */
	public function jspsGetCenterPoint() {
		   
		   $this->jspsPhpversion = phpversion();
           //$this->jspsPhpversion = 5.1;           
		   if(  $this->jspsPhpversion >= 5.5 ) {		     
			   $this->jspsPinCenterArrVal = array_search('yes', array_column($this->jsps_pin_details, 'center'));
			   $this->jspsPinCenterArrVal =  $this->jspsPinCenterArrVal+1;
               
		   } else {		      
			   foreach($this->jsps_pin_details as $key => $val) {
					if($val['center'] === 'yes') {
						$this->jspsPinCenterArrVal = $key;
                        break;
					}
				}
		   }	

		   $this->jspsPinCenterPoint['cenlat'] = sanitize_text_field($this->jsps_pin_details[$this->jspsPinCenterArrVal]['lat']);
		   $this->jspsPinCenterPoint['cenlong'] = sanitize_text_field($this->jsps_pin_details[$this->jspsPinCenterArrVal]['long']);
           $this->jspsPinCenterPoint['cenAddr'] = sanitize_text_field($this->jsps_pin_details[$this->jspsPinCenterArrVal]['address']);
           //print_r($this->jspsPinCenterPoint);           
		   return $this->jspsPinCenterPoint;
           
	} 
}

$this->obj_pin_short = new Jsps_Pin_Shortcode();
        
       
        