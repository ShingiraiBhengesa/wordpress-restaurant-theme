<?php
/**
 * @package ciy_parallax_theme
 * 
 * Display a single post
 */

get_header();
if(have_posts()) :
    while(have_posts()) : the_post(); ?>
    <div class="page__thumbnail">
        <?php the_post_thumbnail(); ?>
    </div>
    <div class="page__main">
        <h2><?php the_title(); ?></h2>
        <p class="page__meta"><?php the_category(); ?></p>
        <p class="page__meta"><?php the_tags();; ?></p>
        <p><?php the_content(); ?></p>
    </div>    
    <?php    
    endwhile;
endif;    
get_footer();