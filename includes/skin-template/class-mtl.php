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
class Jsps_Mtl {


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
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#3e606f"
            },
            {
                "weight": 2
            },
            {
                "gamma": 0.84
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [
            {
                "weight": 0.6
            },
            {
                "color": "#1a3541"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#2c5a71"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#406d80"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#2c5a71"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#29768a"
            },
            {
                "lightness": -37
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#406d80"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [
            {
                "color": "#193341"
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

        $this->obj_map_short = new Jsps_Mtl();