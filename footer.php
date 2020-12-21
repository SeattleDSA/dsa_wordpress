				<footer class="footer padding-top hide-for-print" role="contentinfo">
					<div class="grid-container">
						<div id="dsa-footer" class="hide-for-print grid-x grid-margin-x grid-margin-y">
							<?php get_sidebar('footerLeft'); ?>
							<?php get_sidebar('footerRight'); ?>
						</div>
					</div><!-- end #dsaFooter-content widgets -->
					<div class="grid-container">
						<div id="inner-footer" class="grid-x grid-margin-x grid-margin-y">
							<div class="large-12 medium-12 cell hide-for-print">
								<nav role="navigation">
		    						<?php joints_footer_links(); ?>
		    					</nav>
								<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>.</p>
							</div>
						</div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .main-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
