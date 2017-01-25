				<footer class="footer" role="contentinfo">
					<div id="dsa-footer" class="row">
						<?php get_sidebar('dsa1of4'); ?>
						<?php get_sidebar('dsa2of4'); ?>
						<?php get_sidebar('dsa3of4'); ?>
						<?php get_sidebar('dsa4of4'); ?>
					</div><!-- end #dsaFooter-content widgets -->
					<div id="inner-footer" class="row">
						<div class="large-12 medium-12 columns">
							<nav role="navigation">
	    						<?php joints_footer_links(); ?>
	    					</nav>
	    				</div>
						<div class="large-12 medium-12 columns">
							<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
						</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->