<?php 
    /*
    Template Name: Page Home
     */
 ?>
<?php get_header(); ?>

  <section class="banner">
      <!--<div class="cycle-slideshow" 
                            data-cycle-fx="fade"
                            data-cycle-timeout="4000"
                            data-cycle-slides=".banner__slide"
                            >
                            
                            <div class="cycle-pager banner__pager"></div>

                            <div class="banner__slide" >
                                <img src="<?php echo get_template_directory_uri();  ?>/img/banner1.jpg" alt="Banner" />
                            </div>
                             <div class="banner__slide" >
                                <img src="<?php echo get_template_directory_uri();  ?>/img/banner2.jpg" alt="Banner" />
                            </div>
                            <div class="banner__slide" >
                                <img src="<?php echo get_template_directory_uri();  ?>/img/banner3.jpg" alt="Banner" />
                            </div>
                            <div class="banner__slide" >
                                <img src="<?php echo get_template_directory_uri();  ?>/img/banner4.jpg" alt="Banner" />
                            </div>
                        
                            
                        </div>   -->
            <div class="banner__video">
              <video class="" preload="" loop="" autoplay poster="<?php echo get_template_directory_uri();  ?>/img/banner2.jpg">
                  <source src="<?php echo get_template_directory_uri();  ?>/img/home/banner.mp4" type="video/mp4">
                  <source src="<?php echo get_template_directory_uri();  ?>/img/home/banner.ogv" type="video/ogg">

              </video>   
            </div>
             <span class="intro__label"><a href="#" title="Read More" class="intro__info__btn btn color wow fadeInRight anchor">Sobre Nosotros</a></span>
            
      <!--<div class="intro__layer-1">
          <div class="intro__content">
              <video class="" preload="" loop="">
                  <source src="<?php echo get_template_directory_uri();  ?>/img/home/residential.mp4" type="video/mp4">
                  <source src="<?php echo get_template_directory_uri();  ?>/img/home/residential.ogv" type="video/ogg">
                  
              </video>
              <a href="#"></a>
          </div>
          <span class="intro__label"><span>Soluciones Residenciales</span> <br/> <a href="#" title="Read More" class="intro__info__btn btn color wow fadeInRight anchor">Ver más</a></span>
      </div>
      <div class="intro__layer-2">
          <div class="intro__content">
              <video class="" preload="" loop="" >
                  <source src="<?php echo get_template_directory_uri();  ?>/img/home/industry.mp4" type="video/mp4">
                  <source src="<?php echo get_template_directory_uri();  ?>/img/home/industry.ogv" type="video/ogg">
                
              </video>
              <a href="#"></a>
          </div>
          <span class="intro__label"><span>Soluciones Industriales</span> <br/> <a href="#" title="Read More" class="intro__info__btn btn color wow fadeInRight anchor">Ver más</a></span>
      </div>
    
      <section class="intro__scroll">
          <div class="inner">
              <a href="#featured" class="intro__scroll__link anchor">Scroll To Learn More <i class="icon-caret-down"></i></a>
          </div>
      </section>-->
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

      <article class="featured__item">
          <div class="featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured/1.jpg');">                
          </div>
          <div class="overlay">
              <div class="featured__item__info">
                  <i class="icon-angle-down"></i>
                  <h1 class="featured__item__title">lorem ipsum</h1>
                  <p class="featured__item__description">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="featured__item__link"></a>
              </div>
          </div>
          
      </article>
      <!--<article class="featured__item">
          <div class="featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured/2.jpg');">                
          </div>
          <div class="overlay">
              <div class="featured__item__info">
                  <i class="icon-angle-down"></i>
                  <h1 class="featured__item__title">lorem ipsum</h1>
                  <p class="featured__item__description">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="featured__item__link"></a>
              </div>
          </div>
          
      </article>
      <article class="featured__item">
          <div class="featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured/5.jpg');">                
          </div>
          <div class="overlay">
              <div class="featured__item__info">
                  <i class="icon-angle-down"></i>
                  <h1 class="featured__item__title">lorem ipsum</h1>
                  <p class="featured__item__description">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="featured__item__link"></a>
              </div>
          </div>
          
      </article>
      <article class="featured__item">
          <div class="featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured/4.jpg');">                
          </div>
          <div class="overlay">
              <div class="featured__item__info">
                  <i class="icon-angle-down"></i>
                  <h1 class="featured__item__title">lorem ipsum</h1>
                  <p class="featured__item__description">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="featured__item__link"></a>
              </div>
          </div>
          
      </article>
      
      <article class="featured__item">
          <div class="featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured/6.jpg');">                
          </div>
          <div class="overlay">
              <div class="featured__item__info">
                  <i class="icon-angle-down"></i>
                  <h1 class="featured__item__title">lorem ipsum</h1>
                  <p class="featured__item__description">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="featured__item__link"></a>
              </div>
          </div>
          
      </article>
      <article class="featured__item">
          <div class="featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured/7.jpg');">                
          </div>
          <div class="overlay">
              <div class="featured__item__info">
                  <i class="icon-angle-down"></i>
                  <h1 class="featured__item__title">lorem ipsum</h1>
                  <p class="featured__item__description">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="featured__item__link"></a>
              </div>
          </div>
          
      </article>
      <article class="featured__item">
          <div class="featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured/8.jpg');">                
          </div>
          <div class="overlay">
              <div class="featured__item__info">
                  <i class="icon-angle-down"></i>
                  <h1 class="featured__item__title">lorem ipsum</h1>
                  <p class="featured__item__description">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="featured__item__link"></a>
              </div>
          </div>
          
      </article>
      <article class="featured__item">
          <div class="featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured/9.jpg');">                
          </div>
          <div class="overlay">
              <div class="featured__item__info">
                  <i class="icon-angle-down"></i>
                  <h1 class="featured__item__title">lorem ipsum</h1>
                  <p class="featured__item__description">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="featured__item__link"></a>
              </div>
          </div>
          
      </article>
      <article class="featured__item">
          <div class="featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured/10.jpg');">                
          </div>
          <div class="overlay">
              <div class="featured__item__info">
                  <i class="icon-angle-down"></i>
                  <h1 class="featured__item__title">lorem ipsum</h1>
                  <p class="featured__item__description">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="featured__item__link"></a>
              </div>
          </div>
          
      </article>
      <article class="featured__item">
          <div class="featured__item__img" style="background-image: url('<?php echo get_template_directory_uri();  ?>/img/featured/10.jpg');">                
          </div>
          <div class="overlay">
              <div class="featured__item__info">
                  <i class="icon-angle-down"></i>
                  <h1 class="featured__item__title">lorem ipsum</h1>
                  <p class="featured__item__description">Lorem ipsum dolor sit amet</p>
                  <a href="#" class="featured__item__link"></a>
              </div>
          </div>
          
      </article>-->
      
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
          <!--<div class="call__items">
              <article class="call__item">
                  <i class="icon-phone"></i>
                  <h2 class="call__item__title">Contacto</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda in nam illum</p>
              </article>
               <article class="call__item">
                  <i class="icon-truck"></i>
                  <h2 class="call__item__title">Visita Técnica</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda in nam illum</p>
              </article>
               <article class="call__item">
                  <i class="icon-history"></i>
                  <h2 class="call__item__title">Un dia de Instalación</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda in nam illum</p>
              </article>
               <article class="call__item">
                  <i class="icon-money"></i>
                  <h2 class="call__item__title">Ahora dinero</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda in nam illum</p>
              </article>
          </div>
          
          
          <a href="#" class="call__btn btn orangeColor">Comprar ahora financiación</a>-->
      
  </section>

<?php get_footer(); ?>