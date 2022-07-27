<?php
/**
 * @package 3DVT
 */
 /*
Plugin Name: 3DVT Clients Database
Description: Custom client database for agency Costa Soñada.
Version: 1.0.53
Author: Costa Soñada
*/
//require_once ('../../../wp-config.php'); //(Critical error opening file)


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
 include "create_table.php";
 create_table();
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


add_action('admin_menu','addClientMenu');

function addClientMenu(){
  add_menu_page( 
      'Clients', 
      'Clients', 
      'manage_options', 
      'client_menu', 
      'client_menu_list', 
      'dashicons-id',
       5
  );
 
   add_submenu_page(
      'client_menu',
      'Add New Client', 
      'Add New Client', 
      'manage_options', 
      'client_menu_new', 
      'client_menu_add',     
  );
}

function client_menu_list(){
    include "search.php";
    include "clients.php";
}

function client_menu_add(){
    include "addClient.php";
}
