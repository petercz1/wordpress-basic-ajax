<?php
namespace chipbug\basic\ajax;

class WP_Ajax_Loadjs
{
    public function init()
    {
        error_log('loading js...');
        wp_enqueue_style('WP-ajax-js', plugins_url('js/WP-ajax.css', __FILE__));
    }
}
