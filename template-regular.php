<?php
/*
Template Name: Regular (No Sidebar)
*/
?>

<?php get_header(); ?>
			
	<div id="content" class="grid-container">
	
		<div id="inner-content" class="grid-x grid-x-margin">
	
		    <main id="main" class="cell medium-12 dsa-readable" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
