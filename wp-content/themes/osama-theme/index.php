<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package osama_Theme
 */

get_header();
?>
<div class="dez-bnr-inr overlay-black-middle" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/images/background/bg4.jpg);">
	<div class="container">
		<div class="dez-bnr-inr-entry">
			<h1 class="text-white">Blog single with left sidebar</h1>
		</div>
	</div>
</div>
<div class="content-area">
	<div class="container">
		<div class="row">
			<!-- Side bar start -->
			<div class="col-lg-3 col-md-4 col-sm-12">
				<aside class="side-bar">

					<div class="widget widget_categories">
						<h4 class="widget-title">Categories List</h4>
						<?php get_sidebar(); ?>
					</div>


				</aside>
			</div>
			<!-- Side bar END -->
			<!-- Left part start -->
			<div class="col-lg-9 col-md-8">
				<!-- blog start -->

				<?php
				if (have_posts()) :

					if (is_home() && !is_front_page()) :
				?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>
				<?php
					endif;

					/* Start the Loop */
					while (have_posts()) :
						the_post();

						/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
						get_template_part('template-parts/content', get_post_type());

					endwhile;

					the_posts_navigation();

				else :

					get_template_part('template-parts/content', 'none');

				endif;
				?>

			

				<!-- blog END -->
			</div>
			<!-- Left part END -->
		</div>
	</div>
</div>




<?php
get_footer();
