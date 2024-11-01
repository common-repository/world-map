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
class Jsps_Hard_edges {


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
        "featureType": "landscape.natural",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 100
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": -86
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 100
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": -75
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 97
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": -100
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 100
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": -68
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 100
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": -100
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 91
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": -100
            }
        ]
    },
    {
        "featureType": "transit.station",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": -22
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "hue": "#ff004c"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 44
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "saturation": 1
            },
            {
                "lightness": -100
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "lightness": 100
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels",
        "stylers": [
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

        $this->obj_map_short = new Jsps_Hard_edges();