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
class Jsps_Alveos {
	
     
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
        "elementType": "all",
        "stylers": [
            {
                "saturation": "46"
            },
            {
                "color": "#666666"
            },
            {
                "weight": "0.91"
            },
            {
                "gamma": "0.00"
            },
            {
                "lightness": "40"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
            {
                "saturation": "-5"
            },
            {
                "gamma": "4.31"
            },
            {
                "visibility": "off"
            },
            {
                "lightness": "-10"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "saturation": "-5"
            },
            {
                "color": "#ff0000"
            },
            {
                "gamma": "8.63"
            },
            {
                "weight": "4.01"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#666666"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "saturation": "10"
            },
            {
                "color": "#666666"
            },
            {
                "weight": "0.59"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "saturation": "-4"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "saturation": "1"
            },
            {
                "color": "#656565"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "color": "#985959"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "all",
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
                "saturation": -100
            },
            {
                "lightness": 65
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 51
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 30
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 40
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "saturation": "-14"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#ffff00"
            },
            {
                "lightness": -25
            },
            {
                "saturation": -97
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": -25
            },
            {
                "saturation": -100
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

        $this->obj_map_short = new Jsps_Alveos();