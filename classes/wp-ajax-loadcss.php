<?php
namespace chipbug\basic\ajax;

class WP_Ajax_Loadcss
{
    public function init()
    {
        error_log('loading css...');
        wp_enqueue_style('WP-ajax-css', plugins_url(__DIR__ . '/css/wp_ajax.css', __FILE__));
    }
}
