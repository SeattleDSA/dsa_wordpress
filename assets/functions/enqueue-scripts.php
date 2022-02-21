<?php

function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way
    
    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/dist/what-input.min.js', array(), '', true );
    
    // Adding Foundation scripts file in the footer
    // wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/vendor/foundation-sites/dist/js/foundation.min.js', array( 'jquery' ), '6.6.1', true ); ** Older Method **

    wp_register_script('foundationJS', 'https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/js/foundation.min.js', array( 'jquery' ), true ); // Foundation JS CDN
    wp_enqueue_script('foundationJS');
    wp_script_add_data( 'foundationJS', array( 'crossorigin' ) , array( 'anonymous' ) );
    
    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
	
    wp_register_style('googleFonts-css', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap'); // Inter
    wp_enqueue_style('googleFonts-css');
    wp_script_add_data( 'googleFonts-css', array( 'crossorigin' ) , array( 'anonymous' ) );

    // Stylesheets
    // wp_enqueue_style( 'foundation-css', get_template_directory_uri() . '/vendor/foundation-sites/dist/css/foundation.min.css', array(), '6.6.3', 'all' ); *** Old CSS Method

    wp_register_style('foundationCSS', 'https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css', array(), 'all' ); // Inter
    wp_enqueue_style('foundationCSS');
    wp_script_add_data( 'foundationCSS', array( 'crossorigin' ) , array( 'anonymous' ) );

    wp_enqueue_style( 'justice-icons', get_template_directory_uri() . '/vendor/justice-icons/justice-icons.css', array(), '', 'all' );
    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.min.css', array(), '1.133', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
add_action('wp_enqueue_scripts', 'site_scripts', 999);
