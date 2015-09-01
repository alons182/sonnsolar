<?php
/**
 * Template part for displaying single posts.
 *
 * @package fourenergy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) :

	  	 	$id = get_post_thumbnail_id($post->ID);
	  	 	$thumb_url = wp_get_attachment_image_src($id,'full', true);
	  	 	?>
	    	
			<div class="entry-image" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
						
	<?php endif; ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php fourenergy_posted_on(); ?>
			<?php echo do_shortcode ('[post-views]');?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fourenergy' ),
				'after'  => '</div>',
			) );
		?>
		<?php
		

	?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fourenergy_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
<section class="author-area">
	<?php // Author bio.
		if ( is_single() /*&& get_the_author_meta( 'description' )*/ ) :
			get_template_part( 'template-parts/author-bio' );
		endif;
		?>
</section>
<section class="related-posts-area">
	<?php if ( is_single()) :
     		 wp_related_posts(); 
		endif;
		?>
</section>



