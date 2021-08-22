<?php
/*
Template Name: Page Extra Wide (No Sidebar)
*/
?>

<?php get_header(); ?>
	<?php get_sidebar('alertmessage'); ?>
	<div id="content" class="grid-container full">
	
		<div id="inner-content" class="grid-x grid-margin-x">
	
		    <main id="main" class="cell dsa-readable" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
