<div id="pageright" class="sidebar dsa-page-right cell large-4 medium-4" role="complementary">

	<?php if ( is_active_sidebar( 'pageright' ) ) : ?>

		<?php dynamic_sidebar( 'pageright' ); ?>

	<?php else : ?>

		<!-- This content shows up if there are no widgets defined in the backend. -->
							
		<div class="alert help">
			<p><?php _e( 'Please activate Widgets > Sidebar Pages Right.', 'jointswp' );  ?></p>
		</div>

	<?php endif; ?>

</div>