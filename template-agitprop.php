<?php
/*
Template Name: AgitProp (General)
*/
?>

<?php get_template_part( 'parts/header', 'agitprop' ); ?>
			
	<header id="masthead" class="grid grid-container">
		<div class="title width-6">
			<span class="parent-site-name bold">
				<?php 
					// get the page name
					$parent_title = get_the_title($post->post_parent);

					// display page name
					echo $parent_title;
					 
					// Use as a conditional tag
					// If pagent page is named Archives
					if($parent_title=="Archives"):
					    //do something
					else:
					    //do something else
					endif;
				?>
			</span>
			<nav aria-label="You are here:" role="navigation" class="top-bar">
				<small><?php if (function_exists('the_breadcrumb')) the_breadcrumb(); ?></small>
			</nav>
		</div>
		<div class="space width-6">
		</div>
	</header>

	


	<div id="content" class="grid grid-container">
	
		    <main id="main" class="cell width-12" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'pageagitprop' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
	
	</div> <!-- end #content -->

<?php get_template_part( 'parts/footer', 'agitprop' ); ?>