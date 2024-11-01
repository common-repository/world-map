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
class Jsps_Deep_green {


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
        "elementType": "geometry",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "landscape.man_made",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#ffe24d"
            }
        ]
    },
    {
        "featureType": "road",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#158c28"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#37b34a"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "color": "#ffe24d"
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "color": "#8bc53f"
            }
        ]
    },
    {
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "color": "#808080"
            },
            {
                "gamma": 9.91
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "lightness": 100
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "elementType": "labels.icon",
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

        $this->obj_map_short = new Jsps_Deep_green();