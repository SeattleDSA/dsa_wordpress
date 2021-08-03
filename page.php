<?php get_header(); ?>
	
	<div id="content" class="grid-container">

		<div id="inner-content" class="grid-x grid-margin-x">
	
		    <main id="main" class="cell large-8 medium-8" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>
			    
			    <?php endwhile; endif; ?>							
			    					
			</main> <!-- end #main -->

		    <?php get_sidebar('page'); ?>
		    
		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>