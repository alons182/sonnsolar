<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package fourenergy
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if ( $post->ID == 28 ) //contact
  		{
  			get_template_part('template-parts/contact-map'); 
		}
		else
		{
		 	if ( has_post_thumbnail() ) :

	  	 	$id = get_post_thumbnail_id($post->ID);
	  	 	$thumb_url = wp_get_attachment_image_src($id,'full', true);
	  	 	?>
	    	
			<div class="content__banner" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
						
			<?php endif; 
		}
	?>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php if ( $post->ID == 28 ) //contact
  		{
  			get_template_part('template-parts/contact-social'); 
		}?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'fourenergy' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'fourenergy' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

