<?php
/*
Template Name: Homepage - Seattle DSA
*/
?>

<?php get_header(); ?>
<?php get_sidebar('alertmessage'); ?>
	<div id="content">
		<div class="sdsa-2017-frontispiece bg-light">

		  <article class="essay">
		    <div class="grid-container">
		    	<div class="grid-x grid-margin-x">
		        	<div class="plate card cell large-offset-6 large-6 medium-offset-3 medium-9 small-12"><!-- Begin Main Content-->
		        		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php get_template_part( 'parts/loop', 'pagealt' ); ?> 
						<?php endwhile; endif; ?>	
		        	</div>
		      </div>
		    </div>
		  </article><!-- end article -->

		  <div class="diptych">
		    <div class="dsa-widgetRow">
		      <div class="grid-x grid-margin-x align-middle">
		      	<?php get_sidebar('featuredhomepagearea'); ?>
		      	<?php get_sidebar('emailhomepagearea'); ?>
		        <?php get_sidebar('beliefshomepagearea'); ?>
		      </div><!-- end cards -->
		    </div><!-- end bound -->
		  </div><!-- end diptych -->
		</div><!-- end sdsa-2017-frontispiece -->
	
		<div class="grid-x grid-margin-x grid-margin-y align-top bg-light">
			<div id="dsa-events" class="cell large-6 small-12">
				<?php get_template_part( 'parts/content', 'events' ); ?> <!-- see /parts/content-events.php -->
			</div> 

			<div id="dsa-posts" class="cell large-6 small-12">
				<?php get_template_part( 'parts/content', 'dispatches' ); ?> <!-- see /parts/content-dispatches.php -->
			</div>
		</div>
	</div> <!-- end #content -->

<?php get_footer(); ?>
