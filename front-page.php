<?php
/**
 * @package ciy_parallax_theme
 * 
 * This is our custom home page
 */
get_header();
?>
<!-- Header Section -->
<div class="header__image" style="background-image: url(<?php echo get_theme_mod('picture_one', get_template_directory_uri() . 'img/image1.jpg'); ?>)";>
    <div class="header__main-text">
        <h1><?php echo get_theme_mod('main_picture_text', 'The CIY Tavern'); ?></h1>
    </div>
    <div class="header__small-text">
        <h2><?php echo get_theme_mod('main_picture_small_text', 'Opening Hours') ?></h2>
    </div>
    <div class="header__weekday">
        <p><?php echo get_theme_mod('weekday_opening', 'Monday - Friday'); ?></p>
    </div>
    <div class="header__weekday-opening">
        <p><?php echo get_theme_mod('weekday_opening_hours', '08:00 AM - 10:00 PM'); ?></p>
    </div>
    <div class="header__weekend">
        <p><?php echo get_theme_mod('weekend_opening', 'Weekends'); ?></p>
    </div>
    <div class="header__weekend-opening">
        <p><?php echo get_theme_mod('weekend_opening_hours', '10:00 AM - 11:00 PM'); ?></p>
    </div>
</div>

<!-- Text Section -->
<section class="section section__text">
    <p><?php echo get_theme_mod('intro_text', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'); ?></p>
</section>

<!-- Restaurant Section -->
<section class="section__restaurants" style="background-image: url(<?php echo get_theme_mod('restaurant_background_picture', get_template_directory_uri() . '/img/newyork.jpg'); ?>";>
    <h2><?php echo get_theme_mod('title', 'Our Restaurants'); ?></h2>
    <div class="restaurants">
        <div class="restaurants__one">
            <a href="<?php the_permalink(get_theme_mod('restaurant_page_one')) ?>">
                <img src="<?php echo get_theme_mod('restaurant_image_one', get_template_directory_uri() . '/img/newyork.jpg'); ?>" alt="">
                <p><?php echo get_theme_mod('restaurant_location_one', 'New York'); ?></p>
            </a>
        </div>
        <div class="restaurants__two">
            <a href="<?php the_permalink(get_theme_mod('restaurant_page_two')) ?>">
                <img src="<?php echo get_theme_mod('restaurant_image_two', get_template_directory_uri() . '/img/miami.jpg'); ?>" alt="">
                <p><?php echo get_theme_mod('restaurant_location_two', 'Miami'); ?></p>
            </a>
        </div>
        <div class="restaurants__three">
            <a href="<?php the_permalink(get_theme_mod('restaurant_page_three')) ?>">
                <img src="<?php echo get_theme_mod('restaurant_image_three', get_template_directory_uri() . '/img/seoul.jpg'); ?>" alt="">
                <p><?php echo get_theme_mod('restaurant_location_three', 'Seoul'); ?></p>
            </a>
        </div>
    </div>
</section>
<!-- News & Events -->
<section class="section section__events">
    <h2>News & Events</h2>
    <div class="news__front">
        <!-- Displaying the last three posts -->
        <?php
            $the_query = new WP_Query(array(
                'posts_per_page'    => 3
            ));

            if($the_query->have_posts()) :
                while($the_query->have_posts()) : $the_query->the_post()
        ?>
        <a href="<?php the_permalink(); ?>" class="news__boxes">
            <?php 
                the_post_thumbnail();
            ?>
            <h2><?php the_title(); ?></h2>
            <?php the_excerpt(); ?>
        </a>
        <?php 
            endwhile;
            wp_reset_postdata();
        endif;
        ?>
    </div>
    <a href="<?php the_permalink(get_page_by_title('News & Events')); ?>" class="button__posts">View More</a>
        
</section>
<section class="section section__pages">
    <div class="pages__left">
        <a href="<?php the_permalink(get_theme_mod('page_one')); ?>">
            <h2><?php echo get_theme_mod('page_one_title', 'Make a Reservation'); ?></h2>
            <p><?php echo get_theme_mod('page_one_text', 'Click here to book a table'); ?></p>
        </a>
    </div>
    <div class="pages__right">
        <a href="<?php the_permalink(get_theme_mod('page_two')); ?>">
            <h2><?php echo get_theme_mod('page_two_title', 'About Us'); ?></h2>
            <p><?php echo get_theme_mod('page_two_text', 'Learn more about our craft'); ?></p>
        </a>
    </div>
</section>
<?php
get_footer();

?>