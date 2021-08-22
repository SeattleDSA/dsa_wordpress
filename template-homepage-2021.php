<?php
/*
Template Name: Hompage 2021
*/
?>

<?php get_header(); ?>

	<div id="content">
		<?php get_sidebar('alertmessage'); ?>
		<div class="grid-container grid-x featuredDioramaContainer">
			<?php if( !empty(get_the_post_thumbnail()) ) { ?>
			    <?php the_post_thumbnail('large');?>
			<?php } else { ?>
			    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ui-foregrounds/mobile-mural.png" class="featuredDiorama" />
			<?php } ?>
		</div>
		<div class="grid-container grid-x">
			<div class="cell large-12 medium-12 small-12"><!-- Begin Main Content-->
		  	  	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php get_template_part( 'parts/loop', 'pagealt' ); ?> 
				<?php endwhile; endif; ?>	
			</div>
		</div>	
	</div> <!-- end #content -->

<?php get_footer(); ?>