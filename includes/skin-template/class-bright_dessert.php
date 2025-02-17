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
class Jsps_Bright_dessert {


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
        "featureType": "landscape",
        "stylers": [
            {
                "saturation": -7
            },
            {
                "gamma": 1.02
            },
            {
                "hue": "#ffc300"
            },
            {
                "lightness": -10
            }
        ]
    },
    {
        "featureType": "road.highway",
        "stylers": [
            {
                "hue": "#ffaa00"
            },
            {
                "saturation": -45
            },
            {
                "gamma": 1
            },
            {
                "lightness": -4
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "stylers": [
            {
                "hue": "#ffaa00"
            },
            {
                "lightness": -10
            },
            {
                "saturation": 64
            },
            {
                "gamma": 0.9
            }
        ]
    },
    {
        "featureType": "road.local",
        "stylers": [
            {
                "lightness": -5
            },
            {
                "hue": "#00f6ff"
            },
            {
                "saturation": -40
            },
            {
                "gamma": 0.75
            }
        ]
    },
    {
        "featureType": "poi",
        "stylers": [
            {
                "saturation": -30
            },
            {
                "lightness": 11
            },
            {
                "gamma": 0.5
            },
            {
                "hue": "#ff8000"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "hue": "#0077ff"
            },
            {
                "gamma": 1.25
            },
            {
                "saturation": -22
            },
            {
                "lightness": -31
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

        $this->obj_map_short = new Jsps_Bright_dessert();