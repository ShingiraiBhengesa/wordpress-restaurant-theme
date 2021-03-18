<?php
/**
 * @package ciy_parallax_theme
 * 
 * Template Name: Blog Page Layout
 * 
 * Blog Page Template
 */

get_header(); ?>
<section class="section section__events">
    <h2>News & Events</h2>
    <div class="news__front">
        
        <?php
            $the_query = get_query_var('paged');
            $the_query = new WP_Query(array(
                'posts_per_page'    => 4,
                'paged'             => $the_query
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
    <div class="section__pagination">
        <?php 
            echo paginate_links(array(
                'total' => $the_query->max_num_pages
            ));
        ?>
    </div>
</section>
<?php
get_footer();