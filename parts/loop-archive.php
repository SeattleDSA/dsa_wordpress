<article id="post-<?php the_ID(); ?>" <?php post_class('archive-card card'); ?> role="article">					
	<div class="grid-x grid-margin-x">
		<div class="archive-item-background cell large-4 medium-4 small-12">
			<a href="<?php the_permalink() ?>" class="archive-image-link">
				<?php 
					if ( has_post_thumbnail() ) { 
							the_post_thumbnail('large'); 
						}
						else {
							echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/images/dsa_blog.png" />';
						}
				?>
			</a>
			
		</div>
		<header class="archive-item-content cell large-8 medium-8 small-12">
			<h2 class="txt-bold archive-item-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<?php get_template_part( 'parts/content', 'byline' ); ?>	
			<section class="archive-item-excerpt" itemprop="articleBody">
				<?php the_excerpt(); ?>
			</section> <!-- end archive-item-excerpt -->
		</header> <!-- end archive-item-content -->
	</div>

</article><!-- end article -->