<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SHOSI_-_Elegant_Blog_Theme
 */
?>
<?php get_header(); ?>
      <!--==========================================================-->
      <!-- Page Content area start -->
      <!--==========================================================-->
      <section class="page-content">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
					<div class="error-page-content">
						<h1 class="error"><?php echo esc_html__( '404', 'wp_shosi' ); ?></h1>
						<h2 class="error-title"><?php echo esc_html__( 'Page Not Found', 'wp_shosi' ); ?></h2>
						<span class="go-home"><a href="<?php echo esc_url( get_home_url() ); ?>"><?php echo esc_html__( 'Go Homepage', 'wp_shosi' ); ?></a></span>
					</div>
               </div>
            </div>
         </div>
      </section>
      <!--==========================================================-->
      <!-- Page Content area End -->
      <!--==========================================================-->
<?php get_footer(); ?>

