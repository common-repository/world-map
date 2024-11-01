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
class Jsps_Dark_brown {

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
				"color": "#212121"
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
				"color": "#757575"
			  }
			]
		  },
		  {
			"elementType": "labels.text.stroke",
			"stylers": [
			  {
				"color": "#212121"
			  }
			]
		  },
		  {
			"featureType": "administrative",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#757575"
			  }
			]
		  },
		  {
			"featureType": "administrative.country",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#9e9e9e"
			  }
			]
		  },
		  {
			"featureType": "administrative.land_parcel",
			"stylers": [
			  {
				"visibility": "off"
			  }
			]
		  },
		  {
			"featureType": "administrative.locality",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#bdbdbd"
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
				"color": "#181818"
			  }
			]
		  },
		  {
			"featureType": "poi.park",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#616161"
			  }
			]
		  },
		  {
			"featureType": "poi.park",
			"elementType": "labels.text.stroke",
			"stylers": [
			  {
				"color": "#1b1b1b"
			  }
			]
		  },
		  {
			"featureType": "road",
			"elementType": "geometry.fill",
			"stylers": [
			  {
				"color": "#2c2c2c"
			  }
			]
		  },
		  {
			"featureType": "road",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#8a8a8a"
			  }
			]
		  },
		  {
			"featureType": "road.arterial",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#373737"
			  }
			]
		  },
		  {
			"featureType": "road.highway",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#3c3c3c"
			  }
			]
		  },
		  {
			"featureType": "road.highway.controlled_access",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#4e4e4e"
			  }
			]
		  },
		  {
			"featureType": "road.local",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#616161"
			  }
			]
		  },
		  {
			"featureType": "transit",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#757575"
			  }
			]
		  },
		  {
			"featureType": "water",
			"elementType": "geometry",
			"stylers": [
			  {
				"color": "#000000"
			  }
			]
		  },
		  {
			"featureType": "water",
			"elementType": "labels.text.fill",
			"stylers": [
			  {
				"color": "#3d3d3d"
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

   $this->obj_map_short = new Jsps_Dark_brown();