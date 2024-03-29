<?php
/*
Template Name: Hompage - Any Chapter
*/
?>

<?php get_header(); ?>

	<div id="content" class="grid-x grid-margin-x">
		<div class="cell small-12">
			<?php get_sidebar('alertmessage'); ?>
		</div>
		<div class="grid-x grid-margin-x cell medium-10 medium-offset-1 align-middle">
			<div class="cell large-6 medium-4 small-10">
				<?php if( !empty(get_the_post_thumbnail()) ) { ?>
			    	<?php the_post_thumbnail('large');?>
				<?php } else { ?>
			    	<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui-foregrounds/mobile-mural.png" />
				<?php } ?>
			</div>
			<div class="cell large-6 medium-8 small-12"><!-- Begin Main Content-->
	    		<div class="card">
	    			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php get_template_part( 'parts/loop', 'pagealt' ); ?> <!-- Editable Main Page Area -->
					<?php endwhile; endif; ?>
				</div>
		    </div>
		</div>
	</div><!-- end diorama -->
    <div class="grid-x grid-margin-x align-middle" id="dsa-newsletter">
      	<?php get_sidebar('featuredhomepagearea'); ?>
      	<?php get_sidebar('emailhomepagearea'); ?>
        <?php get_sidebar('beliefshomepagearea'); ?>
    </div><!-- end top half -->
	
	
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
