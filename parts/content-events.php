
<?php
/*
Part:	Beliefs Carousel
Use:	Shares platform of beliefs, similar to Black Panther Program, as well as points to a Platform landing page at (your__url)/platform
*/
?>
<div class="grid-container homepage-events">
	<div class="grid-x grid-margin-x grid-margin-y txt-dsa-white">
		<div class="cell large-2 large-offset-5 medium-4 medium-offset-4 small-6 small-offset-3">
			<a href="<?php echo home_url(); ?>/events/" class="homepage-icon">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/white/calendar.svg" />
			</a>
		</div>
		<br />
		<h2 class="cell text-center">Upcoming Events</h2>
		<div class="cell grid-x grid-margin-x grid-margin-y">		
			<?php // Retrieve the next 2 upcoming events
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
						?>

					    <div class="card cell large-6 small-12">
					    	<h3><?php echo tribe_get_event_link( $event->ID, $full_link=true); ?></h3>
					    	<hr>
					    	<div class="grid-x grid-margin-x grid-margin-y">
						    	<div class="cell large-12 medium-6 small-12">
						    		<p><?php echo substr($dsa_event_description, 0, 300) ?>...</p>
									<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" class="button">Find out more &rsaquo;</a>
								</div>
					    		<div class="cell large-12 medium-6 small-12">
						    		<div class="grid-x grid-margin-x grid-margin-y">
							    		<div class="cell large-2 medium-4 small-3">
					    					<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" class="homepage-icon">
					    						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/white/calendar.svg" class="dsa-calendar-icon" />
					    					</a>
					    			 	</div>
					    				<div class="cell large-10 medium-8 small-9">
					    					<p><?php echo tribe_events_event_schedule_details( $event->ID ); ?></p>
					    				</div>
					    				<div class="cell large-2 medium-4 small-3">
					    					<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" class="homepage-icon">
					    						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/icons/white/location.svg" class="dsa-calendar-icon" />
					    					</a>
					    				</div>
					    				<div class="cell large-10 medium-8 small-9">
						    				<?php if ( tribe_has_venue( $event->ID ) ) {
												echo '<p>';
												echo tribe_get_venue( $event->ID ) . '<br>';
												echo tribe_get_address( $event->ID ) . ', ' . tribe_get_city( $event->ID ) . ', ' . tribe_get_state( $event->ID );
												echo '</p>';
											} 
											else {
												echo 'TBD'; 
											} ?>		
										</div>
									</div>
								</div>
							</div>
						</div>
						<br>
					<?php } ?>

						<div class="cell text-center">
							<a class="button dark" href="<?php echo home_url(); ?>/events/">See All</a>
						</div>
					<?php }
				else { 
					?><div class="text-center cell">This page template uses The Events Calendar plugin.</div>
					<?php 
				}
			?>
		</div>
	</div>
</div>