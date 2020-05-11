
<?php
/*
Part:	Beliefs Carousel
Use:	Shares platform of beliefs, similar to Black Panther Program, as well as points to a Platform landing page at (your__url)/platform
*/
?>
<div class="grid-container homepage-events">
	<div class="grid-x grid-margin-x grid-margin-y">
		<div class="cell large-12 medium-12 small-12 text-center">
				<a href="<?php echo home_url(); ?>/events/" class="button-icon icon-calendar" aria-label="View full calendar"></a>
				<h2 class="cell text-center txt-white">Upcoming Events</h2>
		</div>
		<div class="cell grid-x grid-margin-x grid-margin-y dsa-events-list">		
			<?php // Retrieve the next 2 upcoming events
				if(in_array('the-events-calendar/the-events-calendar.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
					//plugin is activated


					$events = tribe_get_events( array(
					    'posts_per_page' => 4,
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

					    <div class="card cell large-6 medium-12 small-12 dsa-events-item">
					    	<h4><?php echo tribe_get_event_link( $event->ID, $full_link=true); ?></h4>
					    	<hr>
					    	<div class="grid-x grid-margin-x grid-margin-y">
						    	<div class="cell large-12 medium-12 small-12 dsa-events-description">
						    		<p><?php echo strip_tags(substr($dsa_event_description, 0, 300)) ?>...</p>
									<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" class="button hollow">Find out more</a>
								</div>
					    		<div class="cell large-12 medium-12 small-12 dsa-events-details">
						    		<div class="grid-x grid-margin-x grid-margin-y">
							    		<div class="cell large-2 medium-3 small-3">
					    					<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" class="button-icon-small icon-calendar" aria-label="View event details on calendar">
					    						
					    					</a>
					    			 	</div>
					    				<div class="cell large-4 medium-9 small-9">
					    					<p><?php echo tribe_events_event_schedule_details( $event->ID ); ?></p>
					    				</div>
					    				<div class="cell large-2 medium-3 small-3">
					    					<a href="<?php echo tribe_get_event_link ( $event->ID  ); ?>" class="button-icon-small icon-location"  aria-label="Details on event venue">

					    					</a>
					    				</div>
					    				<div class="cell large-4 medium-9 small-9">
						    				<?php if ( tribe_has_venue( $event->ID ) ) {
												echo '<p>';
												echo tribe_get_venue( $event->ID ) . '<br>';
												echo tribe_get_city( $event->ID ) . ' ' . tribe_get_state( $event->ID );
												echo '</p>';
											} 
											else {
												echo '<p>TBD</p>'; 
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