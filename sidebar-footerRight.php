<div id="footerRight" class="sidebar cell large-6 medium-6 small-12" role="complementary">

	<?php if ( is_active_sidebar( 'footerright' ) ) : ?>

		<?php dynamic_sidebar( 'footerright' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( '&nbsp;', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>