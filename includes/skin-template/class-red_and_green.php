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
class Jsps_Red_and_green {


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
                "lightness": 16
            },
            {
                "hue": "#ff001a"
            },
            {
                "saturation": -61
            }
        ]
    },
    {
        "featureType": "road.highway",
        "stylers": [
            {
                "hue": "#ff0011"
            },
            {
                "lightness": 53
            }
        ]
    },
    {
        "featureType": "poi.park",
        "stylers": [
            {
                "hue": "#00ff91"
            }
        ]
    },
    {
        "elementType": "labels",
        "stylers": [
            {
                "lightness": 63
            },
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "water",
        "stylers": [
            {
                "hue": "#0055ff"
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

        $this->obj_map_short = new Jsps_Red_and_green();