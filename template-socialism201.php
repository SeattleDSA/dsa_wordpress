<?php
/*
Template Name: Socialism 201
*/
?>

<?php get_header(); ?>
			
	<div id="content" class="grid-container">
	
		<div id="inner-content" class="grid-x grid-x-margin">
	
		    <main id="main" class="cell medium-12 dsa-readable" role="main">
				

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
						<header class="article-header">
							<h1 class="page-title"><?php the_title(); ?></h1>
						</header> <!-- end article header -->
										
					    <section class="entry-content" itemprop="articleBody">
						    <?php the_content(); ?>
						    <?php wp_link_pages(); ?>
						    <hr>
						    <div class="card">
								<blockquote id="qa-box">
								
								</blockquote>
								<button id="loadQA" class="button expand">Ask me more!</button>
							</div>

						    
						</section> <!-- end article section -->
											
						<footer class="article-footer">
							
						</footer> <!-- end article footer -->
											    
						<?php comments_template(); ?>
										
					</article> <!-- end article -->
					
				<?php endwhile; endif; ?>

				<script src="<?php echo get_template_directory_uri(); ?>/assets/js/qaData.js"></script>
				<script src="<?php echo get_template_directory_uri(); ?>/assets/js/qaScript.js"></script>					

			</main> <!-- end #main -->
		    
		</div> <!-- end #inner-content -->
	
	</div> <!-- end #content -->

<?php get_footer(); ?>