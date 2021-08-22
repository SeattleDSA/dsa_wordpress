<article id="post-<?php the_ID(); ?>" <?php post_class('grid-x grid-margin-x'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
						
	<header class="article-header cell small-12 large-12">	
		<div class="grid-x grid-margin-x single-meta">
			<div class="cell large-3 small-12 grid-x grid-margin-x border-top capitalize dsa-date">
				<?php dsa_wordpress_wp_posted_on(); ?>
			</div>
			<div class="cell large-6 small-12 grid-x grid-margin-x border-top capitalize dsa-taxonomy">
				<?php dsa_wordpress_wp_entry_tags(); ?>
			</div>
			<div class="cell large-3 small-12 grid-x grid-margin-x border-top capitalize dsa-share">
				<?php get_template_part( 'parts/content', 'share' ); ?>
			</div>
		</div>	
		<div class="grid-x grid-margin-x single-above-fold">	
			<div class="cell large-6 small-12 align-bottom">
				<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
				<div class="content-excerpt grid-x grid-margin-x">
					<div class="cell large-8 small-12 single-author">
						<?php dsa_wordpress_wp_posted_by(); ?>
					</div>
					<div class="cell large-4 small-12 single-read-time">
						<?php dsa_wordpress_wp_post_readtime();?>
					</div>
					<div class="cell large-12 single-excerpt content-excerpt">
						<?php the_excerpt(); ?>
					</div>
				</div>
			</div>
			<div class="cell large-6 small-12">
				<?php if ( has_post_thumbnail() ) : ?>
			    	<div class="cell large-12 single-featured-image">
			    		<?php the_post_thumbnail('full'); ?>
			   		</div>
			    	<div class="cell large-12 border-top featured-image-caption-container single-caption">
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
	
	<div class="sidebar cell large-3 small-12 single-sidebar-left">
		<?php get_sidebar('postleft'); ?>
	</div>

    <section class="entry-content cell large-6 small-12 single-content" itemprop="articleBody">
		<?php the_content(); ?>
	</section> <!-- end article section -->

	<div class="sidebar cell large-3 small-12 single-sidebar-right">
		<?php get_sidebar('postright'); ?>
	</div>				
	<footer class="article-footer cell large-12">
		<?php wp_link_pages( array( 'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'jointswp' ), 'after'  => '</div>' ) ); ?>
		<div class="grid-x grid-margin-x single-meta">
			<div class="cell large-3 small-12 grid-x grid-margin-x border-top capitalize dsa-date">
				<?php dsa_wordpress_wp_posted_on(); ?>
			</div>
			<div class="cell large-6 small-12 grid-x grid-margin-x border-top capitalize dsa-taxonomy">
				<?php dsa_wordpress_wp_entry_tags(); ?>
			</div>
			<div class="cell large-3 small-12 grid-x grid-margin-x border-top capitalize dsa-share">
				<?php get_template_part( 'parts/content', 'share' ); ?>
			</div>
		</div>	
	</footer> <!-- end article footer -->
	<div class="article-comments cell large-12">
		<?php comments_template(); ?>	
	</div>
													
</article> <!-- end article -->