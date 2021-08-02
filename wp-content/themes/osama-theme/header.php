<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package osama_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">


	<link rel="icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('template_directory'); ?>/assets/images/favicon.png" />


	<!-- MOBILE SPECIFIC -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->

	<!-- STYLESHEETS -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/plugins.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/style.min.css">
	<link class="skin" rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/skin/skin-1.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/templete.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/assets/css/style-rtl.css">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e('Skip to content', 'osama-theme-1-0'); ?></a>

		<header class="site-header header mo-left header-style-1">
			<!-- top bar -->
			<div class="top-bar no-skew">
				<div class="container">
					<div class="row d-flex justify-content-between">
						<div class="dez-topbar-left">
							<ul class="social-bx list-inline pull-left">
								<li><a href="javascript:void(0);"><i class="fa fa-phone"></i> +966 012 572 2727</a></li>
								<li><a href="javascript:void(0);" class="fa fa-envelope"></a> info@example.com</li>
							</ul>
						</div>

						<div class="dez-topbar-right">
							<ul class="social-bx list-inline pull-right">
								<li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
								<li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
								<li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
								<li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
								<li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
								<li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- top bar END-->


			<!-- main header -->
			<div class="sticky-header main-bar-wraper navbar-expand-lg">
				<div class="main-bar clearfix ">
					<div class="container clearfix">
						<!-- website logo -->
						<div class="logo-header mostion dark">
							<a href="index.html">
								<img src="<?php bloginfo('template_directory'); ?>/assets/images/e-logo-01.svg" width="193" height="89" alt="">
							</a>
						</div>
						<!-- nav toggle button -->
						<button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
							<span></span>
							<span></span>
							<span></span>
						</button>
						<!-- extra nav -->
						<div class="extra-nav">
							<div class="extra-cell">
								<button id="quik-search-btn" type="button" class="site-button"><i class="fa fa-search"></i></button>
							</div>
						</div>
						<!-- Quik search -->
						<div class="dez-quik-search bg-primary">
							<form action="#">
								<input name="search" value="" type="text" class="form-control" placeholder="البحث">
								<span id="quik-search-remove"><i class="fa fa-remove"></i></span>
							</form>
						</div>
						<!-- main nav -->

					

						<div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
						<?php
							wp_nav_menu(array(
								// 'menu'              => "", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
								// 'menu_id'           => "", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
								// 'theme_location'    => "Primary", // (string) Theme location to be used. Must be registered with register_nav_menu() in order to be selectable by the user.
								'menu_class'        => "nav navbar-nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
								'container'         => "ul", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
								'container_class'   => "navbar-collapse collapse", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.

								// 'container_id'      => "", // (string) The ID that is applied to the container.
								// 'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
								// 'before'            => "", // (string) Text before the link markup.
								// 'after'             => "", // (string) Text after the link markup.
								// 'link_before'       => "", // (string) Text before the link text.
								// 'link_after'        => "", // (string) Text after the link text.
								// 'echo'              => "", // (bool) Whether to echo the menu or return it. Default true.
								// 'depth'             => "", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
								// 'walker'            => "", // (object) Instance of a custom walker class.
								// 'items_wrap'        => "", // (string) How the list items should be wrapped. Default is a ul with an id and class. Uses printf() format with numbered placeholders.
								// 'item_spacing'      => "", // (string) Whether to preserve whitespace within the menu's HTML. Accepts 'preserve' or 'discard'. Default 'preserve'.

							))

							?>
						
                      



                    </div>


					</div>
				</div>
			</div>
			<!-- main header END -->

		</header>
		<!-- #masthead -->