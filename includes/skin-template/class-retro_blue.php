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
class Jsps_Retro_blue {

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
				"color": "#ebe3cd"
			  }
			]
		  },
		  {
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#523735"
			  }
			]
		  },
		  {
			"elementType": "labels.text.stroke",
			"stylers": [
			  {
				"color": "#f5f1e6"
			  }
			]
		  },
		  {
			"featureType": "administrative",
			"elementType": "geometry.stroke",
			"stylers": [
			  {
				"color": "#c9b2a6"
			  }
			]
		  },
		  {
			"featureType": "administrative.land_parcel",
			"elementType": "geometry.stroke",
			"stylers": [
			  {
				"color": "#dcd2be"
			  }
			]
		  },
		  {
			"featureType": "administrative.land_parcel",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#ae9e90"
			  }
			]
		  },
		  {
			"featureType": "landscape.natural",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#dfd2ae"
			  }
			]
		  },
		  {
			"featureType": "poi",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#dfd2ae"
			  }
			]
		  },
		  {
			"featureType": "poi",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#93817c"
			  }
			]
		  },
		  {
			"featureType": "poi.park",
			"elementType": "geometry.fill",
			"stylers": [
			  {
				"color": "#a5b076"
			  }
			]
		  },
		  {
			"featureType": "poi.park",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#447530"
			  }
			]
		  },
		  {
			"featureType": "road",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#f5f1e6"
			  }
			]
		  },
		  {
			"featureType": "road.arterial",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#fdfcf8"
			  }
			]
		  },
		  {
			"featureType": "road.highway",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#f8c967"
			  }
			]
		  },
		  {
			"featureType": "road.highway",
			"elementType": "geometry.stroke",
			"stylers": [
			  {
				"color": "#e9bc62"
			  }
			]
		  },
		  {
			"featureType": "road.highway.controlled_access",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#e98d58"
			  }
			]
		  },
		  {
			"featureType": "road.highway.controlled_access",
			"elementType": "geometry.stroke",
			"stylers": [
			  {
				"color": "#db8555"
			  }
			]
		  },
		  {
			"featureType": "road.local",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#806b63"
			  }
			]
		  },
		  {
			"featureType": "transit.line",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#dfd2ae"
			  }
			]
		  },
		  {
			"featureType": "transit.line",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#8f7d77"
			  }
			]
		  },
		  {
			"featureType": "transit.line",
			"elementType": "labels.text.stroke",
			"stylers": [
			  {
				"color": "#ebe3cd"
			  }
			]
		  },
		  {
			"featureType": "transit.station",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#dfd2ae"
			  }
			]
		  },
		  {
			"featureType": "water",
			"elementType": "geometry.fill",
			"stylers": [
			  {
				"color": "#b9d3c2"
			  }
			]
		  },
		  {
			"featureType": "water",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#92998d"
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

    $this->obj_map_short = new Jsps_Retro_blue();