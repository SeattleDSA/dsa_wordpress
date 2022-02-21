<?php 
/*****

/* Define the custom box */
add_action( 'add_meta_boxes', 'myplugin_add_custom_box' );

/* Do something with the data entered */
add_action( 'save_post', 'myplugin_save_postdata' );

/* Adds a box to the main column on the Post and Page edit screens */
function myplugin_add_custom_box() {
  global $post;
    if ( 'template-homepage2017.php' == get_post_meta( $post->ID, '_wp_page_template', true ) ) {
          add_meta_box( 'wp_editor_test_8_box', 'Email Signup Box', 'wp_editor_meta_box_8' );
    }
}


function wp_editor_meta_box_8( $post ) {

  // Use nonce for verification
  wp_nonce_field( plugin_basename( __FILE__ ), 'myplugin_noncename' );

  $field_value = get_post_meta( $post->ID, '_email_signup', false );
  wp_editor( $field_value[0], '_email_signup' );
}


/* When the post is saved, saves our custom data */
function myplugin_save_postdata( $post_id ) {

  // verify if this is an auto save routine. 
  // If it is our form has not been submitted, so we dont want to do anything
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
      return;

  // verify this came from the our screen and with proper authorization,
  // because save_post can be triggered at other times
  if ( ( isset ( $_POST['myplugin_noncename'] ) ) && ( ! wp_verify_nonce( $_POST['myplugin_noncename'], plugin_basename( __FILE__ ) ) ) )
      return;

  // Check permissions
  if ( ( isset ( $_POST['post_type'] ) ) && ( 'page' == $_POST['post_type'] )  ) {
    if ( ! current_user_can( 'edit_page', $post_id ) ) {
      return;
    }    
  }
  else {
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
      return;
    }
  }

  // OK, we're authenticated: we need to find and save the data
  
  if ( isset ( $_POST['_email_signup'] ) ) {
    update_post_meta( $post_id, '_email_signup', $_POST['_email_signup'] );
  }

}