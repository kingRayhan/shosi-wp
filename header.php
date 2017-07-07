<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SHOSI_-_Elegant_Blog_Theme
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
<div id="page" class="site">
	<div id="content" class="site-content">
      <header class="main-header">
         <div class="logo container">
            <a href="<?php home_url(); ?>">
               <h1><?php bloginfo( 'name' ); ?></h1>
            </a>
         </div>
         <!--==========================================================-->
         <!-- Main Menu start -->
         <!--==========================================================-->
         <div class="menu">
            <div class="container">
               <div class="main-menu">
                  <nav id="nav">
                     <?php    
                     /**
                        * Displays a navigation menu
                        * @param array $args Arguments
                     */
                        $args = array(
                           'theme_location' => 'menu-1',
                           'container' => 'ul',
                           'menu_class' => 'menu_wrapper',

                        );
                     
                        wp_nav_menu( $args ); ?>
                  </nav>
               </div>
            </div>
         </div><!-- .menu -->
         <!--==========================================================-->
         <!-- Main Menu end -->
         <!--==========================================================-->
         <!--==========================================================-->
         <!-- Mobile Menu start -->
         <!--==========================================================-->
         <nav class="mobile-menu hidden">
            <?php    
            /**
               * Displays a navigation menu
               * @param array $args Arguments
            */
               $args = array(
                  'theme_location' => 'menu-1',
                  'container' => 'ul',
                  'menu_class' => 'menu_wrapper',

               );
            
               wp_nav_menu( $args ); ?>
         </nav><!-- .mobile-menu.hidden -->
         <!--==========================================================-->
         <!-- Mobile Menu end -->
         <!--==========================================================-->
      </header>
	  <?php echo get_template_part( 'template-parts/featured-posts' ); ?>