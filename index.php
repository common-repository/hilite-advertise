<?php
/**
 * Plugin Name:         تبلیغات هایلایت
 * Author:              Team Hilite
 * Description:         این پلاگین برای پلتفرم تبلیغات هایلایت برای سایت های وردپرسی ساخته شده است.
 * Version:             1.0.1
 * Tested up to:        5.8
 * Requires at least:   5.0
 * Plugin URI:          https://hilite.ir
 * Author URI:          https://hilite.ir
 */

require_once plugin_dir_path(__FILE__) . 'init.php';

function hilActivationRedirect($plugin)
{
    if ($plugin == plugin_basename(__FILE__)) {
        exit(wp_redirect(admin_url('admin.php?page=hil-advertise')));
    }
}
add_action('activated_plugin', 'hilActivationRedirect');