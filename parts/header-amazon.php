<!doctype html>

  <html class="no-js"  <?php language_attributes(); ?>>

	<head>
		<meta charset="utf-8">
		
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
			<!-- Icons & Favicons -->
			<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png">
			<!--[if IE]>
				<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon.ico">
			<![endif]-->
			<meta name="msapplication-TileColor" content="#ec1f27">
	    	<meta name="theme-color" content="#ec1f27">
			<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/apple-touch-icon.png" />
			<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/favicon-32x32.png" sizes="32x32" />
			<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon/android-chrome-512x512.png" sizes="512x512" />
			
	    <?php } ?>

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">


		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/foundation-sites/dist/css/foundation.min.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/inter/inter.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/vendor/amazonfont/amazonfont.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/amazon.min.css" />
		
		<?php
			wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/dist/what-input.min.js', array(), '', true );
		    // Adding Foundation scripts file in the footer
		    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/vendor/foundation-sites/dist/js/foundation.min.js', array( 'jquery' ), '6.6.1', true );
		    // Adding scripts file in the footer
		    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );
    	?>

		<!-- Drop Google Analytics here -->
		<!-- end analytics -->

	</head>
		
	<body <?php body_class('agitprop-theme'); ?>>
		
		