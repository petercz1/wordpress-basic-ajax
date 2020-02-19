<?php
namespace chipbug\basic\ajax;

class WP_Ajax_Demo
{
    public function init()
    {
        
        // add js and css for both admin and frontend
        $wp_ajax_loadscripts = new WP_Ajax_Loadscripts();
        add_action('wp_enqueue_scripts', array($wp_ajax_loadscripts, 'init')); 	// loads css
        add_action('admin_enqueue_scripts', array($wp_ajax_loadscripts, 'init')); 	// loads css

        // loading wp_ajax_menuitem
        $wp_ajax_menuitem = new WP_Ajax_Menuitem();
        add_action('admin_menu', array($wp_ajax_menuitem, 'init'));			// loads menu item

        // this is the weird one. The WordPress ajax handler needs 'wp_ajax_' in front of the requested function...
        $wp_ajax_db_handler = new WP_Ajax_Db_Handler();
        add_action('wp_ajax_WP_ajax_db_handler', array($wp_ajax_db_handler, 'init')); // loads server-side ajax handler 
    }
}