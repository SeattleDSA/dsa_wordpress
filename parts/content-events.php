
<?php
/*
Part:	Events List
Use:	Lists upcoming events from The Events Calendar
*/
?>
<div class="grid-container homepage-events">
	<div class="grid-x grid-margin-x grid-margin-y">
		<div class="cell large-12 medium-12 small-12 text-center">
				<a href="<?php echo home_url(); ?>/events/" class="button-icon icon-calendar" aria-label="View full calendar"></a>
				<h2 class="cell text-center">Upcoming Events</h2>
		</div>
		<div class="cell grid-x grid-margin-x grid-margin-y dsa-events-list">		
			<?php // Retrieve the next 2 upcoming events
				if(in_array('the-events-calendar/the-events-calendar.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
					//plugin is activated


					$events = tribe_get_events( array(
					    'posts_per_page' => 6,
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

					    <div class="cell large-12 medium-12 small-12 dsa-events-item card-ui">
					    	<div class="cell grid-x grid-margin-x grid-margin-y">
					    		<div class="cell large-12 medium-12 small-12 dsa-events-details">
						    		<div class="grid-x grid-margin-x grid-margin-y align-middle">
							    		<div class="cell large-2 medium-3 small-3 text-center">
					    					
					    						<span class="dsa-event-textmonth"><?php echo tribe_get_start_date( $event->ID, $display_time = false, $date_format = "M" );?></span><br>
					    						<span class="dsa-event-numericday"><?php echo tribe_get_start_date( $event->ID, $display_time = false, $date_format = "j" );?></span><br>
					    						<span class="dsa-event-textday"><?php echo tribe_get_start_date( $event->ID, $display_time = false, $date_format = "D" );?></span>
					    				</div>
					    				<div class="cell large-10 medium-9 small-9">
					    					<span class="dsa-event-time"><?php echo tribe_get_start_time( $event->ID );?> - <?php echo tribe_get_end_time( $event->ID );?></span><br>
					    					<h4><?php echo tribe_get_event_link( $event->ID, $full_link=true); ?></h4>
						    				<?php if ( tribe_has_venue( $event->ID ) ) {
												echo '<strong><span class=\"dsa-event-location\">';
												echo tribe_get_venue( $event->ID ) . '</span></strong><br>';
												echo '<span class=\"dsa-event-address\">' . tribe_get_address( $event->ID ) . ' ' . tribe_get_city( $event->ID );
												echo '</span>';
											} 
											else {
												echo '<strong><span class=\"dsa-event-location\">Online</span></strong>'; 
											} ?>		
										</div>
									</div>
								</div>
							</div>
						</div>
						
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