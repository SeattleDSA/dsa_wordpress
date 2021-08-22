<?php if ( is_active_sidebar( 'alertmessage' ) ) : ?>
	<div id="dsa-alertmessage" class="sidebar dsa-alert-message grid grid-x bg-darkgray txt-white" role="complementary">
		<div class="grid-container cell large-12 small-12">
			<?php dynamic_sidebar( 'alertmessage' ); ?>
		</div>
	</div>
<?php else : ?>
	<!-- This content shows up if there are no widgets defined in the backend. -->				
	<div class="alert help show-for-sr">
		<p><?php _e( 'To display a warning reused throughout the site, activate Widgets > Widgets - Alert Message.', 'jointswp' );  ?></p>
	</div>
<?php endif; ?>

