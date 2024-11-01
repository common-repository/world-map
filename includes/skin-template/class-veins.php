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
class Jsps_Veins {


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
                "hue": "#B61530"
            },
            {
                "saturation": 60
            },
            {
                "lightness": -40
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#B61530"
            }
        ]
    },
    {
        "featureType": "road",
        "stylers": [
            {
                "color": "#B61530"
            },
            {}
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "color": "#B61530"
            },
            {
                "lightness": 6
            }
        ]
    },
    {
        "featureType": "road.highway",
        "stylers": [
            {
                "color": "#B61530"
            },
            {
                "lightness": -25
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "stylers": [
            {
                "color": "#B61530"
            },
            {
                "lightness": -10
            }
        ]
    },
    {
        "featureType": "transit",
        "stylers": [
            {
                "color": "#B61530"
            },
            {
                "lightness": 70
            }
        ]
    },
    {
        "featureType": "transit.line",
        "stylers": [
            {
                "color": "#B61530"
            },
            {
                "lightness": 90
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "transit.station",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
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

        $this->obj_map_short = new Jsps_Veins();