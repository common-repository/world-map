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
class Jsps_Esperanto {


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
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#0000ff"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ff0000"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000100"
            }
        ]
    },
    {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffff00"
            }
        ]
    },
    {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#ff0000"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffa91a"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "stylers": [
            {
                "saturation": 36
            },
            {
                "gamma": 0.55
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "color": "#000000"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "lightness": -100
            },
            {
                "weight": 2.1
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "invert_lightness": true
            },
            {
                "hue": "#ff0000"
            },
            {
                "gamma": 3.02
            },
            {
                "lightness": 20
            },
            {
                "saturation": 40
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "stylers": [
            {
                "saturation": 100
            },
            {
                "hue": "#ff00ee"
            },
            {
                "lightness": -13
            }
        ]
    },
    {
        "featureType": "poi.government",
        "stylers": [
            {
                "saturation": 100
            },
            {
                "hue": "#eeff00"
            },
            {
                "gamma": 0.67
            },
            {
                "lightness": -26
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "hue": "#ff0000"
            },
            {
                "saturation": 100
            },
            {
                "lightness": -37
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ff0000"
            }
        ]
    },
    {
        "featureType": "poi.school",
        "stylers": [
            {
                "hue": "#ff7700"
            },
            {
                "saturation": 97
            },
            {
                "lightness": -41
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "stylers": [
            {
                "saturation": 100
            },
            {
                "hue": "#00ffb3"
            },
            {
                "lightness": -71
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "saturation": 84
            },
            {
                "lightness": -57
            },
            {
                "hue": "#a1ff00"
            }
        ]
    },
    {
        "featureType": "transit.station.airport",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "gamma": 0.11
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#ffc35e"
            }
        ]
    },
    {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": -100
            }
        ]
    },
    {
        "featureType": "administrative",
        "stylers": [
            {
                "saturation": 100
            },
            {
                "gamma": 0.35
            },
            {
                "lightness": 20
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "gamma": 0.35
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#69ffff"
            }
        ]
    },
    {
        "featureType": "poi.place_of_worship",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#c3ffc3"
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

        $this->obj_map_short = new Jsps_Esperanto();