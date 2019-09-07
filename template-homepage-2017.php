<?php
/*
Template Name: Hompage 2017
*/
?>

<?php get_header(); ?>

	<div id="content">
		<div class="sdsa-2017-frontispiece">

		  <article class="essay">
		    <div class="grid-container">
		    	<?php if ( get_post_meta($post->ID, '_dsa_alert_box', true) ) : ?><!-- Begin DSA Alert Box; Conditional -->
					<br>
					<div class="hide-for-large dsa-space">&nbsp;</div>
					<div id="dsa-alert" class="dsa-alert card dark grid-x grid-margin-x grid-margin-y" data-closable>
						
							<div class="cell large-1 medium-2 small-3">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/bullhorn.svg" />
							</div>
							
							<div class="cell large-10 medium-8 small-6">
								<?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_alert_box', true)); ?>
							</div>

							<div class="cell large-1 medium-2 small-3">
								<button id="dsa-hide" class="dsa-close cell large-1" aria-label="Dismiss alert" data-close>
			   						<span aria-hidden="true">
			   							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/checkbox-x.svg" />
			   						</span>
			  					</button>
			  				</div>
					</div>
					<script>
						jQuery(document).ready(function(){
						    jQuery("#dsa-hide").click(function(){
						        jQuery("#dsa-alert").hide();
						    });
						});
					</script>
					<?php else: ?>
					<div class="hide-for-large dsa-space-2">&nbsp;</div>	
				<?php endif; ?>
		      <div class="grid-x grid-margin-x">
		        <div class="plate card cell large-offset-6 large-6 medium-offset-3 medium-9 small-12"><!-- Begin Main Content-->
		          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'parts/loop', 'pagealt' ); ?> 
						<?php endwhile; endif; ?>	
		         
		        </div>
		      </div>
		    </div>
		  </article><!-- end article -->


		  <div class="diptych">
		    <div class="grid-container">
		      <div class="grid-x grid-margin-x">

		        <div class="card cell large-6 medium-6 small-12 beliefs-cycle">
		          <div class="inner">

		            <div class="contents">
		              <h2>What we believe</h2>
		              
		              <div class="beliefs-carousel">
		                <button class="control prev" aria-hidden="true"></button>
		                <button class="control next" aria-hidden="true"></button>
		                <ol class="beliefs">
		                  <li class="active">Everyone should be able to live a full and dignified life.</li>
		                  <li>The economy must be run democratically; none shall be poor so another can be rich.</li>
		                  <li>The abolition of poverty.</li>
		                  <li>Affordable, humane housing for all.</li>
		                  <li>Universal Medicare-for-all.</li>
		                  <li>Free education: from pre-K to trades, college and beyond.</li>
		                  <li>Democracy in the workplace; all workers have the right to organize.</li>
		                  <li>Complete reproductive freedom in all forms.</li>
		                  <li>An end to racial, gender and all other forms of oppression.</li>
		                  <li>An end to punitive justice and mass incarceration.</li>
		                  <li>An end to military and police aggression.</li>
		                  <li>Democratic control over the environment to preserve the planet.</li>
		                  <li>Total freedom to migrate; humanity has no borders.</li>
		                </ol>
		              </div>

		              <div class="action">
		                <a href="<?php echo home_url(); ?>/platform/" class="dark button">Read full platform</a>
		              </div>
		            </div>

		          </div>
		        </div><!-- end beliefs carousel -->

		        <div class="card cell large-6 medium-6 small-12 newsletter-signup">
		            <div class="grid-x grid-margin-x">
		              <figure class="cell large-4 medium-3 small-6">
		                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" loading="lazy" alt="" />
		              </figure>
		              <div class="form cell large-8 medium-9 small-6">
		                <div class="fields">
		                    <?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_feature_box', true)); ?>
		                </div>
		              </div>
		            </div>
		        </div><!-- newsletter signup -->

		      </div><!-- end cards -->
		    </div><!-- end bound -->
		  </div><!-- end diptych -->
		</div><!-- end sdsa-2017-frontispiece -->

		<script async>jQuery(document).ready(function($) {
		  if($(".beliefs-carousel").length) {

		  
		    var curActive = $(".beliefs-carousel .active");
		    var totalBeliefs = $(".beliefs-carousel li").length;
		    var curIndex = 1;
		    

		    //console.log("curIndex is: " + curIndex);

		    function beliefAdvance() {
		      curActive = curActive.next();
		      if(curIndex == totalBeliefs) {
		        curActive = $(".beliefs-carousel li:eq(0)")
		        $(curActive).addClass("active");
		        curIndex = 1;
		      } else {
		        curIndex = curActive.index() + 1;
		        $(curActive).addClass("active");
		      }
		    }
		    
		    function beliefRewind() {
		      curActive = curActive.prev();
		      if(curIndex == 1) {
		        curActive = $(".beliefs-carousel li:eq(11)")
		        $(curActive).addClass("active");
		        curIndex = totalBeliefs;
		      } else {
		        curIndex = curIndex - 1;
		        $(curActive).addClass("active");
		      }
		    }

		    
		    $(".control").click(function(){

		      $(".beliefs-carousel li").removeClass("active");
		      if($(this).hasClass("next")) {
		        beliefAdvance();
		        //console.log("curIndex is: " + curIndex);
		      } else {
		        beliefRewind();
		        //console.log("curIndex is: " + curIndex);
		      }
		      
		    });

		  }





		}); // end doc ready
		</script>
	
		<div id="dsa-home-row-3" class="bg-DSAred">
			<div class="grid-container homepage-events">
				<div class="grid-x grid-margin-x grid-margin-y text-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/white/calendar.svg" loading="lazy" class="cell large-2 large-offset-5 medium-4 medium-offset-4 small-6 small-offset-3" /><br />
					<h2 class="dsa-section-title txt-DSAwhite cell">Upcoming Events</h2>
					<div class="cell grid-x grid-margin-x grid-margin-y">
						<?php // Retrieve the next 5 upcoming events
							if(in_array('the-events-calendar/the-events-calendar.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
			    				//plugin is activated


								$events = tribe_get_events( array(
								    'posts_per_page' => 2,
								    'start_date' => date( 'Y-m-d H:i:s', strtotime("-6 hours")),
								) );
								
								function empty_content($str) {
									    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
								}

								// Loop through the events, displaying the title
								// and content for each
								foreach ( $events as $event ) {
									$dsa_event_description = $event->post_content;

								    echo "<div class=\"card cell small-12\"><h3>";
								    echo tribe_get_event_link( $event->ID, $full_link=true);
									echo "</h3><hr><div class=\"grid-x grid-margin-x\"><div class=\"cell large-7 medium-6 small-12\"><p>";
									    echo substr($dsa_event_description, 0, 300);
									    echo "...</p><a href=\"".tribe_get_event_link ( $event->ID  )."\" class=\"button\"><b>Find out more &rsaquo;</b></a></div>";
								    echo "<div class=\"cell large-5 medium-6 small-12\">";
								    	echo "<div class=\"grid-x grid-margin-x\"><div class=\"cell large-3 medium-4 small-3\"><a href=\"";
									    	echo tribe_get_event_link ( $event->ID  );
									    echo "\"><img src=\"";
								    		echo get_stylesheet_directory_uri();
								    	echo "/assets/images/icons/white/calendar.svg\" loading=\"lazy\" class=\"dsa-calendar-icon\" /></a></div><div class=\"cell large-9 medium-8 small-9\">";
								    		echo tribe_events_event_schedule_details( $event->ID );
								    	echo "</div></div><br><div class=\"grid-x grid-margin-x\"><div class=\"cell large-3 medium-4 small-3\"><a href=\"".tribe_get_event_link ( $event->ID  )."\"><img src=\"".get_stylesheet_directory_uri()."/assets/images/icons/white/location.svg\" class=\"dsa-calendar-icon\" loading=\"lazy\" /></a></div><div class=\"cell large-9 medium-8 small-9 \">";
									    echo tribe_get_venue_single_line_address ( $event->ID, $link = false );
									    echo "<br>";
											if ( tribe_show_google_map_link($event->ID) ) {
												echo tribe_get_map_link_html($event->ID);
											}
								    echo "</div></div></div></div></div><br>";
								}

								echo "<div class=\"cell text-center\"><a class=\"button dark\" href=\"".home_url()."/events/\">See All</a></div>";
							}
							else {
								echo "<div class=\"text-center cell\">This template uses The Events Calendar plugin.</div>";
							}
						?>
					</div>
				</div>
			</div>
		</div> 

		<div id="dsa-home-row-4" class="bg-dark-1">
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
				</div><br>
				<div class="row text-center padding-bottom">
					<?php
	   					// Get the ID of a given category
	   					$category_id = get_cat_ID( 'dispatches' );
	 
					    // Get the URL of this category
					    $category_link = get_category_link( $category_id );
					?>
	 
					<!-- Print a link to this category -->
					<a href="<?php echo esc_url( $category_link ); ?>" class="button" title="Dispatches">See All</a>
				</div>
			</div>
		</div>
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
