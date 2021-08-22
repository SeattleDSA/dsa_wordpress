<?php
/*
Template Name: Committee Pages
*/
?>

<?php get_header(); ?>
	<?php get_sidebar('alertmessage'); ?>
	<div id="content" class="grid-container">

		<nav aria-label="You are here:" role="navigation" class="grid-x grid-margin-x hide-for-print">
			<div class="cell small-12 hide-for-print">
				<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
			</div>
		</nav>
	
		<div id="inner-content" class="grid-x grid-margin-x">
	
		    <main id="main" class="cell large-12 medium-12 small-12" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'page' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>
