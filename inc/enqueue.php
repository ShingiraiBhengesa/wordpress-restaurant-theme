<?php
/**
 * @package ciy_parallax_theme
 * 
 * Enqueue all your stylesheets and script files
 */

function ciy_parallax_scripts(){
    wp_enqueue_style('ciy_parallax_style', get_template_directory_uri() . '/assets/ciy_style.css', array(), '1.0.0', 'all');
    wp_enqueue_script('ciy_font_awesome', 'https://kit.fontawesome.com/40c199a931.js');
    wp_enqueue_script('ciy_parallax_scripts', get_template_directory_uri() . '/assets/ciy_scripts.js', array(), '1.0.0', true);
    wp_enqueue_style('custom_google_font', 'https://fonts.googleapis.com/css?family=Oswald&display=swap', false);
}
add_action('wp_enqueue_scripts', 'ciy_parallax_scripts');