<?php
/**
 * @package ciy_parallax_theme
 * 
 * The customizer for the front-page.php
 */

// Front-page.php customization
function parallax_customize_register($wp_customize){
    // Picture One
    $wp_customize->add_section('parallax_scroll', array(
        'title'         => __('Parallax Scroll', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Setup and manage your images on your homepage')),
        'priority'      => 220
    ));

    $wp_customize->add_setting('picture_one', array(
        'default'       => get_template_directory_uri() . '/img/image1.jpg',
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'picture_one', array(
        'label'         => __('Picture One', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'setting'       => 'picture_one',
        'priority'      => 1
    )));

    // Picture one large text
    $wp_customize->add_setting('main_picture_text', array(
        'default'       => _x('The CIY Tavern', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('main_picture_text', array(
        'label'         => __('Main Header', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'priority'      => 2
    ));

    // Picture one smaller text
    $wp_customize->add_setting('main_picture_small_text', array(
        'default'       => _x('Opening Hours', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('main_picture_small_text', array(
        'label'         => __('Small Header', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'priority'      => 3
    ));

    // Opening hours weekdays
    $wp_customize->add_setting('weekday_opening', array(
        'default'       => _x('Monday - Friday', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekday_opening', array(
        'label'         => __('Weekday Opening Hours', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'priority'      => 4
    ));

    $wp_customize->add_setting('weekday_opening_hours', array(
        'default'       => _x('08:00 AM - 10:00 PM', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekday_opening_hours', array(
        'label'         => __('Weekday Hours', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'priority'      => 5
    ));

    // Opening hours weekends
    $wp_customize->add_setting('weekend_opening', array(
        'default'       => _x('Weekends', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekend_opening', array(
        'label'         => __('Weekend Opening Hours', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'priority'      => 6
    ));

    $wp_customize->add_setting('weekend_opening_hours', array(
        'default'       => _x('10:00 AM - 11:00 PM', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekend_opening_hours', array(
        'label'         => __('Weekend Hours', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'priority'      => 7
    ));

    // Text Section
    $wp_customize->add_setting('intro_text', array(
        'default'       => _x('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('intro_text', array(
        'label'         => __('Introduction Text', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Write something cool!')),
        'section'       => 'parallax_scroll',
        'type'          => 'textarea',
        'priority'      => 8
    ));

    // Restaurant Section
    // Background Picture
    $wp_customize->add_setting('restaurant_background_picture', array(
        'default'       => get_template_directory_uri() . '/img/newyork.jpg',
        'type'          => 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'restaurant_background_picture', array(
        'label'         => __('Pick the new background picture', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'settings'      => 'restaurant_background_picture',
        'priority'      => 9
    )));

    // Title
    $wp_customize->add_setting('title', array(
        'default'       => _x('Our Restaurants', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('title', array(
        'label'         => __('Put the title of the section here.', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Put a good title here!')),
        'section'       => 'parallax_scroll',
        'priority'      => 10
    ));

    // Restaurant One
    $wp_customize->add_setting('restaurant_image_one', array(
        'default'       => get_template_directory_uri() . '/img/newyork.jpg',
        'type'          => 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'restaurant_image_one', array(
        'label'         => __('Restaurant Image One', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'settings'      => 'restaurant_image_one',
        'priority'      => 11
    )));

    $wp_customize->add_setting('restaurant_location_one', array(
        'default'       => _x('New York', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('restaurant_location_one', array(
        'label'         => __('Location Name', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'setting'       => 'restaurant_location_one',
        'priority'      => 12
    ));

    $wp_customize->add_setting('restaurant_page_one', array(
        'default'       => '',
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('restaurant_page_one', array(
        'description'   => sprintf(__('Choose a page')),
        'section'       => 'parallax_scroll',
        'type'          => 'dropdown-pages',
        'priority'      => 13
    ));

    // Restaurant Two
    $wp_customize->add_setting('restaurant_image_two', array(
        'default'       => get_template_directory_uri() . '/img/miami.jpg',
        'type'          => 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'restaurant_image_two', array(
        'label'         => __('Restaurant Image Two', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'settings'      => 'restaurant_image_two',
        'priority'      => 14
    )));

    $wp_customize->add_setting('restaurant_location_two', array(
        'default'       => _x('Miami', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('restaurant_location_two', array(
        'label'         => __('Location Name', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'setting'       => 'restaurant_location_two',
        'priority'      => 15
    ));

    $wp_customize->add_setting('restaurant_page_two', array(
        'default'       => '',
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('restaurant_page_two', array(
        'description'   => sprintf(__('Choose a page')),
        'section'       => 'parallax_scroll',
        'type'          => 'dropdown-pages',
        'priority'      => 16
    ));

    // Restaurant Three
    $wp_customize->add_setting('restaurant_image_three', array(
        'default'       => get_template_directory_uri() . '/img/seoul.jpg',
        'type'          => 'theme_mod'
    ));
    
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'restaurant_image_three', array(
        'label'         => __('Restaurant Image Three', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'settings'      => 'restaurant_image_three',
        'priority'      => 17
    )));

    $wp_customize->add_setting('restaurant_location_three', array(
        'default'       => _x('Seoul', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('restaurant_location_three', array(
        'label'         => __('Location Name', 'ciy_parallax_theme'),
        'section'       => 'parallax_scroll',
        'setting'       => 'restaurant_location_three',
        'priority'      => 18
    ));

    $wp_customize->add_setting('restaurant_page_three', array(
        'default'       => '',
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('restaurant_page_three', array(
        'description'   => sprintf(__('Choose a page')),
        'section'       => 'parallax_scroll',
        'type'          => 'dropdown-pages',
        'priority'      => 19
    ));

    // Pages Section
    $wp_customize->add_section('pages_section', array(
        'title'         => __('Pages Section', 'ciy_parallax_theme'),
        'description'   => __('Set the pages you want to link to.'),
        'priority'      => 230
    ));

    $wp_customize->add_setting('page_one_title', array(
        'default'       => _x('Make a Reservation', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('page_one_title', array(
        'label'         => __('Set The First Page', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Set a header')),
        'section'       => 'pages_section',
        'priority'      => 1
    ));

    $wp_customize->add_setting('page_one_text', array(
        'default'       => _x('Click here to book a table', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('page_one_text', array(
        'description'   => sprintf(__('A short description of what this is.')),
        'section'       => 'pages_section',
        'priority'      => 2
    ));
    
    $wp_customize->add_setting('page_one', array(
        'default'       => (''),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('page_one', array(
        'description'   => sprintf(__('Choose a page')),
        'section'       => 'pages_section',
        'type'          => 'dropdown-pages',
        'priority'      => 3
    ));

    $wp_customize->add_setting('page_two_title', array(
        'default'       => _x('About Us', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('page_two_title', array(
        'label'         => __('Set The Second Page', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Set a header')),
        'section'       => 'pages_section',
        'priority'      => 4
    ));

    $wp_customize->add_setting('page_two_text', array(
        'default'       => _x('Learn more about our craft', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('page_two_text', array(
        'description'   => sprintf(__('A short description of what this is.')),
        'section'       => 'pages_section',
        'priority'      => 5
    ));
    
    $wp_customize->add_setting('page_two', array(
        'default'       => (''),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('page_two', array(
        'description'   => sprintf(__('Choose a page')),
        'section'       => 'pages_section',
        'type'          => 'dropdown-pages',
        'priority'      => 6
    ));

    // Logo
    $wp_customize->add_section('logo_section', array(
        'title'         => __('Logo', 'ciy_parallax_theme'),
        'description'   => __('Set the logo for your site.'),
        'priority'      => 240
    ));

    $wp_customize->add_setting('site_logo', array(
        'default'       => get_template_directory_uri() . '/img/image1.jpg',
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo', array(
        'label'         => __('Your Logo', 'ciy_parallax_theme'),
        'section'       => 'logo_section',
        'setting'       => 'site_logo',
        'priority'      => 1
    )));

    // Footer
    $wp_customize->add_section('footer', array(
        'title'         => __('Footer', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Setup your footer')),
        'priority'      => 250
    ));

    // Social Media Links
    $wp_customize->add_setting('social_media_links', array(
        'default'       => _x('<i class="fab fa-facebook-square"></i>', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_media_links', array(
        'label'         => __('Social Media Links', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Pick a social media icon')),
        'section'       => 'footer',
        'priority'      => 1,
        'type'          => 'select',
        'choices'       => array(
            'default'   => '<i class="fab fa-facebook-square"></i>',
            '<i class="fab fa-facebook-square"></i>'    => 'Facebook',
            '<i class="fab fa-twitter-square"></i>'     => 'Twitter',
            '<i class="fab fa-pinterest-square"></i>'   => 'Pinterest',
            '<i class="fab fa-instagram"></i>'          => 'Instagram'
        )    
    )));

    $wp_customize->add_setting('social_media_url_one', array(
        'default'       => _x('http://www.facebook.com/user', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('social_media_url_one', array(
        'description'   => sprintf(__('Your social media url.', 'ciy_parallax_theme' )),
        'section'       => 'footer',
        'priority'      => 2
    ));

    $wp_customize->add_setting('social_media_links_two', array(
        'default'       => _x('<i class="fab fa-twitter-square"></i>', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_media_links_two', array(
        'label'         => __('Social Media Links', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Pick a social media icon')),
        'section'       => 'footer',
        'priority'      => 3,
        'type'          => 'select',
        'choices'       => array(
            'default'   => '<i class="fab fa-twitter-square"></i>',
            '<i class="fab fa-facebook-square"></i>'    => 'Facebook',
            '<i class="fab fa-twitter-square"></i>'     => 'Twitter',
            '<i class="fab fa-pinterest-square"></i>'   => 'Pinterest',
            '<i class="fab fa-instagram"></i>'          => 'Instagram'
        )    
    )));

    $wp_customize->add_setting('social_media_url_two', array(
        'default'       => _x('http://www.twitter.com/user', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('social_media_url_two', array(
        'description'   => sprintf(__('Your social media url.', 'ciy_parallax_theme' )),
        'section'       => 'footer',
        'priority'      => 4
    ));

    $wp_customize->add_setting('social_media_links_three', array(
        'default'       => _x('<i class="fab fa-pinterest-square"></i>', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_media_links_three', array(
        'label'         => __('Social Media Links', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Pick a social media icon')),
        'section'       => 'footer',
        'priority'      => 5,
        'type'          => 'select',
        'choices'       => array(
            'default'   => '<i class="fab fa-pinterest-square"></i>',
            '<i class="fab fa-facebook-square"></i>'    => 'Facebook',
            '<i class="fab fa-twitter-square"></i>'     => 'Twitter',
            '<i class="fab fa-pinterest-square"></i>'   => 'Pinterest',
            '<i class="fab fa-instagram"></i>'          => 'Instagram'
        )    
    )));

    $wp_customize->add_setting('social_media_url_three', array(
        'default'       => _x('http://www.pinterest.com/user', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('social_media_url_three', array(
        'description'   => sprintf(__('Your social media url.', 'ciy_parallax_theme' )),
        'section'       => 'footer',
        'priority'      => 6
    ));

    $wp_customize->add_setting('social_media_links_four', array(
        'default'       => _x('<i class="fab fa-instagram"></i>', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'social_media_links_four', array(
        'label'         => __('Social Media Links', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Pick a social media icon')),
        'section'       => 'footer',
        'priority'      => 7,
        'type'          => 'select',
        'choices'       => array(
            'default'   => '<i class="fab fa-instagram"></i>',
            '<i class="fab fa-facebook-square"></i>'    => 'Facebook',
            '<i class="fab fa-twitter-square"></i>'     => 'Twitter',
            '<i class="fab fa-pinterest-square"></i>'   => 'Pinterest',
            '<i class="fab fa-instagram"></i>'          => 'Instagram'
        )    
    )));

    $wp_customize->add_setting('social_media_url_four', array(
        'default'       => _x('http://www.instagram.com/user', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('social_media_url_four', array(
        'description'   => sprintf(__('Your social media url.', 'ciy_parallax_theme' )),
        'section'       => 'footer',
        'priority'      => 8
    ));

    // Location
    $wp_customize->add_setting('location', array(
        'default'       => _x('My Street', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('location', array(
        'label'         => __('Location', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Street Name')),
        'section'       => 'footer',
        'priority'      => 9
    ));

    $wp_customize->add_setting('zip_code', array(
        'default'       => _x('44555, Mombasa', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('zip_code', array(
        'description'   => sprintf(__('The Zip Code')),
        'section'       => 'footer',
        'priority'      => 10
    ));

    $wp_customize->add_setting('country', array(
        'default'       => _x('Kenya', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('country', array(
        'description'   => sprintf(__('Your Country')),
        'section'       => 'footer',
        'priority'      => 11
    ));

    $wp_customize->add_setting('phone_number', array(
        'default'       => _x('010-xxxx-xxxx', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('phone_number', array(
        'description'   => sprintf(__('Put your phone number here!')),
        'section'       => 'footer',
        'priority'      => 12
    ));

    // Special Events
    $wp_customize->add_setting('special_event', array(
        'default'       => _x('Christmas Day', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('special_event', array(
        'label'         => __('Special Events', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Put your special event here!')),
        'section'       => 'footer',
        'priority'      => 13
    ));

    $wp_customize->add_setting('event_lunch_hours', array(
        'default'       => _x('11AM - 1PM', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('event_lunch_hours', array(
        'description'   => sprintf(__('Put your lunch hours here!')),
        'section'       => 'footer',
        'priority'      => 14
    ));

    $wp_customize->add_setting('event_dinner_hours', array(
        'default'       => _x('Closed', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('event_dinner_hours', array(
        'description'   => sprintf(__('Put your dinner hours here!')),
        'section'       => 'footer',
        'priority'      => 15
    ));

    // Make a reservation footer page
    $wp_customize->add_setting('reservations', array(
        'default'       => '',
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('reservations', array(
        'label'         => __('Link to Reservations', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Choose a page')),
        'section'       => 'footer',
        'type'          => 'dropdown-pages',
        'priority'      => 16
    ));

    $wp_customize->add_setting('reservation_button', array(
        'default'       => _x('Make a Reservation', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('reservation_button', array(
        'description'   => sprintf(__('Create a Reservations Button')),
        'section'       => 'footer',
        'priority'      => 17
    ));
}
add_action('customize_register', 'parallax_customize_register');

