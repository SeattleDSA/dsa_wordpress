<div class="cell large-6 medium-6 small-12 byline">
	<span class="post-author"><?php the_author_posts_link(); ?></span><br>
	<span class="post-published"><?php the_time('F j, Y') ?></span><span class="post-divider">🌹</span>
	<span class="post-readtime">
		<?php
		//	function readtimeSum () {
		//		$readtimeContent = get_post_field( 'post_content', $post->ID );
		//		$readtimeWords = str_word_count( strip_tags( $readtimeContent ) );
		//		$readtimeSum = $readtimeWords / 200;
		//		return round($readtimeSum,1);
		//	}
		//    	echo readtimeSum() . " minute read";
		?>
	</span>
</div>
