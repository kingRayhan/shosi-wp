<?php echo get_template_part( 'template-parts/featured-posts' ); ?>
<?php get_header(); ?>
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
