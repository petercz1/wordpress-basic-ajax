<?php
namespace chipbug\basic\ajax;

class WP_Ajax_Loadjs
{
    public function init()
    {
		error_log('loading js...');
		wp_register_script( 'WP-ajax-js', plugins_url( 'js/wp_ajax.js', __FILE__ ), array( 'jquery' ));
        wp_enqueue_script('WP-ajax-js');
    }
}