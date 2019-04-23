<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header">	
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->
	<div class="dsa-share">
		<strong>Share:</strong>
		<a class="button dsa-share" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php echo wp_get_shortlink(); ?>" title="Tweet this!"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fa-twitter.svg" class="button-icon" /></a> 
		<a class="button dsa-share" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook."><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fa-facebook.svg" class="button-icon" /></a>
	</div>

    <section class="entry-content" itemprop="articleBody">
		<?php if ( has_post_thumbnail() ) : ?>
		    <figure>
		    	<?php the_post_thumbnail('full'); ?>
		    	<figcaption class="post-thumbnail-caption"><?php the_post_thumbnail_caption(''); ?></figcaption>
		    </figure>
		<?php endif; ?>

		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
		<div class="dsa-share">
		<strong>Share:</strong>
		<a class="button dsa-share" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php echo wp_get_shortlink(); ?>" title="Tweet this!"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fa-twitter.svg" class="button-icon" /></a> 
		<a class="button dsa-share" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook."><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fa-facebook.svg" class="button-icon" /></a>
	</div>
	</footer> <!-- end article footer -->
					
	<?php comments_template(); ?>	
													
</article> <!-- end article -->