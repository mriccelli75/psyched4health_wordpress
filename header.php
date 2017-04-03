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

<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
	
	<!-- Font Awesome Icons -->
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome-ie7.min.css" rel="stylesheet">
	
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

				<div class="navbar-collapse collapse">
						<ul class="nav navbar-nav navbar-right">
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
							</a></li>
						</ul>
					</div>
				</div>
			</div>
		
		</div>
	</header>

	<div id="content" class="site-content">
