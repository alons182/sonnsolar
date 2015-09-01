<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package fourenergy
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href='http://fonts.googleapis.com/css?family=Tinos|Open+Sans' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<header class="header">
    <div class="inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="header__logo"><img src="<?php echo get_template_directory_uri();  ?>/img/logo-white.png" alt="4Energy" class="header__logo__img" /></a>
        <?php
			wp_nav_menu(
				 array(
				 	'theme_location' => 'primary',
				 	'container'       => 'nav',
					'container_class' => 'header__menu',
					'container_id'    => '',
					'menu_class'      => 'header__menu__ul',
					'menu_id'         => '',
				 	 ) 

		);?>
        <button id="btn-menu" class="header__btn-menu"><i class="icon-menu"></i></button>
    </div>
</header>
<main class="main">
