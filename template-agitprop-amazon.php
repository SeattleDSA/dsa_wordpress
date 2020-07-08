<?php
/*
Template Name: AgitProp (General Theme)
*/
?>

<?php get_template_part( 'parts/header', 'agitprop' ); ?>
			
	<div id="content" class="grid-container">
	
		<div id="inner-content" class="grid-x grid-x-margin">
			
			<nav aria-label="You are here:" role="navigation" class="top-bar">
				<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
			</nav>
	
		    <main id="main" class="cell medium-12" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'pageagitprop' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_template_part( 'parts/footer', 'agitprop' ); ?>