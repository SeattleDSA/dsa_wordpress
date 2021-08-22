<div id="postleft" class="sidebar dsa-post-left cell large-4 medium-4" role="complementary">

	<?php if ( is_active_sidebar( 'postleft' ) ) : ?>

		<?php dynamic_sidebar( 'postleft' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p><?php _e( 'Please activate Widgets > Sidebar - Posts - Left', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>