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
                        <ul class="nav navbar-nav">
                            <li class="active"> <a href="javascript:;">الرئيسية<i class="fa fa-chevron-down"></i></a></li>
                            <li class="has-mega-menu"> <a href="javascript:;">الإمارة<i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu">
                                    <li>
                                        <ul>
											<li><a href="full-page-gallery-light.html">الأخبار</a></li>
                                            <li><a href="gallery-grid-2.html">الهيكل التنظيمي</a></li>
											<li><a href="gallery-grid-3.html">دليل الإجراءات</a></li>
                                            <li><a href="gallery-grid-4.html">مجلة مكة</a></li>
										</ul>
                                    </li>
									<li>
										<ul>
											<li><a href="coming-soon-5.html">أمراء منطقة مكة</a></li>
											<li><a href="coming-soon-6.html">ملتقى مكة الثقافي</a></li>
											<li><a href="coming-soon-7.html">هيئة تطوير منطقة مكة</a></li>
											<li><a href="coming-soon-8.html">جائزة مكة للتميز</a></li>
										</ul>
									</li>
                                </ul>
                            </li>

                            <li> <a href="javascript:;">الخدمات الإلكترونية<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">استعلام عن معاملة</a></li>
                                    <li><a href="index-2.html">خدمة تواصل الإلكترونية</a></li>
                                    <li><a href="index.html">التحقق من وثائق منسوبي إمارة مكة</a></li>
                                </ul>
                            </li>

                            <li class="has-mega-menu "> <a href="javascript:;">المحافظات <i class="fa fa-chevron-down"></i></a>
                                <ul class="mega-menu">
                                    <li>
                                        <ul>
                                            <li><a href="about-1.html">مكة المكرمة</a></li>
                                            <li><a href="about-2.html">محافظة جدة</a></li>
											
										</ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="about-1.html">مكة المكرمة</a></li>
                                            <li><a href="about-2.html">محافظة جدة</a></li>
											
										</ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="about-1.html">مكة المكرمة</a></li>
                                            <li><a href="about-2.html">محافظة جدة</a></li>
											
										</ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li><a href="about-1.html">مكة المكرمة</a></li>
                                            <li><a href="about-2.html">محافظة جدة</a></li>
											
										</ul>
                                    </li>
                                </ul>
                            </li>
                        
                         
                        </ul>
                    </div>


                


					</div>
				</div>
			</div>
			<!-- main header END -->

		</header>
		<!-- #masthead -->