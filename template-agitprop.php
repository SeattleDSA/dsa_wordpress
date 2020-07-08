<?php
/*
Template Name: AgitProp (General)
*/
?>

<?php get_template_part( 'parts/header', 'agitprop' ); ?>
			
	<header id="masthead">
		<div class="title">
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
	</header>

	


	<div id="content" class="grid-container">
	
		<div id="inner-content" class="grid-x grid-x-margin">
			
			
	
		    <main id="main" class="cell medium-12" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'pageagitprop' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_template_part( 'parts/footer', 'agitprop' ); ?>