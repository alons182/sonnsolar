<?php 
    /*
    Template Name: Page Home
     */
 ?>
<?php get_header(); ?>

  <section class="banner">
            <div class="banner__video">
              <video class="" preload="" loop="" autoplay poster="<?php echo get_template_directory_uri();  ?>/img/banner2.jpg">
                  <source src="<?php echo get_template_directory_uri();  ?>/img/home/banner.mp4" type="video/mp4">
                  <source src="<?php echo get_template_directory_uri();  ?>/img/home/banner.ogv" type="video/ogg">

              </video>   
            </div>
            <?php rewind_posts(); ?>
              <?php query_posts( 'post_type=page&page_id=200' ); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content', 'plain' ); ?>
        
                    <?php endwhile; ?>
                    <!-- post navigation -->
                  
                <?php endif; ?>
             
            
  </section>
  <section class="logos">
      <div class="inner">
          <div class="logos__container">
              <?php rewind_posts(); ?>
              <?php query_posts( 'post_type=page&page_id=185' ); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content', 'plain' ); ?>
        
                    <?php endwhile; ?>
                    <!-- post navigation -->
                  
                <?php endif; ?>
              
          </div>
          
      </div>
  </section>
  <section class="featured" id="featured">
      <h1 class="featured__title color">
          Productos Destacados
      </h1>
      <?php
          $args = array(
            'post_type' => 'products',
           'tax_query' => array(
              array(
                'taxonomy' => 'category_product',
                'field' => 'slug',
                'terms' => 'destacados'
              )
            )
            
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
                            <div class="featured__item__description"><?php the_excerpt(); ?></div>
                            <a href="<?php the_permalink(); ?>" class="featured__item__link"></a>
                        </div>
                    </div>
                    
                </article>        

     
                
              <?php
            }
          }
        ?>
      
  </section>
  <!--<section class="content">
      <div class="inner">
         
         
      </div>
  </section>-->
  <section class="call " style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/making-a-difference.jpg');">
      
          <?php rewind_posts(); ?>
              <?php query_posts( 'post_type=page&page_id=197' ); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                        <?php get_template_part( 'template-parts/content', 'plain' ); ?>
        
                    <?php endwhile; ?>
                    <!-- post navigation -->
                  
                <?php endif; ?>
      
  </section>

<?php get_footer(); ?>