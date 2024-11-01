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
class Jsps_Zombie_survival_map {


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
        "featureType": "all",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "saturation": "-100"
            },
            {
                "invert_lightness": true
            },
            {
                "lightness": "11"
            },
            {
                "gamma": "1.27"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "visibility": "simplified"
            },
            {
                "invert_lightness": true
            },
            {
                "lightness": "-10"
            },
            {
                "gamma": "0.54"
            },
            {
                "saturation": "45"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#ff0000"
            },
            {
                "saturation": "75"
            },
            {
                "lightness": "24"
            },
            {
                "gamma": "0.70"
            },
            {
                "invert_lightness": true
            }
        ]
    },
    {
        "featureType": "poi.government",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "visibility": "simplified"
            },
            {
                "invert_lightness": true
            },
            {
                "lightness": "-24"
            },
            {
                "gamma": "0.59"
            },
            {
                "saturation": "59"
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "invert_lightness": true
            },
            {
                "hue": "#ff0000"
            },
            {
                "saturation": "73"
            },
            {
                "lightness": "-24"
            },
            {
                "gamma": "0.59"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "-41"
            }
        ]
    },
    {
        "featureType": "poi.school",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#ff0000"
            },
            {
                "invert_lightness": true
            },
            {
                "saturation": "43"
            },
            {
                "lightness": "-16"
            },
            {
                "gamma": "0.73"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": "43"
            },
            {
                "lightness": "-11"
            },
            {
                "gamma": "0.73"
            },
            {
                "invert_lightness": true
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "45"
            },
            {
                "lightness": "53"
            },
            {
                "gamma": "0.67"
            },
            {
                "invert_lightness": true
            },
            {
                "hue": "#ff0000"
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
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
                "visibility": "simplified"
            },
            {
                "hue": "#ff0000"
            },
            {
                "saturation": "38"
            },
            {
                "lightness": "-16"
            },
            {
                "gamma": "0.86"
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

        $this->obj_map_short = new Jsps_Zombie_survival_map();