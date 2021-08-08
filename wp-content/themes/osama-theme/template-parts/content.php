<?php

/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package osama_Theme
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('blog-post blog-single'); ?>>
	<div class="blog-post blog-single">
		<?php
		if (is_singular()) :
			the_title('<div class="dez-post-title  "><h3 class="post-title">', '</h3></div>');
		else :
			the_title('<div class="dez-post-title "><h3 class="post-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3></div>');

		endif;
		edit_post_link(' Edit ', '<div> <i class="fa fa-pencil"></i>', '</div>');
		?>
		<!-- .entry-meta -->
	</div>
	<!-- .entry-header -->
	<?php if (has_post_thumbnail()) { ?>
		<div class="dez-post-media dez-img-effect zoom-slow">
			<?php the_post_thumbnail(); ?>
		</div>
		<div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="assets/images/blog/default/thum1.jpg" alt=""></a> </div>
	<?php } ?>


	<div class="dez-post-text">
		<?php the_excerpt(); ?>
	</div>
	<!-- .entry-content -->

	<footer class="entry-footer">
	<div class="dez-divider bg-gray-dark"></div>
	</footer>
	<!-- .entry-footer -->
</article>
<!-- #post-<?php the_ID(); ?> -->