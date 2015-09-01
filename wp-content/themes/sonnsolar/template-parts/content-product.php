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
    	
		<div class="content__banner" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
					
	<?php endif; ?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fourenergy' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php fourenergy_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
