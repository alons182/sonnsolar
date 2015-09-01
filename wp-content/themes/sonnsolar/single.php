<?php
/**
 * The template for displaying all single posts.
 *
 * @package fourenergy
 */

get_header(); ?>

	<section class="content">
        <div class="inner">

           <?php while ( have_posts() ) : the_post(); ?>
			
			<?php if ( get_post_type( $post ) == 'products' ) : ?>
				<?php get_template_part( 'template-parts/content', 'product' ); ?>
			
			<?php else : ?>
				<div class="posts-area">
					<?php get_template_part( 'template-parts/content', 'single' );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;?>
				</div>
			<?php
				 get_sidebar(); 
			endif; ?>


			


		<?php endwhile; // End of the loop. ?>
           
        </div>
    </section>


<?php get_footer(); ?>
