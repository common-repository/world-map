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
class Jsps_Love_lock_four {


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
        "elementType": "geometry",
        "stylers": [
            {
                "lightness": "-5"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "lightness": "-10"
            },
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "lightness": "0"
            },
            {
                "gamma": "1"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "on"
            },
            {
                "lightness": "0"
            },
            {
                "gamma": "1"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "hue": "#d700ff"
            },
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [
            {
                "hue": "#ff0000"
            }
        ]
    },
    {
        "featureType": "administrative",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "color": "#444444"
            },
            {
                "saturation": "0"
            },
            {
                "lightness": "0"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "lightness": "50"
            }
        ]
    },
    {
        "featureType": "administrative.country",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "lightness": "25"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "weight": "1"
            },
            {
                "lightness": "0"
            }
        ]
    },
    {
        "featureType": "administrative.province",
        "elementType": "labels.text",
        "stylers": [
            {
                "lightness": "25"
            }
        ]
    },
    {
        "featureType": "administrative.locality",
        "elementType": "labels.text",
        "stylers": [
            {
                "lightness": "30"
            },
            {
                "gamma": "1.00"
            }
        ]
    },
    {
        "featureType": "administrative.neighborhood",
        "elementType": "labels.text",
        "stylers": [
            {
                "lightness": "53"
            },
            {
                "gamma": "1.00"
            }
        ]
    },
    {
        "featureType": "administrative.neighborhood",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "lightness": "-20"
            },
            {
                "gamma": "1.00"
            }
        ]
    },
    {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "lightness": "30"
            },
            {
                "gamma": "1"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "all",
        "stylers": [
            {
                "color": "#f2f2f2"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "lightness": "-10"
            }
        ]
    },
    {
        "featureType": "landscape",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "lightness": "-40"
            }
        ]
    },
    {
        "featureType": "poi",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "18"
            },
            {
                "saturation": "-100"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "lightness": "-30"
            }
        ]
    },
    {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            },
            {
                "lightness": "50"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "simplified"
            },
            {
                "lightness": "0"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "weight": "1"
            },
            {
                "saturation": "0"
            },
            {
                "lightness": "83"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "0"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "lightness": "80"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "labels.icon",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "lightness": "0"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "lightness": "80"
            },
            {
                "gamma": "1"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "geometry.stroke",
        "stylers": [
            {
                "saturation": "0"
            },
            {
                "lightness": "-15"
            },
            {
                "weight": ".25"
            },
            {
                "gamma": "1"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "labels.text",
        "stylers": [
            {
                "lightness": "0"
            },
            {
                "gamma": "1.00"
            }
        ]
    },
    {
        "featureType": "transit",
        "elementType": "all",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "color": "#ffc1d9"
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [
            {
                "color": "#ffffff"
            },
            {
                "saturation": "-100"
            },
            {
                "lightness": "-5"
            },
            {
                "gamma": "0.5"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [
            {
                "visibility": "off"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "labels.text.stroke",
        "stylers": [
            {
                "weight": ".75"
            },
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

        $this->obj_map_short = new Jsps_Love_lock_four();