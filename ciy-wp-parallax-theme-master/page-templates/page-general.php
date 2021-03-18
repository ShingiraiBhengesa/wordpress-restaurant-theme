<?php
/**
 * @package ciy_parallax_theme
 * 
 * Template Name: General Layout
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
    <?php    
    endwhile;
endif;
get_footer(); 