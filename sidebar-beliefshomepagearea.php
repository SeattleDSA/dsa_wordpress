<?php if ( is_active_sidebar( 'beliefsHomepageArea' ) ) : ?>
	<div id="dsa-beliefsHomepageArea" class="sidebar grid cell large-4 medium-12 small-12" role="complementary">
		<div class="grid-container cell large-12 small-12">
			<?php dynamic_sidebar( 'beliefsHomepageArea' ); ?>
		</div>
	</div>
<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->				
	<div class="dsa-beliefsHomepageAreaAreaScreenReader help show-for-sr">
		<p><?php _e( 'To display a featured homepage area widget, activate Widgets > Widgets - Beliefs Homepage Area.', 'jointswp' );  ?></p>
	</div>
<?php endif; ?>

