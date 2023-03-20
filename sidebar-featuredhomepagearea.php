<?php if ( is_active_sidebar( 'featuredHomepageArea' ) ) : ?>
	<div id="dsa-featuredHomepageArea" class="sidebar grid cell large-4 medium-6 small-12" role="complementary">
		<div class="grid-container card cell large-12 small-12">
			<?php dynamic_sidebar( 'featuredHomepageArea' ); ?>
		</div>
	</div>
<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->				
	<div class="dsa-featuredHomepageAreaScreenReader help show-for-sr">
		<p><?php _e( 'To display a featured homepage area widget, activate Widgets > Widgets - Featured Homepage Area.', 'jointswp' );  ?></p>
	</div>
<?php endif; ?>

