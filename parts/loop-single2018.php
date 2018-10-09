<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header row">	
		<div class="single-featured-image columns large-6 medium-6 small-12"><?php the_post_thumbnail('full'); ?></div>
		<div class="single-header columns large-6 medium-6 small-12">
			<?php the_category(', ') ?><br />
			<h1 class="entry-title single-title " itemprop="headline"><?php the_title(); ?></h1>
			<?php the_author_posts_link(); ?><br />
			<?php the_time('F j, Y') ?><br />
			
			<div class="dsa-share">
				<strong>Share:</strong>
				<a class="button dsa-share" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php echo wp_get_shortlink(); ?>" title="Tweet this!"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fa-twitter.svg" class="button-icon" /></a> 
				<a class="button dsa-share" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook."><img src="<?php echo get_template_directory_uri(); ?>/assets/images/fa-facebook.svg" class="button-icon" /></a>
			</div>
		</div>
	</header> <!-- end article header -->
	

	<section class="entry-content columns large-8 medium-10 small-12 large-offset-2 medium-offset-1" itemprop="articleBody">
		<?php the_content(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer columns large-8 medium-10 small-12 large-offset-2 medium-offset-1">
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