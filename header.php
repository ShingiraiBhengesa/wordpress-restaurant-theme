<?php
/**
 * @package ciy_parallax_theme
 * 
 * The header for our theme
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body>
    
<nav class="navbar">
    <span class="navbar__slider">
        <a href="#" onclick="openSideMenu()">
            <svg width="30" height="30">
                <path d="M0,5 30,5" stroke="#fff" stroke-width="5"></path>
                <path d="M0,14 30,14" stroke="#fff" stroke-width="5"></path>
                <path d="M0,23 30,23" stroke="#fff" stroke-width="5"></path>
            </svg>    
        </a>
    </span>
    <div class="navbar__nav">
        <div class="navbar__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_theme_mod('site_logo', get_template_directory_uri() . '/img/image1.jpg'); ?>"></a>
        </div>
        <?php 
            wp_nav_menu(array(
                'theme_location'    => 'ciy-navbar'
            ));
        ?>
    </div>
    <div class="navbar__logo_mob">
        <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo get_theme_mod('site_logo', get_template_directory_uri() . '/img/image1.jpg'); ?>"></a>
    </div>
</nav>
<div id="navbar__side-menu" class="side__nav">
    <a href="#" class="btn__close" onclick="closeSideMenu()">&times;</a>
    <?php 
        wp_nav_menu(array(
            'theme_location'    => 'ciy-navbar'
        ));
    ?>
</div>
<div id="main">