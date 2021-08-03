<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package osama_Theme
 */

?>
					


					<div class="dez-post-media dez-img-effect zoom-slow"> <a href="#"><img src="assets/images/blog/default/thum1.jpg" alt=""></a> </div>
					<div class="dez-post-text">
					</div>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="blog-post blog-single">

		<?php
		
		if ( is_singular() ) :
			the_title( '<div class="dez-post-title "><h3 class="post-title">', '</h3></div>' );
		else :
			the_title( '<div class="dez-post-title "><h3 class="post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3></div>' );
		endif;
		

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				<?php
				osama_theme_1_0_posted_on();
				osama_theme_1_0_posted_by();
				?>
			</div><!-- .entry-meta -->
			
		<?php endif; ?>
		</div><!-- .entry-header -->

	<?php osama_theme_1_0_post_thumbnail(); ?>

	
	<?php if (has_post_thumbnail()) {?>

	 <div class="dez-post-media dez-img-effect zoom-slow"> 
		 <?php the_post_thumbnail(); ?>
		 <!-- <img src="<?php bloginfo('template_directory'); ?>/assets/images/blog/default/thum1.jpg" alt="">  -->
		</div>
		<?php } ?>


	<div class="dez-post-text">
	<?php the_excerpt(); ?>
	</div>
	<!-- .entry-content -->

	<footer class="entry-footer">
		<?php osama_theme_1_0_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article>
<!-- #post-<?php the_ID(); ?> -->
