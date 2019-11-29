<?php get_header(); ?>
			
	<div class="grid-container">

		<div id="inner-content" class="grid-x grid-margin-x">
	
			<main id="main" class="large-6 medium-8 cell" role="main">

				<article id="content-not-found">
				
					<header class="article-header">
						<h1><?php _e( '404 Error, Comrade - Article Not Found &/or Expropriated by Bourgeoisie', 'jointswp' ); ?></h1>
					</header> <!-- end article header -->
			
					<section class="entry-content">
						<p><?php _e( 'The article you were looking for was not found, but maybe try looking again!', 'jointswp' ); ?></p>
					</section> <!-- end article section -->

					<section class="search">
					    <p><?php get_search_form(); ?></p>
					</section> <!-- end search section -->
			
				</article> <!-- end article -->
	
			</main> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>