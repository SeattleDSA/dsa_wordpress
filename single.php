<?php get_header(); ?>
			
<div id="content" class="grid-container">

	<div id="inner-content" class="grid-x grid-margin-x">

		<main id="main" class="cell large-8 medium-8 blog-post" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

		<?php if ( in_category('minutes') ) {
    		/* no sidebar for category minutes */
		} 
		else {
			get_sidebar(); 
		}
		?>

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>