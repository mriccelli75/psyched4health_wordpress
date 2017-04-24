<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package pysched4health_2017
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

	<meta name="description" content="Psyched 4 Health by Tabitha Brown. Married, mother of 2 children, workout as a hobby, was never an athlete as a child or adolescent, but now teach group fitness, primary job is school psychologist/studying to be licensed psychologist, wanting to help people to help themselves live a more healthy lifestyle.">
	<meta name="author" content="tabitha brown">
		<link rel="apple-touch-icon" sizes="57x57" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/favicon-16x16.png">
		<link rel="manifest" href="<?php bloginfo('stylesheet_directory'); ?>/assets/img/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="<?php bloginfo('stylesheet_directory'); ?>/assets/img/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

	
	
	<!-- Font Awesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	
	
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Open+Sans:400,600" rel="stylesheet">

	<?php wp_head(); ?>


	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'pysched4health_2017' ); ?></a>

	<header class="site-header" role="banner">
		
		<!-- NAVBAR
		================================================== -->
		<div class="navbar-wrapper">
			<div class="navbar navbar-default navbar-fixed-top" role="navigation">
					<div class="container">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<a class="navbar-brand" href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/psyched_4_health_logo.svg" alt="Psyched 4 Health"></a>
							</div><!-- navbar-header-->

								<!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
							<div class="navbar-collapse collapse">

									<?php 
										wp_nav_menu( array(
											'theme_location'	=> 'primary',
											'container'				=> 'false',
											'container_class'	=>	'navbar-collapse collapse',
											'menu_class'			=>	'nav navbar-nav navbar-right'
										) );
									?>
								<!--<ul class="nav navbar-nav navbar-right">
										<li>
											<a href="index.html">
											<img src="assets/img/fitness_icon.svg" alt="Fitness">Fitness
											</a>
										</li>
										<li class="active">
											<a href="blog.html"><img src="assets/img/focus_icon.svg" alt="Focus">Focus
											</a>
										</li>
										<li><a href="resources.html">
											<img src="assets/img/food_icon.svg" alt="Food">Food
										</a>
										</li>
										<li><a href="contact.html"><img src="assets/img/family_icon.svg" alt="Family">Family/Fun
										</a>
										</li>
								</ul>-->
								
							</div><!-- navbar-collapse collapse -->
					</div><!-- container -->
			</div><!-- navbar-fixed-top -->
		</div><!-- navbar-wrapper -->
	</header>

	<div id="content" class="site-content">




				