<div id="sidebarPageRight" class="sidebar cell large-4 medium-4" role="complementary">

	<?php if ( is_active_sidebar( 'sidebarPageRight' ) ) : ?>

		<?php dynamic_sidebar( 'sidebarPageRight' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help show-for-sr">
		<p><?php _e( 'Please activate Widgets > Sidebar - Pages Right.', 'jointswp' );  ?></p>
	</div>

	<?php endif; ?>

</div>