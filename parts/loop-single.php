<article id="post-<?php the_ID(); ?>" <?php post_class('grid-x'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header cell small-12 large-12">	
		<div class="grid-x grid-margin-x">
			<div class="cell large-8 small-12 grid-x grid-margin-x">
				<?php get_template_part( 'parts/content', 'singleHeader' ); ?>
			</div>
			<div class="cell large-4 small-12 grid-x grid-margin-x">
				<?php get_template_part( 'parts/content', 'share' ); ?>
			</div>
		</div>	
		<div class="grid-x grid-margin-x">	
			<div class="cell large-6 small-12 align-bottom">
				<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
				<div class="content-excerpt grid-x grid-margin-x">
					<div class="cell large-8 small-12">
						<?php dsa_wordpress_wp_posted_by(); ?>
					</div>
					<div class="cell large-4 small-12">
						<?php dsa_wordpress_wp_post_readtime();?>
					</div>
					<div class="cell large-12 content-excerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
			<div class="cell large-6 small-12">
				<?php if ( has_post_thumbnail() ) : ?>
			    	<div class="cell large-12">
			    		<?php the_post_thumbnail('full'); ?>
			   		</div>
			    	<div class="cell large-12 border-top featured-image-caption-container">
			    		<?php if (get_post(get_post_thumbnail_id())->post_excerpt) { // search for if the image has caption added on it ?>
						    <span class="featured-image-caption">
						        <?php echo wp_kses_post(get_post(get_post_thumbnail_id())->post_excerpt); // displays the image caption ?>
						    </span>
						<?php } ?>
					</div>
				<?php endif; ?>
			</div>
		</div>

    </header> <!-- end article header -->
	

    <section class="entry-content cell large-9 small-12" itemprop="articleBody">
		<?php the_content(); ?>
	</section> <!-- end article section -->

	<div class="sidebar cell large-3 small-12">
		<?php if ( in_category('minutes') ) {
    		/* no sidebar for category minutes */
		} 
		else {
			get_sidebar(); 
		}
		?>
	</div>				
	<footer class="article-footer cell large-12">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<p class="tags"><?php the_tags('<span class="tags-title">' . __( 'Tags:', 'jointswp' ) . '</span> ', ', ', ''); ?></p>	
		<div class="dsa-share">
			Share on <a class="button-icon-small" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php echo wp_get_shortlink(); ?>" title="Tweet this!"><span class="icon-twitter"></span></a> 
			<a class="button-icon-small" href="http://www.facebook.com/sharer.php?u=<?php the_permalink();?>&amp;t=<?php the_title(); ?>" title="Share on Facebook."><span class="icon-facebook"></span></a>
		</div>
	</footer> <!-- end article footer -->
	<div class="article-comments cell large-12">
		<?php comments_template(); ?>	
	</div>
													
</article> <!-- end article -->