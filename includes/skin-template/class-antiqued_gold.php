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
class Jsps_Antiqued_gold {
	
     
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
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
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
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ffd100"
            },
            {
                "saturation": "44"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "saturation": "-1"
            },
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry",
        "stylers": [
            {
                "saturation": "-16"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ffd100"
            },
            {
                "saturation": "44"
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
                "saturation": "-30"
            },
            {
                "lightness": "12"
            },
            {
                "hue": "#ff8e00"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "saturation": "-26"
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
                "color": "#c0b78d"
            },
            {
                "visibility": "on"
            },
            {
                "saturation": "4"
            },
            {
                "lightness": "40"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#ffe300"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ffe300"
            },
            {
                "saturation": "-3"
            },
            {
                "lightness": "-10"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": "-100"
            },
            {
                "lightness": "-5"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
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

        $this->obj_map_short = new Jsps_Antiqued_gold();