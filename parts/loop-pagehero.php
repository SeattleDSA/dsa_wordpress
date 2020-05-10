<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
						
	<header class="article-header sdsa-page-hero">
		<h1 class="page-title"><?php the_title(); ?></h1>
	</header> <!-- end article header -->
					
    <section class="entry-content" itemprop="articleBody">
	    <?php the_content(); ?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->
						
	<footer class="article-footer">
		
	</footer> <!-- end article footer -->

	<style>
		.article-header.sdsa-page-hero h1 {
			color: white;
			font-size: 3rem;
			text-align: center;
		}

		.article-header.sdsa-page-hero {
			background: linear-gradient(to right, #ec1f27aa,#ff1744aa), url('<?php the_post_thumbnail_url( $size ); ?>');
		}
	</style>
						    
	<?php comments_template(); ?>
					
</article> <!-- end article -->