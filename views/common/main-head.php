<!DOCTYPE html>

<!--[if lt IE 7]><html {{site.language_attributes}} class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html {{site.language_attributes}} class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html {{site.language_attributes}} class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html {{site.language_attributes}} class="no-js"><!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // Google Chrome Frame for IE ?>

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<title><?php wp_title(''); ?></title>

	<script type="text/javascript">
		var domain = '<?php echo get_template_directory_uri(); ?>';
		var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
		var templateurl = '<?php echo get_template_directory_uri();  ?>';
	</script>

	<?php // mobile meta ?>

	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

	<!--[if IE]>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
	<![endif]-->

	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>

	<!--[if lt IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.2/html5shiv.js"></script><![endif]-->
</head>

<body <?php body_class(); ?>>
