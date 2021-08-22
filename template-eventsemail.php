<?php
/*
Template Name: Event List (Email 2)
* @Part of the dsa_wordpress theme
* @Displays list of five upcoming events using the category slug, new-member
*/
?>

<?php get_header(); ?>
	<?php get_sidebar('alertmessage'); ?>
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

			@media only screen and (max-width: 480px){
			    #templateColumns{
			    	width:100% !important;
			    }

			    .templateColumnContainer{
			    	display:block !important;
			    	width:100% !important;
			    }

			    .columnImage{
			        height:auto !important;
			        max-width:480px !important;
			        width:100% !important;
			    }
			}
		</style><!-- Hide Header/Footer -->
		
		<div class="cell large-12 small-12">
			<h1><span class="icon-calendar"></span> <?php the_title(); ?></h1>
			<?php the_content( 'Continue reading ' . get_the_title() ); ?>
			<hr />
			<p>Here are upcoming events:</p>
		</div>
		<div class="cell large-12 small-12">
		<?php // Retrieve the next 5 upcoming events
			if(in_array('the-events-calendar/the-events-calendar.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
				//plugin is activated

				$events = tribe_get_events( array(
				    'posts_per_page' => 12,
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
					echo "<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" width=\"600\" id=\"templateColumns\">";
					// Loop through the events, displaying the title
					// and content for each
					foreach ( $events as $event ) {
						$dsa_event_description_raw = $event->post_content;
						$dsa_event_description = sanitize_text_field( $dsa_event_description_raw );
						$excerpt_length = 400;
						$title = $event->post_title;

						echo "<tr style=\"border-bottom: 1px solid #202020;\"><td align=\"center\" valign=\"middle\" width=\"15%\" style=\"text-align: center; vertical-align: middle;\">";

						echo "<span class=\"dsa-event-textmonth\">" . tribe_get_start_date( $event->ID, $display_time = false, $date_format = "M" ) . "</span><br>";

						echo "<span class=\"dsa-event-numericday\" style=\"font-size: 2rem; font-weight:bold;\">" . tribe_get_start_date( $event->ID, $display_time = false, $date_format = "j" ) . "</span><br>";

						echo "<span class=\"dsa-event-textday\">" . tribe_get_start_date( $event->ID, $display_time = false, $date_format = "D" ) . "</span><br>";

					    echo "</td><td align=\"left\" valign=\"middle\" width=\"84%\" style=\"vertical-align: middle; text-align: left;\">";
					    echo "<span class=\"dsa-event-time\">" . tribe_get_start_time( $event->ID ) . " - " . tribe_get_end_time( $event->ID ) . "</span><br>";
					    echo "<h3><a href=\"" . tribe_get_event_link( $event->ID, $full_link=false) . "\">". $title . "</a></h3>";
						
						echo "<span class=\"dsa-event-location\"><strong>" . tribe_get_venue ( $event->ID, $link = false ) . "</strong></span> <span class=\"dsa-event-city\">" . tribe_get_city ($event->ID, $link = false);

					    echo "</span></tr>";
					}
					echo "</table>";
				}
				else {
					echo "<div>This template uses The Events Calendar plugin. Please install.</div>";
				}
		?>
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>