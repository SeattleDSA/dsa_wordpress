<?php
/*
Template Name: Documentation
*/
?>

<?php get_header(); ?>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/vendor/tocbot/tocbot.css"> <!-- include vendor/tocbot Table of Contents generator theme -->

	<div id="content" class="grid-container fluid">
	
		<div id="inner-content" class="grid-x grid-margin-x">

			<nav class="cell medium-4 large-3 table-of-contents" data-sticky-container role="sidebar">
				<div class="js-toc sticky" data-sticky data-margin-top="0" data-top-anchor="1" data-btm-anchor="main:bottom">
						&nbsp;
				</div>				
			</nav>
	
		    <main id="main" class="cell medium-8 large-9 dsa-readable js-toc-content" role="main">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<?php get_template_part( 'parts/loop', 'documentation' ); ?>
					
				<?php endwhile; endif; ?>							

			</main> <!-- end #main -->
	    	
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

	<script src="<?php echo get_template_directory_uri(); ?>/vendor/tocbot/tocbot.min.js"></script> <!-- include vendor/tocbot Table of Contents generator script -->
	<script type="text/javascript">
		tocbot.init({
			// Where to render the table of contents.
			tocSelector: '.js-toc',
			// Where to grab the headings to build the table of contents.
			contentSelector: '.js-toc-content',
			// Which headings to grab inside of the contentSelector element.
			headingSelector: 'h1, h2, h3',
			// For headings inside relative or absolute positioned containers within content.
			hasInnerContainers: true
		});
	</script>

<?php get_footer(); ?>
