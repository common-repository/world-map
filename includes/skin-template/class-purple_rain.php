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
class Jsps_Purple_rain {


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
        "featureType": "road",
        "stylers": [
            {
                "hue": "#5e00ff"
            },
            {
                "saturation": -79
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "saturation": -78
            },
            {
                "hue": "#6600ff"
            },
            {
                "lightness": -47
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "lightness": 22
            }
        ]
    },
    {
        "featureType": "landscape",
        "stylers": [
            {
                "hue": "#6600ff"
            },
            {
                "saturation": -11
            }
        ]
    },
    {},
    {},
    {
        "featureType": "water",
        "stylers": [
            {
                "saturation": -65
            },
            {
                "hue": "#1900ff"
            },
            {
                "lightness": 8
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "weight": 1.3
            },
            {
                "lightness": 30
            }
        ]
    },
    {
        "featureType": "transit",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "hue": "#5e00ff"
            },
            {
                "saturation": -16
            }
        ]
    },
    {
        "featureType": "transit.line",
        "stylers": [
            {
                "saturation": -72
            }
        ]
    },
    {}
]
';
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

        $this->obj_map_short = new Jsps_Purple_rain();