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
class Jsps_Silver {

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
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#f5f5f5"
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
		  },
		  {
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#616161"
			  }
			]
		  },
		  {
			"elementType": "labels.text.stroke",
			"stylers": [
			  {
				"color": "#f5f5f5"
			  }
			]
		  },
		  {
			"featureType": "administrative.land_parcel",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#bdbdbd"
			  }
			]
		  },
		  {
			"featureType": "poi",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#eeeeee"
			  }
			]
		  },
		  {
			"featureType": "poi",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#757575"
			  }
			]
		  },
		  {
			"featureType": "poi.park",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#e5e5e5"
			  }
			]
		  },
		  {
			"featureType": "poi.park",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#9e9e9e"
			  }
			]
		  },
		  {
			"featureType": "road",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#ffffff"
			  }
			]
		  },
		  {
			"featureType": "road.arterial",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#757575"
			  }
			]
		  },
		  {
			"featureType": "road.highway",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#dadada"
			  }
			]
		  },
		  {
			"featureType": "road.highway",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#616161"
			  }
			]
		  },
		  {
			"featureType": "road.local",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#9e9e9e"
			  }
			]
		  },
		  {
			"featureType": "transit.line",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#e5e5e5"
			  }
			]
		  },
		  {
			"featureType": "transit.station",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#eeeeee"
			  }
			]
		  },
		  {
			"featureType": "water",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#c9c9c9"
			  }
			]
		  },
		  {
			"featureType": "water",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#9e9e9e"
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

        $this->obj_map_short = new Jsps_Silver();