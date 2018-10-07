<?php
/*
Template Name: Next Events
* @Part of the dsa_wordpress theme
* @Displays list of five upcoming events using the category slug, general
*/
?>

<?php get_header(); ?>

	<div id="content">

		<style>
			header, footer {
				display: none !important;
			}
			.bdr-stripe-red-white-left {
				border: 1pt solid #aaa;
	    		padding: 3pt 6pt;
	    		-webkit-border-image: none;
	    		-o-border-image: none;
	    		border-image: none;	
			}
			div.recurringinfo {
				display: none;
			}
			.card-gray {
				margin-bottom: 9pt;
			}

			ul.meta-details {
				margin-bottom: 3pt;
			}
			h1 small {
				color: #000;
				display: inline;
				font-size: 12pt;
				text-transform: none;
				font-family: ManifoldDSA-Light, Helvetica, Tahoma, Sans-Serif;
			}
			h1 {
				font-size: 14pt;
			}
			h1 img {
			    border: 1pt solid #aaa;
				border-radius: 50%;
			}

			@media print {
				h1 {
					font-size: 14pt;
					font-weight: bold;
				}
				h1 small {
					font-weight: 200;
				}
				h2, h4 {
				font-size: 12pt;
				}
				.card-gray p, .card-gray ul.meta-details li {
					font-size: 10pt;
					margin-bottom: 0;
				}
				a[href]:after { content: none !important; }
  				img[src]:after { content: none !important; }
			}
		</style><!-- Hide Header/Footer -->
		
		<div id="nextevents" class="bg-DSAred">
			<div class="row">
				<div class="text-center dsa-nextevents-title">
					<br />
					<h1><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/ui-foregrounds/calendar.svg" width="64" height="64" /> <b>Seattle Democratic Socialists of America</b> <small>Upcoming Events</small></h1>
				</div>
				<?php // Retrieve the next 5 upcoming events
					if(in_array('the-events-calendar/the-events-calendar.php', apply_filters('active_plugins', get_option('active_plugins')))){ 
	    				//plugin is activated


						$events = tribe_get_events( array(
						    'posts_per_page' => 5,
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

						    echo "<div class=\"card-gray large-10 large-centered medium-10 medium-centered small-12 bdr-stripe-red-white-left\"><h4><b>";
						    echo tribe_get_event_link( $event->ID, $full_link=true);
							echo "</h4></b><ul class=\"meta-details\"><li><b>Time:</b> ";
						    echo tribe_events_event_schedule_details( $event->ID );
						    echo "</li><li><b>Venue:</b> ";
						    echo tribe_get_venue_single_line_address ( $event->ID, $link = false );
						    echo "</li></ul><p>";

						    $dsa_event_description_nohtml = wp_filter_nohtml_kses ($dsa_event_description);

						    $dsa_event_shortened = substr($dsa_event_description_nohtml, 0, 220);
						    echo $dsa_event_shortened;
						    // echo wp_filter_nohtml_kses ($dsa_event_shortened);
						    // echo $event->post_content; 
						    echo " [...]</p></div>";
						}
					}
					else {
						echo "<div>This template uses The Events Calendar plugin. Please install.</div>";
					}
				?>
			</div>
		</div> 

	</div> <!-- end #content -->

<?php get_footer(); ?>