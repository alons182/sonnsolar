<?php
/**
 * The template for displaying Category products
 *
 * 
 *
 * @package fourenergy
 */

get_header(); ?>

	<section class="content">
            
				
	         <?php
				the_archive_title( '<h1 class="featured__title color">', '</h1>' );
				?>
			      
			<?php if ( have_posts() ) : ?>
				

				<?php while ( have_posts() ) : the_post(); ?>

							<article class="featured__item">
		                <?php if ( has_post_thumbnail() ) :

		                    $id = get_post_thumbnail_id($post->ID);
		                    $thumb_url = wp_get_attachment_image_src($id,'products-thumb', true);
		                    ?>
		                    
		                  <div class="featured__item__img" style="background-image: url('<?php echo $thumb_url[0] ?>');"></div>
		                        
		                <?php endif; ?>
		                    
		                    <div class="overlay">
		                        <div class="featured__item__info">
		                            <i class="icon-angle-down"></i>
		                            <h1 class="featured__item__title"><?php the_title(); ?></h1>
		                            <p class="featured__item__description"><?php the_excerpt(); ?></p>
		                            <a href="<?php the_permalink(); ?>" class="featured__item__link"></a>
		                        </div>
		                    </div>
		                    
		                </article>      

						<?php endwhile; ?>

						

					<?php else : ?>

						<?php get_template_part( 'template-parts/content', 'none' ); ?>

					<?php endif; ?>
		          
		     
		          
		     


			
	</section><!-- #primary -->


<?php get_footer(); ?>
