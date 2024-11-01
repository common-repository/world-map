<?php

/**
 * @author RAMPiT
 * @copyright 2017
 * 
 * Main Google map API class and functions
 * 
 * @link       
 * @since      1.0.0
 *
 * @package    World_Map
 * @subpackage World_Map/includes
 */
if ( ! defined( 'ABSPATH' ) ) exit;
class Jsps_Google_Map_Api {


	/**	 
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $jsps_api_url    The string used to uniquely identify API request URL.
	 */
	protected $jspsApiUrl;

	/**	 
	 * @since    1.0.0
	 * @access   protected
	 * @var      string    $jsps_api_key  API key to access Google Map API and get the requested details  
	 */	
    protected $jspsMapAttrArr; // all map attr details @since    1.0.0 @access   protected  @var  array    
    protected $jspsPinDetailsArr; // all pin details @since    1.0.0 @access   protected  @var  array  	    
    protected $jspsMapDetailsArr; // all map style details @since    1.0.0 @access   protected  @var  array  	    
    

	/**
	 * Define the API core functionality/variables.
     * 	 
	 * @since    1.0.0
	 */
	public function __construct($jspsMapAttr, $jspsPinDetails, $jspsMapDetails) {

		$this->jspsApiUrl = 'https://maps.googleapis.com/maps/api/js';		
        $this->jspsMapAttrArr = $jspsMapAttr;
        $this->jspsPinDetailsArr = $jspsPinDetails;        
        $this->jspsMapDetailsArr = $jspsMapDetails; 	
        $this->displayMapWithPin();
        
	}
    

