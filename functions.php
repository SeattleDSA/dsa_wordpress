<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php'); 

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php'); 

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php'); 

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php'); 

// Register Breadcrumbs
require_once(get_template_directory().'/assets/functions/breadcrumbs.php'); 

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php'); 

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php'); 

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Custom template tags for this theme.
require_once(get_template_directory().'/assets/functions/template-tags.php');

// Adds Custom Metaboxes for complex homepage layouts
require_once(get_template_directory().'/assets/functions/dsa-metaboxes.php');

/*
 * If post is private, redirects user to login screen then to the private post/page.
*/
add_action( 'wp', 'redirect_private_page_to_login' );
function redirect_private_page_to_login(){
    $queried_object = get_queried_object();
    if (
        isset( $queried_object->post_status ) &&
        'private' === $queried_object->post_status &&
        ! is_user_logged_in()
    ) {
        wp_safe_redirect( wp_login_url( get_permalink( $queried_object->ID ) ) );
        exit;
    }
}

// Allow more than 30 events to be exported
// https://theeventscalendar.com/knowledgebase/k/changing-the-number-of-events-in-ical-export/
add_filter( 'tribe_ical_feed_posts_per_page', function() { return 100; } );


/*****

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php'); 

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php'); 

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php'); 

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php'); 

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php'); 
*/
