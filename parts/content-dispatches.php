
<?php
/*
Part:	Dispatches Feed
Use:	Grid-container with two most recent posts
*/
?>
<div class="grid-container">
	<div class="grid-x grid-margin-x grid-margin-y text-center">
		<div class="cell large-12 medium-12 small-12 text-center">
				<a href="<?php echo site_url(); ?>/?post_type=post" class="button-icon icon-typewriter" aria-label="Read all blog posts"></a>
				<h2 class="dsa-section-title cell">Dispatches</h2>
		</div>
	</div>
	<div class=""> 
		<?php
			$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

			/* Here, we're making sure that the number fetched is reasonable. In case it's higher than 200 or lower than 2, we're just resetting it to the default value of 6. */
			if($how_many_last_posts > 200 || $how_many_last_posts < 6) $how_many_last_posts = 6;

			$my_query = new WP_Query('post_type=post&nopaging=1');
			if($my_query->have_posts()) {
			  echo '<div class="archives-latest-section grid-x grid-margin-x grid-margin-y">';
			  $counter = 1;
			  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
			    $my_query->the_post(); 
			    ?>
			    <div class="cell grid-x grid-margin-x grid-margin-y card-ui">
			    	<div class="cell large-2 medium-3 small-3 text-center">
				    	<span class="dsa-event-textmonth"><?php the_time('M') ?></span><br>
				    	<span class="dsa-event-numericday"><strong><?php the_time('j') ?></strong></span><br>
				    	<span class="dsa-event-textday"><?php the_time('D') ?></span>
				    </div>
				    <div class="cell large-10 medium-9 small-9">
				    	<h4><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4>
				    	<strong><?php the_author() ?></strong>
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