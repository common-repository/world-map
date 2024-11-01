<?php

/**
 * Map Template skin1 style
 *
 * @link       
 * @since      1.1.1
 * 
 * 
 *
 * @package    World_Map
 * @subpackage World_Map/includes/skin-template
 * @author     RAMPiT
 */
if ( ! defined( 'ABSPATH' ) ) exit; 
class Jsps_A_dark_world { 
	
     
	protected $jspsMapStyle;// all map style details @since    1.1.1 @access   protected  @var  array  

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.1.1
	 * @param    
	 * @param    
	 */
	public function __construct( ) {
       
       $this->setTemplateSkin();       
         
	}

	/**
	 * Main Map style callback function
	 *
	 * @since    1.1.1	
	 */
	public function setTemplateSkin() {
	  
	  $this->jspsMapStyle = '[
    {
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "stylers": [
            {
                "color": "#131314"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#131313"
            },
            {
                "lightness": 7
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": 25
            }
        ]
    }
]
';
	}
    
	/**
	 * Get the Map styles 
	 *
	 * @since    1.1.1
	 */
	public function getTemplateSkin() {
		
        return $this->jspsMapStyle;   // Get all Map style as json  
	}
    
    

}

        $this->obj_map_short = new Jsps_A_dark_world();