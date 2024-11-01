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
class Jsps_Souldisco {


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
                "saturation": -100
            },
            {
                "gamma": 0.8
            },
            {
                "lightness": 4
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape.natural",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "color": "#5dff00"
            },
            {
                "gamma": 4.97
            },
            {
                "lightness": -5
            },
            {
                "saturation": 100
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

        $this->obj_map_short = new Jsps_Souldisco();