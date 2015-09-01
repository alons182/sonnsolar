<?php
/**
 * Template part for displaying posts.
 *
 * @package fourenergy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( has_post_thumbnail() ) :

	  	 	$id = get_post_thumbnail_id($post->ID);
	  	 	$thumb_url = wp_get_attachment_image_src($id,'full', true);
	  	 	?>
	    	<div class="entry-image-container">	
				<div class="entry-image" style="background-image: url('<?php echo $thumb_url[0] ?>');"><a href="<?php the_permalink(); ?>"></a></div>
			</div>		
			
						
	<?php endif; ?>
	<header class="entry-header">
		<?php the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php fourenergy_posted_on(); ?>
			<?php echo do_shortcode ('[post-views]');?>
			
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				wp_kses( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'fourenergy' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>

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
