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
class Jsps_Moret {


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
        "featureType": "administrative.country",
        "elementType": "labels.text",
        "stylers": [
            {
                "color": "#737373"
            },
            {
                "weight": "0.01"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "97"
            },
            {
                "color": "#ffffff"
            },
            {
                "visibility": "simplified"
            },
            {
                "lightness": "81"
            }
        ]
    },
    {
        "featureType": "landscape.natural.landcover",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "100"
            },
            {
                "lightness": "100"
            },
            {
                "gamma": "10.00"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "100"
            },
            {
                "lightness": "100"
            },
            {
                "gamma": "10.00"
            },
            {
                "weight": "0.01"
            }
        ]
    },
    {
        "featureType": "poi.attraction",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#565656"
            }
        ]
    },
    {
        "featureType": "poi.business",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#565656"
            }
        ]
    },
    {
        "featureType": "poi.government",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#565656"
            }
        ]
    },
    {
        "featureType": "poi.medical",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#565656"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "100"
            },
            {
                "lightness": "100"
            },
            {
                "gamma": "10.00"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#565656"
            }
        ]
    },
    {
        "featureType": "poi.place_of_worship",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#565656"
            }
        ]
    },
    {
        "featureType": "poi.school",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#565656"
            }
        ]
    },
    {
        "featureType": "poi.sports_complex",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#565656"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "saturation": "-70"
            },
            {
                "lightness": "43"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#39d2ca"
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

        $this->obj_map_short = new Jsps_Moret();