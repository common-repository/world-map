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
class Jsps_Bobbys_world {


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
        "featureType": "landscape.natural.landcover",
        "stylers": [
            {
                "gamma": 0.44
            },
            {
                "hue": "#2bff00"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "hue": "#00a1ff"
            },
            {
                "saturation": 29
            },
            {
                "gamma": 0.74
            }
        ]
    },
    {
        "featureType": "landscape.natural.terrain",
        "stylers": [
            {
                "hue": "#00ff00"
            },
            {
                "saturation": 54
            },
            {
                "lightness": -51
            },
            {
                "gamma": 0.4
            }
        ]
    },
    {
        "featureType": "transit.line",
        "stylers": [
            {
                "gamma": 0.27
            },
            {
                "hue": "#0077ff"
            },
            {
                "saturation": -91
            },
            {
                "lightness": 36
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "stylers": [
            {
                "saturation": 10
            },
            {
                "lightness": -23
            },
            {
                "hue": "#0099ff"
            },
            {
                "gamma": 0.71
            }
        ]
    },
    {
        "featureType": "poi.business",
        "stylers": [
            {
                "hue": "#0055ff"
            },
            {
                "saturation": 9
            },
            {
                "lightness": -46
            },
            {
                "gamma": 1.05
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "stylers": [
            {
                "gamma": 0.99
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "stylers": [
            {
                "lightness": 36
            },
            {
                "saturation": -54
            },
            {
                "gamma": 0.76
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "stylers": [
            {
                "lightness": 33
            },
            {
                "saturation": -61
            },
            {
                "gamma": 1.21
            }
        ]
    },
    {
        "featureType": "administrative.neighborhood",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "gamma": 2.44
            }
        ]
    },
    {
        "featureType": "road.highway.controlled_access",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "lightness": 67
            },
            {
                "saturation": -40
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "stylers": [
            {
                "hue": "#ff6600"
            },
            {
                "saturation": 52
            },
            {
                "gamma": 0.64
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "hue": "#006eff"
            },
            {
                "gamma": 0.46
            },
            {
                "saturation": -3
            },
            {
                "lightness": -10
            }
        ]
    },
    {
        "featureType": "transit.line",
        "stylers": [
            {
                "hue": "#0077ff"
            },
            {
                "saturation": -46
            },
            {
                "gamma": 0.58
            }
        ]
    },
    {
        "featureType": "transit.station",
        "stylers": [
            {
                "gamma": 0.8
            }
        ]
    },
    {
        "featureType": "transit.station.rail",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": -45
            },
            {
                "gamma": 0.9
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "gamma": 0.58
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "gamma": 2.01
            },
            {
                "hue": "#00ffff"
            },
            {
                "lightness": 22
            }
        ]
    },
    {
        "featureType": "transit",
        "stylers": [
            {
                "saturation": -87
            },
            {
                "lightness": 44
            },
            {
                "gamma": 1.98
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "labels.text",
        "stylers": [
            {
                "gamma": 0.06
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "hue": "#00aaff"
            },
            {
                "lightness": -6
            },
            {
                "gamma": 2.21
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "gamma": 3.84
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "gamma": 9.99
            }
        ]
    },
    {
        "featureType": "administrative",
        "stylers": [
            {
                "gamma": 0.01
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

        $this->obj_map_short = new Jsps_Bobbys_world();