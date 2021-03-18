<?php
/**
 * @package ciy_parallax_theme
 * 
 * The footer of our theme
 */
?>
<footer>
    <section class="footer__navigation">
        <h2>Sitemap</h2>
        <?php  
            wp_nav_menu(array(
                'theme_location'    => 'ciy-footer'
            ));
        ?>
    </section>
    <section class="footer__social">
            <h2>Social</h2>
            <a href="<?php echo get_theme_mod('social_media_url_one', '#'); ?>"><?php echo get_theme_mod('social_media_links', '<i class="fab fa-facebook-square"></i>'); ?></a>
            <a href="<?php echo get_theme_mod('social_media_url_two', '#'); ?>"><?php echo get_theme_mod('social_media_links_two', '<i class="fab fa-twitter-square"></i>'); ?></a>
            <a href="<?php echo get_theme_mod('social_media_url_three', '#'); ?>"><?php echo get_theme_mod('social_media_links_three', '<i class="fab fa-pinterest-square"></i>'); ?></a>
            <a href="<?php echo get_theme_mod('social_media_url_four', '#'); ?>"><?php echo get_theme_mod('social_media_links_four', '<i class="fab fa-instagram"></i>'); ?></a>
    </section>
    <section class="footer__location">
            <h2>Location</h2>
            <p><?php echo get_theme_mod('location', 'My Street'); ?></p>
            <p><?php echo get_theme_mod('zip_code', '44555, Mombasa'); ?></p>
            <p><?php echo get_theme_mod('country', 'Kenya'); ?></p>
            <p><?php echo get_theme_mod('phone_number', '010- xxxx-xxxx'); ?></p>
    </section>
    <section class="footer__events">
            <h2>Special Events</h2>
            <h3><?php echo get_theme_mod('special_event', 'Christmas Day'); ?></h3>
            <p><span>Lunch:</span> <?php echo get_theme_mod('event_lunch_hours', '11AM - 1PM'); ?></p>
            <p><span>Dinner:</span> <?php echo get_theme_mod('event_dinner_hours', 'Closed'); ?></p>
    </section>
    <section class="footer__booking">
            <h2>Make a Reservation</h2>
            <a class="footer__button" href="<?php the_permalink(get_theme_mod('reservations')); ?>"><?php echo get_theme_mod('reservation_button', 'Make a Reservation'); ?></a>
    </section>
</footer>
<?php wp_footer(); ?>
</div>
 </body>
</html>