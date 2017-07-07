<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SHOSI_-_Elegant_Blog_Theme
 */
get_header(); ?>
	  <header class="page-header">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<?php
							the_archive_title( '<h1 class="page-title">', '</h1>' );
							the_archive_description( '<div class="archive-description">', '</div>' );
						?>
					</div>
				</div>
		   </div>
	  </header><!-- .page-header -->
      <!--==========================================================-->
      <!-- Page Content area start -->
      <!--==========================================================-->
      <section class="page-content">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
               <?php
               if ( have_posts() ) :

                  /* Start the Loop */
                  while ( have_posts() ) : the_post();

                     get_template_part( 'template-parts/content', 'loop' );

                  endwhile;

                  the_posts_navigation();

               else :

                  get_template_part( 'template-parts/content', 'none' );

               endif; ?>
                  <?php echo get_template_part( 'template-parts/pagination' ); ?>
               </div>
               <div class="col-md-4">
                   <?php get_sidebar('right'); ?>    
               </div>
            </div>
         </div>
      </section>
      <!--==========================================================-->
      <!-- Page Content area End -->
      <!--==========================================================-->
<?php get_footer(); ?>
