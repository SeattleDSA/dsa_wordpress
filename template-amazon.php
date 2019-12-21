<?php
/*
Template Name: AgitProp (Amazon Theme)
*/
?>

<?php get_template_part( 'parts/header', 'amazon' ); ?>
			
	<div id="content" class="grid-container">
	
		<div id="inner-content" class="grid-x grid-x-margin">
			
			<nav aria-label="You are here:" role="navigation">
				<?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?>
			</nav>
	
		    <main id="main" class="cell medium-12" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'pageamazon' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_template_part( 'parts/footer', 'amazon' ); ?>