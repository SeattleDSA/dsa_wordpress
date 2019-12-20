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
		<!-- Google Tag Manager for Seattle DSA Only -->
			<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-WQX7PPW');</script>
		<!-- End Google Tag Manager -->
	</body>
</html> <!-- end page -->