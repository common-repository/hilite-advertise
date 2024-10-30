<?php

function hilMenuDashboard()
{
    $uri_img = HILADV_IMG_DASH_URL . 'logo-icon-box-hilite-advertise.jpg';
    add_menu_page(
        'تبلیغات  هایلایت',
        'تبلیغات  هایلایت',
        'manage_options',
        'hil-advertise',
        'hilAdvertise',
        $uri_img,
        501
    );

}
add_action('admin_menu', 'hilMenuDashboard');

function hilAdvertise()
{
    require_once HILADV_DIR . "modules-menu/index.php";
    hilShowFormOptions();
}