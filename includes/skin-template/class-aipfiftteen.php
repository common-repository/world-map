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
class Jsps_Aipfiftteen { 
	
     
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
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.icon",
        "stylers": [
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "labels",
        "stylers": [
            {
                "saturation": "36"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 45
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#ff9100"
            },
            {
                "visibility": "on"
            }
        ]
    }
]';
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

        $this->obj_map_short = new Jsps_Aipfiftteen(); 