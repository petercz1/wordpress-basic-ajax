<?php
namespace chipbug\basic\ajax;

/**
 * Plugin Name: WP Ajax tester
 * WordPress AJAX Tester
 * Plugin URI: http://WP.com
 * Description: A plugin for testing how AJAX calls work with WordPress
 * Version: 1.2
 * Author: PC
 * License: GPLv2
 */

 // no autoloader used - help yourself to eg composer... 
require_once plugin_dir_path(__FILE__) . 'classes/wp-ajax-adminpage.php';
require_once plugin_dir_path(__FILE__) . 'classes/wp-ajax-demo.php';
require_once plugin_dir_path(__FILE__) . 'classes/wp-ajax-db-handler.php';
require_once plugin_dir_path(__FILE__) . 'classes/wp-ajax-loadscripts.php';
require_once plugin_dir_path(__FILE__) . 'classes/wp-ajax-menuitem.php';

(new WP_ajax_demo)->init();
