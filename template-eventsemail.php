<?php
/*
Template Name: Event List (Email)
* @Part of the dsa_wordpress theme
* @Displays list of five upcoming events using the category slug, general
*/
?>

<?php get_header(); ?>

	<div id="content" class="grid-x grid-margin-x grid-margin-y grid-container">
		<style>
			footer, .footer, #non-printable {
				display: none !important;
			}

			div.recurringinfo {
				display: none;
			}

			ul.meta-details {
				margin-bottom: 3pt;
			}
			h1 a, h2 a, h3 a, h4 a {
				color: black;
			}
			h1 img {
			    border: 1pt solid #aaa;
				border-radius: 50%;
			}
			span.icon-calendar {
				font-size: 3rem;
				color: #ec1f27;
			}
		</style><!-- Hide Header/Footer -->
		
		
		<div class="cell large-12 small-12">
			<h1><span class="icon-calendar"></span> <?php the_title(); ?></h1>
			<p>Here are upcoming events:</p>
		</div>
		<?php // Retrieve the next 5 upcoming events
			if(in_array('the-events-calendar/the-events-calendar.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
				//plugin is activated

				$events = tribe_get_events( array(
				    'posts_per_page' => 5,
				    'start_date' => date( 'Y-m-d H:i:s', strtotime("-6 hours")),
				    'end_date' => date( 'Y-m-d H:i:s', strtotime("+1 week")),
				    'tax_query'=> array(
	                	array(
		                    'taxonomy' => 'tribe_events_cat',
		                    'field' => 'slug',
		                    'terms' => 'new-member'
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

					    echo "<div class=\"cell large-12 small-12\"><h4>";
					    echo tribe_get_event_link( $event->ID, $full_link=true);
						echo "</h4><p class=\"meta-details time\"><strong>Time:</strong> ";
					    echo tribe_events_event_schedule_details( $event->ID );
					    echo "</p><p class=\"meta-details time\"><strong>Venue:</strong> ";
					    echo tribe_get_venue_single_line_address ( $event->ID, $link = false );
					    echo "</li></ul><p>";

					    $dsa_event_description_nohtml = wp_filter_nohtml_kses ($dsa_event_description);

					    $dsa_event_shortened = substr($dsa_event_description_nohtml, 0, 300);
					    echo $dsa_event_shortened;
					    // echo wp_filter_nohtml_kses ($dsa_event_shortened);
					    // echo $event->post_content; 
					    echo " <a href=\"" . tribe_get_event_link( $event->ID, $full_link=false) . "\">[Read More]</a></p><hr></div>";
					}
				}
				else {
					echo "<div>This template uses The Events Calendar plugin. Please install.</div>";
				}
		?>

	</div> <!-- end #content -->

<?php get_footer(); ?>