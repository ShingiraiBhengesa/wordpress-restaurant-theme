<?php
/**
 * @package ciy_parallax_theme
 * 
 * Pages customizer functions
 */

// Restaurants
function pages_customize_register($wp_customize){
    $wp_customize->add_section('restaurant_pages', array(
        'title'         => __('Restaurant Pages', 'ciy_parallax_theme'),
        'description'   => sprintf(__('Setup your restaurant pages here')),
        'priority'      => 239
    ));

    // Restaurant 1
    // Book Button
    $wp_customize->add_setting('book_button', array(
        'default'       => '',
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('book_button', array(
        'label'         => __('Reservation Button'),
        'description'   => __('Choose a page', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'type'          => 'dropdown-pages',
        'priority'      => 1
    ));

    $wp_customize->add_setting('book_button_text', array(
        'default'       => _x('Book Now', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('book_button_text', array(
        'label'         => __('Text on Button', 'ciy_parallax_theme'),
        'description'   => __('Write a text', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 2
    ));

    // Contact Details
    $wp_customize->add_setting('restaurant_name', array(
        'default'       => _x('The CIY Tavern', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('restaurant_name', array(
        'label'         => __('Contact Details, Restaurant One', 'ciy_parallax_theme'),
        'description'   => __('Name of the Restaurant', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 3
    ));

    $wp_customize->add_setting('street_name', array(
        'default'       => _x('New York Street 25', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('street_name', array(
        'description'   => __('Street Address', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 4
    ));

    $wp_customize->add_setting('zip_code', array(
        'default'       => _x('23456', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('zip_code', array(
        'description'   => __('Zip Code', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 5
    ));

    $wp_customize->add_setting('city_name', array(
        'default'       => _x('New York', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('city_name', array(
        'description'   => __('City Name', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 6
    ));

    $wp_customize->add_setting('phone_number', array(
        'default'       => _x('010-2345-6789', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('phone_number', array(
        'description'   => __('Phone Number', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 7
    ));

    $wp_customize->add_setting('email_address', array(
        'default'       => _x('the_ciy_tavern@ciy.com', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('email_address', array(
        'description'   => __('Email Address', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 8
    ));

    // Opening Hours
    $wp_customize->add_setting('weekday_opening', array(
        'default'       => _x('Monday - Friday', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekday_opening', array(
        'label'         => __('Opening Hours Restaurant One'),
        'description'   => __('Input your main opening days here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 9
    ));

    $wp_customize->add_setting('weekday_opening_hours', array(
        'default'       => _x('08:00AM - 10:00PM', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekday_opening_hours', array(
        'description'   => __('Input your main opening hours here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 10
    ));

    $wp_customize->add_setting('weekend_opening', array(
        'default'       => _x('Weekends', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekend_opening', array(
        'description'   => __('Input your weekend opening days here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 11
    ));

    $wp_customize->add_setting('weekend_opening_hours', array(
        'default'       => _x('10:00AM - 11:00PM', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekend_opening_hours', array(
        'description'   => __('Input your weekend opening hours here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 12
    ));

    // Restaurant 2
    // Book Button
    $wp_customize->add_setting('book_button_two', array(
        'default'       => '',
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('book_button_two', array(
        'label'         => __('Restaurant Two'),
        'description'   => __('Choose a page', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'type'          => 'dropdown-pages',
        'priority'      => 13
    ));

    $wp_customize->add_setting('book_button_text_two', array(
        'default'       => _x('Book Now', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('book_button_text_two', array(
        'label'         => __('Text on Button', 'ciy_parallax_theme'),
        'description'   => __('Write a text', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 14
    ));

    // Contact Details
    $wp_customize->add_setting('restaurant_name_two', array(
        'default'       => _x('The CIY Tavern', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('restaurant_name_two', array(
        'label'         => __('Contact Details, Restaurant Two', 'ciy_parallax_theme'),
        'description'   => __('Name of the Restaurant', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 15
    ));

    $wp_customize->add_setting('street_name_two', array(
        'default'       => _x('Miami Street 25', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('street_name_two', array(
        'description'   => __('Street Address', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 16
    ));

    $wp_customize->add_setting('zip_code_two', array(
        'default'       => _x('23456', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('zip_code_two', array(
        'description'   => __('Zip Code', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 17
    ));

    $wp_customize->add_setting('city_name_two', array(
        'default'       => _x('Miami', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('city_name_two', array(
        'description'   => __('City Name', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 18
    ));

    $wp_customize->add_setting('phone_number_two', array(
        'default'       => _x('010-2345-6789', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('phone_number_two', array(
        'description'   => __('Phone Number', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 19
    ));

    $wp_customize->add_setting('email_address_two', array(
        'default'       => _x('the_ciy_tavern@ciy.com', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('email_address_two', array(
        'description'   => __('Email Address', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 20
    ));

    // Opening Hours
    $wp_customize->add_setting('weekday_opening_two', array(
        'default'       => _x('Monday - Friday', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekday_opening_two', array(
        'label'         => __('Opening Hours Restaurant Two'),
        'description'   => __('Input your main opening days here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 21
    ));

    $wp_customize->add_setting('weekday_opening_hours_two', array(
        'default'       => _x('08:00AM - 10:00PM', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekday_opening_hours_two', array(
        'description'   => __('Input your main opening hours here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 22
    ));

    $wp_customize->add_setting('weekend_opening_two', array(
        'default'       => _x('Weekends', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekend_opening_two', array(
        'description'   => __('Input your weekend opening days here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 23
    ));

    $wp_customize->add_setting('weekend_opening_hours_two', array(
        'default'       => _x('10:00AM - 11:00PM', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekend_opening_hours_two', array(
        'description'   => __('Input your weekend opening hours here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 24
    ));

    // Restaurant 3
    // Book Button
    $wp_customize->add_setting('book_button_three', array(
        'default'       => '',
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('book_button_three', array(
        'label'         => __('Restaurant Three'),
        'description'   => __('Choose a page', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'type'          => 'dropdown-pages',
        'priority'      => 25
    ));

    $wp_customize->add_setting('book_button_text_three', array(
        'default'       => _x('Book Now', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('book_button_text_three', array(
        'label'         => __('Text on Button', 'ciy_parallax_theme'),
        'description'   => __('Write a text', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 26
    ));

    // Contact Details
    $wp_customize->add_setting('restaurant_name_three', array(
        'default'       => _x('The CIY Tavern', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('restaurant_name_three', array(
        'label'         => __('Contact Details, Restaurant Three', 'ciy_parallax_theme'),
        'description'   => __('Name of the Restaurant', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 27
    ));

    $wp_customize->add_setting('street_name_three', array(
        'default'       => _x('Seoul Street 25', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('street_name_three', array(
        'description'   => __('Street Address', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 28
    ));

    $wp_customize->add_setting('zip_code_three', array(
        'default'       => _x('23456', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('zip_code_three', array(
        'description'   => __('Zip Code', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 29
    ));

    $wp_customize->add_setting('city_name_three', array(
        'default'       => _x('Seoul', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('city_name_three', array(
        'description'   => __('City Name', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 30
    ));

    $wp_customize->add_setting('phone_number_three', array(
        'default'       => _x('010-2345-6789', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('phone_number_three', array(
        'description'   => __('Phone Number', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 31
    ));

    $wp_customize->add_setting('email_address_three', array(
        'default'       => _x('the_ciy_tavern@ciy.com', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('email_address_three', array(
        'description'   => __('Email Address', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 32
    ));

    // Opening Hours
    $wp_customize->add_setting('weekday_opening_three', array(
        'default'       => _x('Monday - Friday', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekday_opening_three', array(
        'label'         => __('Opening Hours Restaurant Three'),
        'description'   => __('Input your main opening days here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 33
    ));

    $wp_customize->add_setting('weekday_opening_hours_three', array(
        'default'       => _x('08:00AM - 10:00PM', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekday_opening_hours_three', array(
        'description'   => __('Input your main opening hours here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 34
    ));

    $wp_customize->add_setting('weekend_opening_three', array(
        'default'       => _x('Weekends', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekend_opening_three', array(
        'description'   => __('Input your weekend opening days here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 35
    ));

    $wp_customize->add_setting('weekend_opening_hours_three', array(
        'default'       => _x('10:00AM - 11:00PM', 'ciy_parallax_theme'),
        'type'          => 'theme_mod'
    ));

    $wp_customize->add_control('weekend_opening_hours_three', array(
        'description'   => __('Input your weekend opening hours here!', 'ciy_parallax_theme'),
        'section'       => 'restaurant_pages',
        'priority'      => 36
    ));
}
add_action('customize_register', 'pages_customize_register');