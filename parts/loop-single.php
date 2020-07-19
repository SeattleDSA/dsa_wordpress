<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<?php the_category(', ') ?>
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<div class="grid-x grid-margin-x">
			<?php get_template_part( 'parts/content', 'byline' ); ?> <?php get_template_part( 'parts/content', 'share' ); ?>
		</div>
    </header> <!-- end article header -->
	

    <section class="entry-content" itemprop="articleBody">
		<?php if ( has_post_thumbnail() ) : ?>
		    <figure>
		    	<?php the_post_thumbnail('full'); ?>
		    	
		    		<?php if ( ! function_exists( 'the_post_thumbnail_caption' ) ) {
						 function the_post_thumbnail_caption() {
						  global $post;

						  $thumbnail_id    = get_post_thumbnail_id($post->ID);
						  $thumbnail_image = get_posts(array('p' => $thumbnail_id, 'post_type' => 'attachment'));

						   if ($thumbnail_image && isset($thumbnail_image[0])) {
						    return '<figcaption class="post-thumbnail-caption">'.$thumbnail_image[0]->post_excerpt.'</figcaption>';
						   } else {
						     return;
						   }
						 }
						}
					?>		
		    </figure>
		<?php endif; ?>

		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
		<div class="dsa-share">
			Share on <a class="button-icon-small" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php echo wp_get_shortlink(); ?>" title="Tweet this!"><span class="icon-twitter"></span></a> 
			<a class="button-icon-small" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook."><span class="icon-facebook"></span></a>
		</div>
	</footer> <!-- end article footer -->
					
	<?php comments_template(); ?>	
													
</article> <!-- end article -->