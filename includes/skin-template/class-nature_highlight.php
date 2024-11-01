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
class Jsps_Nature_highlight{


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
                "visibility": "simplified"
            },
            {
                "saturation": 100
            },
            {
                "color": "#ff4702"
            }
        ]
    },
    {
        "featureType": "road",
        "stylers": [
            {
                "saturation": -100
            },
            {
                "visibility": "simplified"
            },
            {
                "lightness": -25
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#5f1bff"
            },
            {
                "saturation": 100
            },
            {
                "visibility": "on"
            },
            {
                "lightness": -38
            }
        ]
    },
    {
        "featureType": "landscape.natural.terrain",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#d3ff44"
            },
            {
                "lightness": -32
            },
            {
                "saturation": 30
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#797679"
            },
            {
                "gamma": 4.92
            },
            {
                "lightness": -47
            }
        ]
    },
    {}
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

        $this->obj_map_short = new Jsps_Nature_highlight();