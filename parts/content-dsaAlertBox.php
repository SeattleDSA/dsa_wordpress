
<?php
/*
Part:	DSA Alert Box
Use:	Notifying members of emergencies, changes to established plans, or notices. Modal window on Homepage
*/
?>
<?php if ( get_post_meta($post->ID, '_dsa_alert_box', true) ) : ?><!-- Begin DSA Alert Box; Conditional -->
	<br>
	<div class="hide-for-large dsa-space">&nbsp;</div>
	<div id="dsa-alert" class="dsa-alert card dark grid-x grid-margin-x grid-margin-y" data-closable>
		
		<div class="cell large-1 medium-2 small-3">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/bullhorn.svg" />
		</div>
		
		<div class="cell large-10 medium-8 small-6">
			<?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_alert_box', true)); ?>
		</div>

		<div class="cell large-1 medium-2 small-3">
			<button id="dsa-hide" class="dsa-close cell large-1" aria-label="Dismiss alert" data-close>
					<span aria-hidden="true">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/white/checkbox-x.svg" />
					</span>
				</button>
			</div>
	</div>
	<script>
		jQuery(document).ready(function(){
		    jQuery("#dsa-hide").click(function(){
		        jQuery("#dsa-alert").hide();
		    });
		});
	</script>
<?php else: ?>
	<div class="hide-for-large dsa-space-2">&nbsp;</div>	
<?php endif; ?>