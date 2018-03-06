<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package canyon
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
 <div class="wrap">
          <header class="header">
            <div class="header-container ">
                
                <a href="<?php echo esc_url(home_url('/')); ?>" class="header-logo"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"></a>
                  <?php wp_nav_menu(array(
						'theme_location' => 'header',
						'menu_id' => 'header-menu',
						'container' => 'nav',
						'container_class' => 'header-menu',
						'container_id' => '',
						'menu_class' => 'header-menu-ul',
					));
					?>
                <div class="header-lang">
                    <a href="<?php echo esc_url(home_url('/home')); ?>">EN</a> |
                    <a href="<?php echo esc_url(home_url('/es/inicio')); ?>">ES</a>
                </div>
                <div class="header-social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
                    <a href="#"><i class="fa fa-tripadvisor"></i></a>
                </div>
                <button class="header-btn-menu" id="btn-menu">
                  <i class="fa fa-bars"></i>
                </button>
                
            </div>
            
        </header>
