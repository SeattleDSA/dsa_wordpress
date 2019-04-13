<?php
/*
Template Name: Hompage 2017
*/
?>

<?php get_header(); ?>

	<div id="content">
		<div class="sdsa-2017-frontispiece">

		  <article class="essay">
		    <div class="bound">
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
					<?php else: ?>
					<div class="hide-for-large dsa-space-2">&nbsp;</div>	
				<?php endif; ?>
		      <div class="inner">
		        <div class="plate"><!-- Begin Main Content-->
		          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'parts/loop', 'pagealt' ); ?> 
						<?php endwhile; endif; ?>	
		         
		        </div>
		      </div>
		    </div>
		  </article><!-- end article -->


		  <div class="diptych">
		    <div class="bound">
		      <div class="cards">

		        <div class="card beliefs-cycle">
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
		                  <li>Total freedom to migrate; humanity has no borders.</li>
		                  <!-- ?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_slide1', true)); ? -->
		                </ol>
		              </div>

		              <div class="action">
		                <a href="https://seattledsa.org/platform/" class="dark small">Read full platform</a>
		              </div>
		            </div>

		          </div>
		        </div><!-- end beliefs carousel -->

		        <div class="card newsletter-signup">
		          <div class="inner">
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
			<div class="row dsa-home-row-3-edit">
				<div class="text-center">
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ui-foregrounds/calendar.svg" width="141" height="141" /><br />
					<h2 class="dsa-section-title txt-DSAwhite">Upcoming Events</h2>
				</div>
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

						    echo "<div class=\"card-gray large-10 large-centered medium-10 medium-centered small-12 bdr-stripe-red-white-left\"><h4 class=\"txt-bold\">";
						    echo tribe_get_event_link( $event->ID, $full_link=true);
							echo "</h4><p>";
						    echo tribe_events_event_schedule_details( $event->ID );
						    echo "<br>";
						    echo tribe_get_venue_single_line_address ( $event->ID, $link = false );
						    echo "  ";
						    
						    
							if ( tribe_show_google_map_link($event->ID) ) {
								echo tribe_get_map_link_html($event->ID);
							}
							
						    echo "</p><p>";
						    echo substr($dsa_event_description, 0, 300);
						    // echo $event->post_content; 
						    echo "...</p><a href=\"";
						    echo tribe_get_event_link ( $event->ID  );
						    echo "\"><b>Find out more &rsaquo;</b></a></div><br>";
						}

						echo "<div class=\"text-center\"><a class=\"button dark\" href=\"https://seattledsa.org/events/\">See All</a></div>";
					}
					else {
						echo "<div>This template uses The Events Calendar plugin.</div>";
					}
				?>
			</div>
		</div> 

		<div id="dsa-home-row-4" class="bg-dark-1">
			<div class="row dsa-home-row-4-edit text-center txt-white">
				<?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_column_right', true)); ?>
			</div>
			<div class="row"> 
				<?php
					$how_many_last_posts = intval(get_post_meta($post->ID, 'archived-posts-no', true));

					/* Here, we're making sure that the number fetched is reasonable. In case it's higher than 200 or lower than 2, we're just resetting it to the default value of 15. */
					if($how_many_last_posts > 200 || $how_many_last_posts < 2) $how_many_last_posts = 2;

					$my_query = new WP_Query('post_type=post&nopaging=1');
					if($my_query->have_posts()) {
					  echo '<div class="archives-latest-section">';
					  $counter = 1;
					  while($my_query->have_posts() && $counter <= $how_many_last_posts) {
					    $my_query->the_post(); 
					    ?>
					    <div class="large-6 medium-6 small-12 columns">
					    	<div class="large-12 medium-12 small-12 columns card-gray bdr-stripe-black">
						    	<h4 class="txt-bold"><a href="<?php the_permalink() ?>" rel="bookmark" title="Read <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h4><br/>
						    	<b>By <?php the_author() ?> / <?php the_time('F j, Y') ?></b>
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
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
