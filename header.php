<?php
/**
 * Theme Header
 *
 * @package watbbase
 */
?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		
		<meta name="author" content="Guilherme Barchik">
		<meta name="generator" content="Brackets">
		
		<meta name="description" content="">
		
		<meta name="apple-mobile-web-app-title" content="">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">

		<link rel="apple-touch-icon" href="assets/images/icons/touch-icon-iphone.png">
		<link rel="apple-touch-icon" sizes="76x76" href="assets/images/icons/touch-icon-ipad.png">
		<link rel="apple-touch-icon" sizes="120x120" href="assets/images/icons/touch-icon-iphone-retina.png">
		<link rel="apple-touch-icon" sizes="152x152" href="assets/images/icons/touch-icon-ipad-retina.png">
		
		<?php wp_head(); ?>
	</head>
	
	<body <?php body_class(); ?>>
		<div class="pre-load"></div>
		<!--[if lt IE 8]>
			<p class="browsehappy">Você está usando uma versão <strong>desatualizada</strong> do navegador. Por favor <a href="http://browsehappy.com/">atualize seu navegador</a> para aprimorar sua experiência.</p>
		<![endif]-->
		
		<header class="site-header" role="banner">
		
		</header><?php // End .site-header ?>
		
		<div id="content" class="site-content">