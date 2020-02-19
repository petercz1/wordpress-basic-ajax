<?php
namespace chipbug\basic\ajax;

class WP_Ajax_Loadscripts
{
    public function init()
    {
        error_log(plugin_dir_url( __FILE__));
        $this->load_css();
        $this->load_js();
    }

    private function load_css()
    {
        error_log('loading css');
        wp_enqueue_style('WP-ajax-css', plugin_dir_url( __FILE__) . '../css/wp_ajax.css');
    }

    private function load_js()
    {
        error_log('loading js');
        $tmp = __LINE__ . ': ' . plugin_dir_url( __FILE__) . '../js/wp_ajax.js';
        error_log($tmp);
        // needs jquery so registering first...
        wp_register_script('WP-ajax-js', plugin_dir_url( __FILE__) . '../js/wp_ajax.js', array( 'jquery' ));
        // ... then enqueueing
        wp_enqueue_script('WP-ajax-js');
    }
}