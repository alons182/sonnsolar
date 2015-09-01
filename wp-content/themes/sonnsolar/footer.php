<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package fourenergy
 */

?>

	</main><!-- #main -->
	<footer class="footer">
        <div class="inner">
            <a href="#" class="footer__logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo-white.png" alt="4Energy" /></a>
            
            <div class="footer__social">
                 <a href="#" class="footer__social__link"><i class="icon-facebook"></i></a>
                 <a href="#" class="footer__social__link"><i class="icon-twitter"></i></a>
                 <a href="#" class="footer__social__link"><i class="icon-google-plus"></i></a>
                 <a href="#" class="footer__social__link"><i class="icon-youtube"></i></a>
            </div>
           
            <?php
			wp_nav_menu(
				 array(
				 	'theme_location' => 'secondary',
				 	'container'       => 'nav',
					'container_class' => 'footer__menu',
					'container_id'    => '',
					'menu_class'      => 'footer__menu__ul',
					'menu_id'         => '',
				 	 ) 

			);?>
            <div class="footer__copyright">
                <p>Copyright &copy; <a href="http://avotz.com" target="_blank"><i class="icon-avotz"></i></a></p>
            </div>
        </div>
    </footer>
    <?php get_template_part( 'template-parts/mini-contact');?>
	

<?php wp_footer(); ?>

</body>
</html>
