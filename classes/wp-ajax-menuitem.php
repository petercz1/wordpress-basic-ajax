<?php
namespace chipbug\basic\ajax;

/*
 * Create the admin menu item
 */
class WP_Ajax_Menuitem
{
    public function init()
    {
        error_log('adding menu stuff');
        $wp_ajax_adminpage = new WP_Ajax_Adminpage();

        add_menu_page(
            'AJAX title Tester', 'AJAX menu Tester', 'edit_pages', 'WP_ajax_adminpage', array($wp_ajax_adminpage, 'init'), 'dashicons-clipboard', 49);
    }
}