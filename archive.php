<?php get_header(); ?>
			
	<div id="content">
	
		<div id="inner-content" class="grid-container">
		
		    <main id="main" class="grid-x grid-margin-x" role="main">
			    
		    	<header class="archive-header cell large-12 medium-12 small-12">
		    		<h1 class="page-title"> <?php single_term_title(); ?> </h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
				</header>
		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			 
					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>
				    
				<?php endwhile; ?>	

					<?php joints_page_navi(); ?>
					
				<?php else : ?>
											
					<?php get_template_part( 'parts/content', 'missing' ); ?>
						
				<?php endif; ?>
		
			</main> <!-- end #main -->
	    
	    </div> <!-- end #inner-content -->
	    
	</div> <!-- end #content -->

<?php get_footer(); ?>