	/**
     * Disply the Map through script with all PIN deails. This Main Funxtion to display the Map
     * 	 
	 * @since    1.0.0
	 */    
    public function displayMapWithPin() { 
	?>
	<!--<script src="<?php echo  $this->jspsApiUrl; ?>?key=<?php echo  $this->jspsMapAttrArr['apikey']; ?>&callback=jspsInitializeMap" async defer></script>
	<div id="map_content" style="width:<?php echo  $this->jspsMapAttrArr['width']; ?>;height:<?php echo $this->jspsMapAttrArr['height'] ?>;"></div>
     
    
    <script src="<?php echo  $this->jspsApiUrl; ?>?key=<?php echo  $this->jspsMapAttrArr['apikey']; ?>&callback=jspsInitializeMap" async defer></script>-->   
    <!--<script src="<?php echo  $this->jspsApiUrl; ?>?key=<?php echo  $this->jspsMapAttrArr['apikey']; ?>&callback=<?php echo  'jspsInitializeMap'.$this->jspsMapAttrArr['style']; ?>" async defer></script>-->
   
    <div id="<?php echo  $this->jspsMapAttrArr['style']; ?>" style="width:<?php echo  $this->jspsMapAttrArr['width']; ?>;height:<?php echo $this->jspsMapAttrArr['height'] ?>;"></div>     
	<script>
    
    //google.maps.event.addDomListener(window, 'load', jspsInitializeMap);
    //google.maps.event.addDomListener(window, 'load', <?php echo  'jspsInitializeMap'.$this->jspsMapAttrArr['style'];?>);
    //var map_callback = '<?php echo  'jspsInitializeMap'.$this->jspsMapAttrArr['style'];?>'+'()';
    /*
     * Initialize the Main callback function
     * @since    1.0.0
     */
    
    function <?php echo  'jspsInitializeMap'.$this->jspsMapAttrArr['style']; ?>() {
		var pin_details = <?php echo json_encode($this->jspsPinDetailsArr); ?>;
		var map_details = <?php echo json_encode($this->jspsMapAttrArr); ?>;
        var map_styles = <?php echo $this->jspsMapDetailsArr; ?>;
		
        // Call function to set center location by address and call the main map function using call back function.
        getGeocodeAddrLatLong<?php echo $this->jspsMapAttrArr['style']; ?>( map_details, pin_details, map_styles); 
       
	}
    /*var map_callback_fun_name = '';
    map_callback_fun_name = 'jspsInitializeMap'+'<?php echo $this->jspsMapAttrArr['style']; ?>';  
    console.log(map_callback_fun_name);
	map_callback_fun_name();*/
    
    
    /*
     * Function to display map based on shortcode values
     * @since    1.0.0
     */  
	function jsps_map_pin<?php echo $this->jspsMapAttrArr['style']; ?>( map_details, pin_details, map_styles){ 
	    
	    var mapCanvas_<?php echo  $this->jspsMapAttrArr['style']; ?> = document.getElementById('<?php echo  $this->jspsMapAttrArr['style']; ?>'); // Get the Map display HTML ID  
		var default_removecontrols = '';
		if(map_details['removecontrols'] == 'yes'){
			default_removecontrols = 'true';
		}else{
		   default_removecontrols = false;           
		}
       
		var mapOptions_address = {				 
		  center: new google.maps.LatLng( map_details['cenlat'], map_details['cenlong'] ),
		  zoom:parseInt(map_details['zoom']),
		  mapTypeId: google.maps.MapTypeId.ROADMAP,
		  styles:map_styles,
		  disableDefaultUI:default_removecontrols,
		  scrollwheel: default_removecontrols
		};
      
		var map = new google.maps.Map(mapCanvas_<?php echo  $this->jspsMapAttrArr['style']; ?>, mapOptions_address);        
        
		var pin_details_array = Object.keys(pin_details).map(function(k) { return pin_details[k] });        
		for ( var key in pin_details_array ){		
			if(!pin_details_array[key]['lat'] || !pin_details_array[key]['long'] ){
				map_by_address<?php echo $this->jspsMapAttrArr['style']; ?>(map,pin_details_array[key]['address'], map_details); // Display PIN location by address 
			}else{
				map_by_pin<?php echo $this->jspsMapAttrArr['style']; ?>( map, pin_details_array[key], map_details); // Display PIN location by Lat long
			}
		}
        /*
         * Map responsive  
         * @since    1.2.1
         */ 
       	google.maps.event.addDomListener(window, "resize", function() {
            var center = map.getCenter(); 
            google.maps.event.trigger(map, "resize");     
             map.setCenter(center);
        });
	}
    
    /*
     * Add location Markder By givenn address
     * @since    1.0.0
     */	
	function map_by_address<?php echo $this->jspsMapAttrArr['style']; ?>( resultsMap , pinAddress, map_details ) {
            
            var geocoder = new google.maps.Geocoder();            
			geocoder.geocode({'address': pinAddress}, function(results, status) {
			  if (status === 'OK') {

			   var contentString = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h2 id="firstHeading" class="firstHeading">Address</h2>'+
			  '<div id="bodyContent">'+
			  '<p>' +pinAddress+'Heritage Site.</p>'+
			  '</div>'+
			  '</div>';

			   var infowindow = new google.maps.InfoWindow({
				content: contentString
			  });
                
				var marker = new google.maps.Marker({
				   map: resultsMap,
				   position: results[0].geometry.location,
				   icon:map_details['marker']
				});
				marker.addListener('click', function() {
					infowindow.open(resultsMap, marker);
				  });
               
			  } else if (status === google.maps.GeocoderStatus.OVER_QUERY_LIMIT) {
				  wait = true;
				 setTimeout("wait = true", 2000);
			  }else {
				alert('Geocode was not successful for the following reason: ' + status);
			  }
			});
	}

    /*
     * Add location Markder By givenn Lat/Long values
     * @since    1.0.0
     */	
	function map_by_pin<?php echo $this->jspsMapAttrArr['style']; ?>( map, pin_details, map_details ){		
			myLatlng = new google.maps.LatLng(pin_details['lat'],pin_details['long']);
			
			 /*var contentString = '<div id="content">'+
			  '<div id="siteNotice">'+
			  '</div>'+
			  '<h2 id="firstHeading" class="firstHeading">Address</h2>'+
			  '<div id="bodyContent">'+
			  '<p>' +pinAddress+'Heritage Site.</p>'+
			  '</div>'+
			  '</div>';*/

			  /* var infowindow = new google.maps.InfoWindow({
				content: contentString
			  });*/
				
				var marker = new google.maps.Marker({  
				position: myLatlng,
				icon:map_details['marker'],
				map: map            
			});
			/*marker.addListener('click', function() {
					infowindow.open(map, marker);
			});*/
               
	}    

    /*
     * Set the map center point by given address OR lat/long value
     * Call Main Map function to display the Map with all markder
     * @since    1.0.0
     */	    
	function getGeocodeAddrLatLong<?php echo $this->jspsMapAttrArr['style']; ?>( map_details, pin_details, map_styles ) { // Get the address Lat Long details    
   
        if( !(map_details['cenlat']) ||  !(map_details['cenlong']) ) {    
            var geocoder = new google.maps.Geocoder();
            var result = "";
            if(map_details['cenAddr']){
                geocoder.geocode( { 'address': map_details['cenAddr'] }, function(results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {                    
                        var locationArr = [];
                        result = results[0].geometry.location;
                        map_details['cenlat']=results[0].geometry.location.lat();
                        map_details['cenlong']=results[0].geometry.location.lng();
                                    
                        jsps_map_pin<?php echo $this->jspsMapAttrArr['style']; ?>( map_details, pin_details, map_styles);
                    } else {
                        result = "Unable to find address: " + status;
                    }
                });        
          }else{                 
                jsps_map_pin<?php echo $this->jspsMapAttrArr['style']; ?>( map_details, pin_details, map_styles);
          }            
        } else {            
            jsps_map_pin<?php echo $this->jspsMapAttrArr['style']; ?>( map_details, pin_details, map_styles );
        }
        return result;        
	}
 
	</script>
    <script src="<?php echo  $this->jspsApiUrl; ?>?key=<?php echo  $this->jspsMapAttrArr['apikey']; ?>&callback=<?php echo  'jspsInitializeMap'.$this->jspsMapAttrArr['style']; ?>" async defer></script>
	<?php
    
   
    }    
}

