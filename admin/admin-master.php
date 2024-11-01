<?php
/**
 * @author RAMPiT
 * @copyright 2017
 * 
 * Main plugin class 
 * 
 * @link       
 * @since      1.2.1
 *
 * @package    World_Map
 * @subpackage World_Map/admin
 */
if ( ! defined( 'ABSPATH' ) ) exit;
/**
* world map admin main page
*/
function jsps_addmap() {
    
    
}
/**
* world map skin page 
* @since      1.2.1
*/

function jsps_addskin() { ?>
    <div class="skincontent">
    <?php
    $skin_title = ' ';
    if($_POST['skin_name']){
      $skin_title = jsps_skin_update();
      echo "<div class='sucess_msg'> Skin added successfully </div>";      
    }
    $skin_json_content = get_option($skin_title);     
    ?>
   
   
        <form id="skinform" method="post" action="" name="skinform">
              <div>
                    <label>skin name</label>
                    <input type="text" name="skin_name" value="<?php echo esc_html($skin_title ); ?>" id="skinform_skin_name"/>
              </div>
              <div> 
                    <label>skin json</label>
                    <textarea name="skin_json" id="skinform_skin_json"><?php echo esc_textarea($skin_json_content); ?>  </textarea>
              </div>
              <div> 
                     <label>&nbsp;</label>
                     <input type="submit" name="submit" value="submit" class="skinform_submit">
              </div>
        </form>
   </div> 
<?php    
}

/**
* world map insert skin value into option table
* @since      1.2.1
*/
function jsps_skin_update() { 
    
    $map_json_style = '';
    if($_POST['skin_json']){          
        $map_json_style = stripslashes($_POST['skin_json']);
    }    
    global $wpdb;         
    $table_name = $wpdb->prefix .'options';
    $location_insert = $wpdb->insert($table_name,
                           array( 
    							'option_id'=>' ',
    							'option_name'=>sanitize_text_field($_POST['skin_name']),
    							'option_value'=>sanitize_textarea_field($map_json_style)
                               ) 
                       ); 
     return $_POST['skin_name'];                  
}
?>

