<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Flight_Report
 */

?>

    </div><!-- #content -->

    <footer class="blog-footer bg-dark" role="contentinfo">
        <div class="site-info">
            <a href="<?php echo esc_url(__('https://wordpress.org/', 'flight-report')); ?>"><?php printf(esc_html__('Proudly powered by %s', 'flight-report'), 'WordPress'); ?></a>
            <span class="sep"> | </span>
            <?php printf(esc_html__('Theme: %1$s by %2$s.', 'flight-report'), 'flight-report', '<a href="https://neshable.com/" rel="designer">Nesho Sabakov</a>'); ?>
        </div><!-- .site-info -->
        <div class="footer-menu">
        <?php wp_nav_menu( array(
                	'theme_location' => 'menu-footer',
                	'walker' => new FlightBoot_Walker(), 
                	'menu_class' => 'ml-auto',
                	'container' => 'ul'
                )); ?>
        </div>
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
