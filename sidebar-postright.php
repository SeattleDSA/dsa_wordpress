<div id="postright" class="sidebar cell large-4 medium-4" role="complementary">

	<?php if ( is_active_sidebar( 'postright' ) ) : ?>

		<?php dynamic_sidebar( 'postright' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate Widgets > Sidebar - Posts - Right.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>