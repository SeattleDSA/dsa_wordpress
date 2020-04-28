
<?php
/*
Part:	DSA Alert Box
Use:	Notifying members of emergencies, changes to established plans, or notices. Modal window on Homepage
*/
?>
<?php if ( get_post_meta($post->ID, '_dsa_alert_box', true) ) : ?><!-- Begin DSA Alert Box; Conditional -->
	<br>
	<div class="hide-for-medium dsa-space">&nbsp;</div>
	<div id="dsa-alert" class="dsa-alert grid-container grid-x grid-margin-x grid-margin-y" data-closable>
		<div class="cell large-2 medium-2 small-12 txt-center">
			<a class="icon-bullhorn h1 button close-button" aria-label="Close alert" type="button" data-close> </a>
		</div>
		<div class="cell large-8 medium-8 small-12 txt-center">
			<?php echo apply_filters('the_content', get_post_meta($post->ID, '_dsa_alert_box', true)); ?>
		</div>
		<div class="cell large-2 medium-2 small-12 txt-center">
			<a class="icon-checkbox h1 button close-button" aria-label="Close alert" type="button" data-close> </a>
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
	<div class="hide-for-large hide-for-medium dsa-space-2">&nbsp;</div>	
<?php endif; ?>