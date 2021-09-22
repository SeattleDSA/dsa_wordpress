<?php get_header(); ?>
	<?php get_sidebar('alertmessage'); ?>		
	<div id="content">
	
		<div id="inner-content" class="grid-container">
		
		    <main id="main" class="grid-x grid-margin-x" role="main">
			    
		    	<header class="archive-header cell large-12 medium-12 small-12">
		    		<h1 class="page-title"> <?php single_term_title(); ?> </h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
				</header>
		    	<div class="sidebar cell large-9 medium-8 small-12 archive-post-loop border-top">
		    		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 		
						<!-- To see additional archive styles, visit the /parts directory -->
						<?php get_template_part( 'parts/loop', 'archive' ); ?>
						<?php joints_page_navi(); ?>
				    
						<?php endwhile; ?>	

							
							
						<?php else : ?>
													
							<?php get_template_part( 'parts/content', 'missing' ); ?>
								
						<?php endif; ?>
				</div>
				<div class="sidebar cell large-3 medium-4 small-12 single-sidebar-right" data-sticky-container>
					<div class="sticky border-top bg-white" data-sticky data-margin-top="0">
						<?php get_sidebar('postright'); ?>
					</div>
				</div>
		
			</main> <!-- end #main -->
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>