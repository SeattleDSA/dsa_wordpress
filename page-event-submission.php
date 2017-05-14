<?php /* Template Name: EventSubmission */ ?>

<?php

if(isset($_REQUEST['event-title'])) {
 
 
$ipaddr = $_SERVER['REMOTE_ADDR'];
$email = trim($_REQUEST['email']);
$city = trim($_REQUEST['city']);
$state = trim($_REQUEST['state']);
 
wp_insert_post(array(
    'post_author'=>2,
    'post_status'=>'publish',
    'post_title'=>'Vote for ' . $city . ', ' . $state,
    'post_type'=>'city',
    'post_content'=>'Voted by ' . $email . ' IP address: ' . $ipaddr,
    'comment_status'=>'closed'
    )
);
 
/* show thank you content */
 
get_header();
?><h1>Thanks!</h1><?php
echo get_field('thank_you', 'option');
?><p><a href="<?php bloginfo('url'); ?>/schedule">Back to Schedule</a></p><?php
 
} else {
 
/* got here without filling out the form / regular page view */
 
get_header();
 
/* default content template -- this just gets the page content so you don't have to manually include it here */
include('inc/content.php');
 
 
$args = array(
    'post_type' => 'city',
    'orderby' => 'menu_order',
    'order' => 'ASC',
    'posts_per_page' => -1
);
$cities = new WP_Query($args);
if ($cities->have_posts()) {
    while ($cities->have_posts() ) {
        $cities->the_post();
        $citylist[] = str_replace('Vote for ', '', get_the_title()); // create array of just city names
    }
}
 
$howmanycities = wp_count_posts('city');
$howmanycities = $howmanycities->publish;
 
$cityvals = array_count_values($citylist); /* create new array from the city list and count repeats */
arsort($cityvals); /* re-sort array by values of # of repeat submissions */
 
wp_reset_postdata();
?>
 
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  jQuery(function() {
    var availableCities = [
<?php
/* generate autocomplete list of submitted cities to discourage typos */
foreach($cityvals as $cityname => $citycount) {
    if (false !== ($pos = strpos($cityname, ','))) {
        echo "\"" . substr($cityname, 0, strpos($cityname, ',')) . "\",\n";
    }
}
?>
    ];
    jQuery('#city').autocomplete({
      source: availableCities
    });
  });
  </script>
 
<h2><?php echo get_field('request_header', 'option'); ?></h2>
<?php echo get_field('request_text', 'option'); ?>
 
<form class="signup" action="<?php echo get_the_permalink(); ?>" method="post" enctype="application/x-www-form-urlencoded">
   
    <input id="email" name="email" type="email" placeholder="Email Address" value="" required>
   
    <input id="city" name="city" type="text" placeholder="City" value="" required>
   
    <button name="submit" type="submit" id="submit" class="" value='submit'>Request a Show</button>
</form>
 
<hr>
 
<?php } ?>
 
 
 
<?php get_footer(); ?>
