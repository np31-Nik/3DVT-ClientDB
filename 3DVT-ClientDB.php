<?php
/**
 * @package 3DVT
 */
 /*
Plugin Name: 3DVT Clients Database
Description: Custom client database for agency Costa Soñada.
Version: 1.0.2
Author: Costa Soñada
*/


//If someone tries to access this besides Wordpress, it exits.
if (!defined('ABSPATH')){
 die('Can\t access this.');
}

//On plugin activation
register_activation_hook(__FILE__, "activate_myplugin");

//On plugin deactivation
register_deactivation_hook(__FILE__,"deactivate_myplugin");

function activate_myplugin(){
 addCustomRoles();
}

function addCustomRoles(){
 add_role('3DVT-ClientManager','Client Manager', get_role('rem_property_agent')->capabilities);
 
 $role = get_role('3DVT-ClientManager');
 
 $caps = array('3DVT_readClients', '3DVT_addClients', '3DVT_editClients', '3DVT_deleteClients');

 foreach ($caps as $cap){
  $role->add_cap($cap);
 }
}

function deactivate_myplugin(){
 
}

function init_db_myplugin(){
 /*
     global $table_prefix, $wpdb;

    $tblname = 'pin';
    $wp_track_table = $table_prefix . "$tblname ";

    #Check to see if the table exists already, if not, then create it

    if($wpdb->get_var( "show tables like '$wp_track_table'" ) != $wp_track_table) 
    {

        $sql = "CREATE TABLE `". $wp_track_table . "` ( ";
        $sql .= "  `id`  int(11)   NOT NULL auto_increment, ";
        $sql .= "  `pincode`  int(128)   NOT NULL, ";
        $sql .= "  PRIMARY KEY `order_id` (`id`) "; 
        $sql .= ") ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ; ";
        require_once( ABSPATH . '/wp-admin/includes/upgrade.php' );
        dbDelta($sql);
    }
    */
}

 add_action('admin_menu','addClientMenu');

function addClientMenu(){
  add_menu_page( 
      'Forms', 
      'Form Items', 
      'manage_options', 
      'client_menu', 
      'client_menu_main', 
      'dashicons-id',
       1
  );
}

function client_menu_main(){
 
}

