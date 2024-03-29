<?php

function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/dist/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/vendor/foundation-sites/dist/js/foundation.min.js', array( 'jquery' ), '6.6.1', true );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

    // Stylesheets
    wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/css/foundation.min.css', array(), '6.7.5', 'all' ); 

    wp_enqueue_style( 'justice-icons', get_template_directory_uri() . '/vendor/justice-icons/justice-icons.css', array(), '', 'all' );
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.154', 'all' );

    wp_enqueue_script( 'jquery' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);