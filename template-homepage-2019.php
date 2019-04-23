<?php
/*
Template Name: Hompage 2019
*/
?>

<?php get_header(); ?>

	<div id="content" class="2019homepage">
		<?php if ( get_post_meta($post->ID, '_dsa_alert_box', true) ) : ?><!-- Begin DSA Alert Box; Conditional -->
			<br>
			<div class="hide-for-large dsa-space">&nbsp;</div>
				<div id="dsa-alert" class="dsa-alert callout large-collapse medium-collapse row" data-closable>
					
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/announcement-icon.svg" class="dsa-alert-icon float-left" />
						<button id="dsa-hide" class="dsa-close float-right" aria-label="Dismiss alert" type="button" data-close>
		   					<span aria-hidden="true"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/x.svg" /></span>
		  				</button>
						<?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_alert_box', true)); ?>	
				</div>
				<script>
					jQuery(document).ready(function(){
					    jQuery("#dsa-hide").click(function(){
					        jQuery("#dsa-alert").hide();
					    });
					});
				</script>
		<?php endif; ?>

		<div class="row sdsa-background" style="background: url('<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sdsa-scene.svg') no-repeat center center fixed; background-size: cover; -webkit-background-size: cover; -moz-background-size: cover; -o-background-size: cover;"> <!-- fmr sdsa-2017-frontpiece --->
			<div class="sdsa-peek large-6 medium-6 small-12 columns">
				&nbsp;
			</div>
			<article class="sdsa-main large-3 medium-6 small-12 columns">
		    	<!-- Begin Main Content-->
	        	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'parts/loop', 'pagealt' ); ?> 
				<?php endwhile; endif; ?>	 
			</article><!-- end article -->
			<div class="sdsa-actions large-3 medium-6 columns">
		    	<div class="sdsa-newsletter">
		            <div class="pairing">
		              <figure>
		                <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/sdsa_logo_bg.svg" alt="" />
		              </figure>
		              <div class="form">
		                <div class="fields">
		                  <!-- <h1>Get our newsletter</h1>
		                  <input type="text" placeholder="Your Name" />
		                  <input type="text" placeholder="Your Email" />
		                  <input type="submit" class="submit dark" value="Sign me up!"> -->
		                  <?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_feature_box', true)); ?>
		                </div>
		              </div>
		            </div>
				</div><!-- end sdsa-newsletter -->
				<div class="card sdsa-beliefs">
		        	<div class="inner">
						<div class="contents">
							<h1>What we believe</h1>
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
									</ol>
								</div>

								<div class="action">
									<a href="https://seattledsa.org/platform/" class="dark small">Read full platform</a>
								</div>
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
							</div>
					</div>
		        </div><!-- end sdsa-beliefs -->
		    </div>
		</div>
		<div class="row windowbottom">
			<div class="sdsa-calendar large-4 medium-6 small-12 columns">
				<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/calendar.svg" class="float-left section-icon" /> Upcoming Events</h2>
				<?php // Retrieve the next 5 upcoming events
					if(in_array('the-events-calendar/the-events-calendar.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
	    				//plugin is activated


						$events = tribe_get_events( array(
						    'posts_per_page' => 2,
						    'start_date' => date( 'Y-m-d H:i:s', strtotime("-6 hours")),
						    'tax_query'=> array(
			                	array(
				                    'taxonomy' => 'tribe_events_cat',
				                    'field' => 'slug',
				                    'terms' => 'general'
			               		)
			                )
						) );
						
						function empty_content($str) {
							    return trim(str_replace('&nbsp;','',strip_tags($str))) == '';
						}

						// Loop through the events, displaying the title
						// and content for each
						foreach ( $events as $event ) {
							$dsa_event_description = $event->post_content;

						    echo "<div class=\"sdsa-calendar-item\"><h3>";
						    echo tribe_get_event_link( $event->ID, $full_link=true);
							echo "</h3><p class=\"sdsa-calendar-item-details\">";
						    echo tribe_events_event_schedule_details( $event->ID );
						    echo "</p><p class=\"sdsa-calendar-item-address\">";
						    echo tribe_get_venue_single_line_address ( $event->ID, $link = false );
						    echo "</p>";
						    
						    
							if ( tribe_show_google_map_link($event->ID) ) {
								echo tribe_get_map_link_html($event->ID);
							}
							
						    // echo "<br>";
						   	// echo substr($dsa_event_description, 0, 300);
						    // echo "... <a href=\"";
						    // echo tribe_get_event_link ( $event->ID  );
						    // echo "\"><strong>Find out more</strong></a></div>";
						    echo "</div>";
						}

						echo "<div class=\"text-center\"><a class=\"button dark\" href=\"https://seattledsa.org/events/\">See All</a></div>";
					}
					else {
						echo "<div>This template uses The Events Calendar plugin.</div>";
					}
				?>
			</div><!-- end sdsa-calendar -->
			<div class="sdsa-dispatches large-4 medium-6 small-12 columns">
				<h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/pencil.svg" class="float-left section-icon" /> Dispatches</h2>
				<?php
					$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

					/* Here, we're making sure that the number fetched is reasonable. In case it's higher than 200 or lower than 2, we're just resetting it to the default value of 15. */
					if($how_many_last_posts > 200 || $how_many_last_posts < 4) $how_many_last_posts = 4;

					$my_query = new WP_Query('post_type=post&nopaging=1');
					if($my_query->have_posts()) {
					  echo '<div class="archives-latest-section">';
					  $counter = 1;
					  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
					    $my_query->the_post(); 
					    ?>
					    <div class="sdsa-dispatches-item">
						    	<h3><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
						    	<p>By <?php the_author() ?> / <?php the_time('F j, Y') ?></p>
						</div>
					    <?php
					    $counter++;
					  }
					  echo '</div>';
					  wp_reset_postdata();
					}
				?>
			</div><!-- end sdsa-dispatches -->
			<div class="sdsa-workinggroup large-4 medium-12 columns">
				<?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_column_right', true)); ?>
			</div>
		</div><!-- end row -->
	</div> <!-- end #content -->

<?php get_footer(); ?>