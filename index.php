<?php
/**
 * @package ciy_parallax_theme
 * 
 * index page
 */
if(have_posts()) :
    while(have_posts()) : the_post();
        the_post_thumbnail();
        the_title();
        the_category();
        the_tags();
        the_content();
    endwhile;
endif;    