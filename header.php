<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title('-','true','LEFT'); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php 
			ob_start();
			dynamic_sidebar( "Phone Number Popup" ); 
			$popup_code_block = ob_get_contents(); 
			ob_end_clean(); 
			$popup_code_block = trim(preg_replace('/\s+/', ' ', $popup_code_block));
		?>
		<script type="text/javascript">
			var popupCode = '<?php echo $popup_code_block ?>';
		</script>
		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php require_once("library/google-analytics.php"); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="tel-test" style="display:none;">555 555 5555</div>
		<div class="container">
			<header class="header" role="banner">
				<div id="inner-header">
					<a class="col-xs-12 col-sm-5 logo" href="<?php echo home_url(); ?>" rel="nofollow">	<img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png"></a>
					<div class="col-xs-12 col-sm-7 header-left">
						<div class="call-to-action">
							Call us today - (360) 907-4470
						</div>
						<?php wp_nav_menu( array( 'theme_location' => 'main-nav', 'container_class' => 'nav' ) ); ?>
					</div>
				</div>
			</header>
		</div>