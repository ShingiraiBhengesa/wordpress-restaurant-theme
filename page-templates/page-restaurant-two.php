<?php
/**
 * @package ciy_parallax_theme
 * 
 * Template Name: Restaurant Two Layout
 * 
 * Page Template
 */

 get_header();

 if(have_posts()) :
    while(have_posts()) : the_post(); ?>
        <div class="page__thumbnail">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="page__main">
            <h2><?php the_title(); ?></h2>
            <p><?php the_content(); ?></p>
        </div>
        <section class="booking">
            <a href="<?php the_permalink(get_theme_mod('book_button')); ?>" class="button__posts"><?php echo get_theme_mod('book_button_text', 'Book Now'); ?></a>
        </section>
        <section class="section section__events">
            <h2>News & Events</h2>
            <div class="news__front">
                <?php
                     $the_query = new WP_Query(array(
                    'posts_per_page'    => 3
                ));

                if($the_query->have_posts()) :
                    while($the_query->have_posts()) : $the_query->the_post();
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
            <a href="<?php the_permalink('/'); ?>" class="button__posts">View More</a>
        </section>
        <section class="section__contact">
            <h2>Contact & Opening Hours</h2>
            <span><?php echo get_theme_mod('restaurant_name', 'The CIY Tavern'); ?></span>
            <p><?php echo get_theme_mod('street_name', 'Miami Street 25'); ?></p>
            <p><?php echo get_theme_mod('zip_code', '23456'); ?></p>
            <p><?php echo get_theme_mod('city_name', 'Miami'); ?></p>
            <p><?php echo get_theme_mod('phone_number', '010-2345-6789'); ?></p>
            <p><?php echo get_theme_mod('email_address', 'the_ciy_tavern@ciy.com'); ?></p>
            <span><?php echo get_theme_mod('weekday_opening', 'Monday - Friday'); ?></span>
            <p><?php echo get_theme_mod('weekday_opening_hours', '08:00AM - 10:00PM'); ?></p>
            <span><?php echo get_theme_mod('weekend_opening', 'Weekends'); ?></span>
            <p><?php echo get_theme_mod('weekend_opening_hours', '10:00AM - 11:00PM'); ?></p>
        </section>
    <?php    
    endwhile;
endif;
get_footer(); 