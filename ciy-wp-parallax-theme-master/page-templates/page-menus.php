<?php
/**
 * @package ciy_parallax_theme
 * 
 * Template Name: Menu Layout
 * 
 * Page Template
 */

 get_header();

 if(have_posts()) :
    while(have_posts()) : the_post(); ?>
        <div class="page__thumbnail" style="background-image: rgba(0, 0, 0, 0.5);">
            <?php the_post_thumbnail(); ?>
        </div>
        <div class="page__main">
            <h2><?php the_title(); ?></h2>
            <div class="page__img">
                <p><?php the_content(); ?></p>
            </div>
        </div>
    <?php    
    endwhile;
endif;
get_footer(); 