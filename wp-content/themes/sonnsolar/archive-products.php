<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package fourenergy
 */

get_header(); ?>

	<section class="content">
            
				 <h1 class="featured__title color">
			          Products
			      </h1>
			<?php
		          $args = array(
		            'post_type' => 'products',
		           
		            
		          );
		          $products = new WP_Query( $args );
		          if( $products->have_posts() ) {
		            while( $products->have_posts() ) {
		              $products->the_post();
		              ?>
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

		     
		                
		              <?php
		            }
		          }
		        ?>


			
	</section><!-- #primary -->


<?php get_footer(); ?>
