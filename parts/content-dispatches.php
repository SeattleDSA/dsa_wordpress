
<?php
/*
Part:	Dispatches Feed
Use:	Grid-container with two most recent posts
*/
?>
<div class="dsa-home-row-4-edit text-center grid-container">
	<div class="grid-x grid-margin-x grid-margin-y text-center txt-white ">
		<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/white/typewriter.svg" loading="lazy" class="cell large-2 large-offset-5 medium-4 medium-offset-4 small-6 small-offset-3" /><br />
		<h2 class="dsa-section-title txt-DSAwhite cell">Dispatches</h2>
	</div>
	<div class=""> 
		<?php
			$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

			/* Here, we're making sure that the number fetched is reasonable. In case it's higher than 200 or lower than 2, we're just resetting it to the default value of 15. */
			if($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 2;

			$my_query = new WP_Query('post_type=post&nopaging=1');
			if($my_query->have_posts()) {
			  echo '<div class="archives-latest-section grid-x grid-margin-x">';
			  $counter = 1;
			  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
			    $my_query->the_post(); 
			    ?>
			    <div class="cell card large-6 medium-6 small-12">
			    	<div class="cell large-12 medium-12 small-12 card-gray bdr-stripe-black">
				    	<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3><br/>
				    	<strong><?php the_time('F j, Y') ?></strong>
				    </div>
				</div>
			    <?php
			    $counter++;
			  }
			  echo '</div>';
			  wp_reset_postdata();
			}
			?>
	</div>
	<br>
	<div class="row text-center padding-bottom">
		<!-- Print a link to all posts -->
		<a href="<?php echo site_url(); ?>/?post_type=post" class="button" title="Dispatches">See All</a>
	</div>
</div>