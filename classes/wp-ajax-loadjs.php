<?php
namespace chipbug\basic\ajax;

class WP_Ajax_Loadjs
{
    public function init()
    {
        error_log('loading js...');
        wp_enqueue_script('WP-ajax-js', plugins_url('js/wp-ajax.js', __FILE__));
    }
}
