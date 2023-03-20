<?php if ( is_active_sidebar( 'emailHomepageArea' ) ) : ?>
	<div id="dsa-emailHomepageArea" class="sidebar grid cell large-4 medium-6 small-12" role="complementary">
		<div class="grid-container card cell large-12 small-12">
			<?php dynamic_sidebar( 'emailHomepageArea' ); ?>
		</div>
	</div>
<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->				
	<div class="dsa-emailHomepageAreaAreaScreenReader help show-for-sr">
		<p><?php _e( 'To display a featured homepage area widget, activate Widgets > Widgets - Email Homepage Area.', 'jointswp' );  ?></p>
	</div>
<?php endif; ?>

