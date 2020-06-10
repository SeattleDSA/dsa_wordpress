<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 * @version 4.6.19
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural   = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<div id="tribe-events-content" class="tribe-events-single grid-container">

	<div class="cell large-12 small-12">
		<p class="tribe-events-back hide-for-print">
		<a href="<?php echo esc_url( tribe_get_events_link() ); ?>" class="button hollow"> <?php printf( '← ' . esc_html_x( 'All %s', '%s Events plural label', 'the-events-calendar' ), $events_label_plural ); ?></a>
		</p>
		<!-- Notices -->
		<?php tribe_the_notices() ?>

		<?php the_title( '<h1 class="event-title">', '</h1>' ); ?>
	</div>
	<div class="tribe-events-schedule tribe-clearfix cell large-12 small-12">
		<?php if ( tribe_get_cost() ) : ?>
			<span class="tribe-events-cost"><?php echo tribe_get_cost( null, true ) ?></span>
		<?php endif; ?>
		<p>
			Short URL: <a href="<?php echo site_url()."/?p=" ?><?php echo the_ID(); ?>"><?php echo site_url()."/?p=" ?><?php echo the_ID(); ?></a>
		</p>
	</div>

	<!-- Event header -->
	<div id="tribe-events-header" <?php tribe_events_the_header_attributes() ?>>
	</div>
	<!-- #tribe-events-header -->

	<div class="cell large-12 small-12">
	<?php while ( have_posts() ) :  the_post(); ?>
		<div id="post-<?php the_ID(); ?>" <?php post_class('grid-x grid-margin-x grid-padding-x grid-margin-y grid-padding-y'); ?>>
			<!-- Event featured image, but exclude link -->
			<div class="cell large-4 medium-6">
				<?php 
					if ( has_post_thumbnail() ) {
						echo '<figure class="event-thumbnail-image">';
						echo tribe_event_featured_image( $event_id, 'full', false );
						if ($thumbnail_image && isset($thumbnail_image[0])) {
							echo '<figcaption class="event-thumbnail-caption hide-for-print">' . the_post_thumbnail_caption('') . '</figcaption>';
							echo '</figure>';}
						else {
							echo '</figure>';
						}
					} else {
					  echo '<figure class="event-thumbnail-image event-thumbnail-default h1"><span class="icon-calendar" /></figure>';
					}
				?>
				<h2>Date</h2>
				<p>
					<?php echo tribe_get_start_date( null, false ) ?><br>
					<?php echo tribe_get_start_time() . ' to ' . tribe_get_end_time()?>
				</p>
				
				<?php if ( tribe_has_venue() ) : ?>
					<h2>Venue</h2>
					<p>
						<?php echo tribe_get_venue() ?><br>
						<?php echo tribe_get_address() ?><br>
						<?php echo tribe_get_city() . ' ' . tribe_get_state() . ' ' . tribe_get_zip() ?>
					</p>
				<?php endif ?>
				
				<p><?php echo tribe_get_map_link_html() ?></p>

				<?php if ( tribe_has_organizer() ) : ?>
						<?php tribe_get_template_part( 'modules/meta/organizer' ); ?>	
				<?php endif ?>
				
			</div>
			<!-- end column 1 / meta and featured image column-->

			<!-- Event content -->
			<div class="cell large-8 medium-6">
				<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
				<div class="tribe-events-single-event-description tribe-events-content">
					<?php the_content(); ?>
				</div>
				<div class="hide-for-print"><?php do_action( 'tribe_events_single_event_after_the_content' ) ?></div>
			</div>



			<div class="cell large-8 medium-12 hide-for-print">
				<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
			</div>
			<!-- .tribe-events-single-event-description -->
			
		</div> <!-- #post-x -->
		<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
	<?php endwhile; ?>
	</div>
	
	<!-- Event footer -->
	<div id="tribe-events-footer" class="hide-for-print cell large-12 small-12">
		<!-- Navigation -->
		<nav class="tribe-events-nav-pagination" aria-label="<?php printf( esc_html__( '%s Navigation', 'the-events-calendar' ), $events_label_singular ); ?>">
			<ul class="tribe-events-sub-nav">
				<li class="tribe-events-nav-previous"><?php tribe_the_prev_event_link( '<span>←</span> %title%' ) ?></li>
				<li class="tribe-events-nav-next"><?php tribe_the_next_event_link( '%title% <span>→</span>' ) ?></li>
			</ul>
			<!-- .tribe-events-sub-nav -->
		</nav>
	</div>
	<!-- #tribe-events-footer -->

</div><!-- #tribe-events-content -->
