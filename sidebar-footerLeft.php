<div id="footerleft" class="sidebar dsa-footer-left cell large-6 medium-6 small-12" role="complementary">

	<?php if ( is_active_sidebar( 'footerleft' ) ) : ?>

		<?php dynamic_sidebar( 'footerleft' ); ?>

	<?php else : ?>

	<!-- This content shows up if there are no widgets defined in the backend. -->
						
	<div class="alert help">
		<p>This area is customizable under Widgets ▶ Widget - Footer Left.</p>
	</div>

	<?php endif; ?>

</div>
