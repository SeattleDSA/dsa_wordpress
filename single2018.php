<?php
/*
 * Template Name: Single Post (2018 Test)
 * Template Post Type: post
 */
  
 get_header(); ?>
			
<div id="content">

	<div id="inner-content">

		<main id="main" class="row" role="main">
		
		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		    	<?php get_template_part( 'parts/loop', 'single2018' ); ?>
		    	
		    <?php endwhile; else : ?>
		
		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</main> <!-- end #main -->

		<div class="row footer-row columns large-8 medium-8 small-12 large-offset-2 medium-offset-2">
			<?php get_sidebar(); ?>
		</div><!-- end footer-row -->

	</div> <!-- end #inner-content -->

</div> <!-- end #content -->

<?php get_footer(); ?>