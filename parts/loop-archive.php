<article id="post-<?php the_ID(); ?>" <?php post_class('cell large-6 medium-6 small-6 grid-x grid-margin-x'); ?> role="article">					
		
		<header class="archive-item-content cell large-10 medium-8 small-12">
			<div class="cell small-12 byline grid-x grid-margin-x">
				<div class="cell large-12 small-12 border-top">
					<?php dsa_wordpress_wp_posted_on(); ?>
				</div>

				<h2 class="txt-bold archive-item-title cell large-12 small-12"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
				</h2>

				<div class="cell large-12 small-12">
					<?php dsa_wordpress_wp_posted_by(); ?>
				</div>
				<div class="cell large-12 small-12">
						<?php dsa_wordpress_wp_post_readtime();?>
				</div>
				
			</div>

				
			<section class="archive-item-excerpt" itemprop="articleBody">
				<?php the_excerpt(); ?>
			</section> <!-- end archive-item-excerpt -->
		</header> <!-- end archive-item-content -->

		<div class="archive-item-background cell large-6 medium-8 small-12 align-bottom">
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

</article><!-- end article -->