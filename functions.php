<?php
/**
 * Flight Report functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Flight_Report
 */

if (! function_exists('flight_report_setup')) :
    /**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
    function flight_report_setup() {

         /*
          * Make theme available for translation.
          * Translations can be filed in the /languages/ directory.
          * If you're building a theme based on Flight Report, use a find and replace
          * to change 'flight-report' to the name of your theme in all the template files.
          */
         load_theme_textdomain( 'flight-report', get_template_directory() . '/languages' );

         // Add default posts and comments RSS feed links to head.
    
         add_theme_support( 'automatic-feed-links' );

         // Add custom logo

         add_theme_support(
             'custom-logo',
             array(
             'height'      => 100,
             'width'       => 400,
             'flex-height' => true,
             'flex-width'  => true,
             'header-text' => array( 'site-title', 'site-description' )
             )
         );



         /*
          * Let WordPress manage the document title.
          * By adding theme support, we declare that this theme does not use a
          * hard-coded <title> tag in the document head, and expect WordPress to
          * provide it for us.
          */

         add_theme_support( 'title-tag' );

         /*
          * Enable support for Post Thumbnails on posts and pages.
          *
          * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
          */

         add_theme_support( 'post-thumbnails' );

         // This theme uses wp_nav_menu() in one location.

         register_nav_menus(
             array(
             'menu-primary' => esc_html__( 'Primary', 'flight-report' ),
             'menu-footer' => esc_html__( 'Footer', 'flight-report' )
             )
         );

         /*
          * Switch default core markup for search form, comment form, and comments
          * to output valid HTML5.
          */
         add_theme_support(
             'html5',
             array(
             'search-form',
             'comment-form',
             'comment-list',
             'gallery',
             'caption',
             )
         );

         // Set up the WordPress core custom background feature.
         add_theme_support(
             'custom-background',
             apply_filters(
                 'flight_report_custom_background_args',
                 array(
                 'default-color' => 'ffffff',
                 'default-image' => '',
                 )
             )
         );

         // Add theme support for selective refresh for widgets.
         add_theme_support( 'customize-selective-refresh-widgets' );
    }
endif;

add_action( 'after_setup_theme', 'flight_report_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

function flight_report_content_width() {
    $GLOBALS[ 'content_width' ] = apply_filters( 'flight_report_content_width', 640 );
}

add_action( 'after_setup_theme', 'flight_report_content_width', 0 );

/**
 * Register custom menu styles through WP Walker
 */

require get_template_directory() . '/inc/wp-bootstrap-navwalker.php';

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

require get_template_directory() . '/inc/widgets.php';


/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/wp-enqueue.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
