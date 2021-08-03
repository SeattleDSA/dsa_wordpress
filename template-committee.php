<?php
/*
Template Name: Committee Pages
*/
?>

<?php get_header(); ?>
			
	<div id="content" class="grid-container">
	
		<div id="inner-content" class="grid-x grid-margin-x">
	
		    <main id="main" class="cell large-10 medium-12" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
