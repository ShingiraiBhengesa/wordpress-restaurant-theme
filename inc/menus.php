<?php
/**
 * @package ciy_parallax_theme
 * 
 * All our menus are on this page
 */

//  Custom Navigation Bar
function add_navbar(){
    register_nav_menus(
        array(
            'ciy-navbar'    => __('CIY Navbar'),
            'ciy-footer'    => __('CIY Footer Navbar')
        )
        );
}
add_action('init', 'add_navbar');