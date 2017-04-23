<?php

/**
 * Enqueue scripts and styles.
 */

if ( ! defined( 'ABSPATH' ) ) exit;

function flight_report_scripts() {  
    // Register the bootsrap file
    wp_enqueue_style( 'bootstrap-v4', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
    // Register font-awesome
    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css' );

    wp_enqueue_style( 'flight-report-style', get_stylesheet_uri() );

    wp_enqueue_script( 'flight-report-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

    if ( is_page_template( 'home-template.php' ) ) {
        wp_enqueue_script( 'form-control', get_template_directory_uri() . '/js/form-control.js', array( 'jquery' ), '1.0', true);
    }

    wp_enqueue_script( 'flight-report-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

add_action( 'wp_enqueue_scripts', 'flight_report_scripts' );