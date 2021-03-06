<!DOCTYPE HTML>
<!--[if IEMobile 7 ]><html class="no-js iem7" manifest="default.appcache?v=1"><![endif]--> 
<!--[if lt IE 7 ]><html class="no-js ie6" lang="en"><![endif]--> 
<!--[if IE 7 ]><html class="no-js ie7" lang="en"><![endif]--> 
<!--[if IE 8 ]><html class="no-js ie8" lang="en"><![endif]--> 
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html class="no-js" lang="en"><!--<![endif]-->
	<head>
		<title><?php bloginfo( 'name' ); ?><?php wp_title( '|' ); ?></title>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
	  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"><!-- Remove if you're not building a responsive site. (But then why would you do such a thing?) -->
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico"/>
		<script type="text/javascript" src="//use.typekit.net/cst8qzn.js"></script>
		<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
		<script type="text/javascript" src"<?php echo get_stylesheet_directory_uri().'/js/vendors/jquery-ui-1.10.0.custom.min.js'?>"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'/bower_components/normalize-css/normalize.css'?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'/bower_components/dont_over_think_it/css/grid.css'?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'/styles/main.css'?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'/style.css'?>">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri().'/bower_components/ionicons/css/ionicons.min.css'?>">
		<link rel="stylesheet" type="text/css" href="http://flexslider.woothemes.com/css/flexslider.css">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>