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
            <ul>
               <li>
                  <a href="index.html">Home</a>
                  <ul>
                     <li><a href="index.html">Homepage 1</a></li>
                     <li><a href="blog2.html">Homepage 2</a></li>
                     <li><a href="blog3.html">Homepage 3</a></li>
                  </ul>
               </li>
               <li><a href="404.html">404</a></li>
               <li>
                  <a href="about1.html">About</a>
                  <ul>
                     <li><a href="about1.html">About 1</a></li>
                     <li><a href="about2.html">About 2</a></li>
                     <li><a href="about3.html">About 3</a></li>
                  </ul>
               </li>
               <li>
                  <a href="single1.html">Single</a>
                  <ul>
                     <li><a href="single1.html">Single 1</a></li>
                     <li><a href="single2.html">Single 2</a></li>
                     <li><a href="single3.html">Single 3</a></li>
                  </ul>
               </li>
               <li>
                  <a href="video1.html">Video</a>
                  <ul>
                     <li><a href="video1.html">Video 1</a></li>
                     <li><a href="video2.html">Video 2</a></li>
                     <li><a href="video3.html">Video 3</a></li>
                  </ul>
               </li>
               <li>
                  <a href="contact1.html">Contact</a>
                  <ul>
                     <li><a href="contact1.html">Contact 1</a></li>
                     <li><a href="contact2.html">Contact 2</a></li>
                     <li><a href="contact3.html">Contact 3</a></li>
                  </ul>
               </li>
            </ul>
         </nav><!-- .mobile-menu.hidden -->
         <!--==========================================================-->
         <!-- Mobile Menu end -->
         <!--==========================================================-->
      </header>
	  <?php echo get_template_part( 'template-parts/featured-posts' ); ?>