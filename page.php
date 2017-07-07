<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package SHOSI_-_Elegant_Blog_Theme
 */


get_header(); ?>

	

		<!--==========================================================-->
      <!-- Page Content area start -->
      <!--==========================================================-->
      <section class="page-content">
        <div class="container">
            <div class="row">
	                <div class="col-md-8">
		               	<div class="single-page-content">
		                	<!--=========== Title and meta ===========-->
		                	<div class="blog-title-and-meta text-center">
		                        <div class="post-title">
		                           <h3><?php the_title();?></h3>
		                        </div>
		                        <div class="post-meta">
		                           <span><?php the_time( 'F j Y' ); ?>  in </span>
		                           <span><a href="#"><?php the_category( ', ' ); ?></a> by </span>
		                           <span><?php the_author_link(); ?></span>
		                        </div>
		                    </div>
		                    <!-- .blog-title-and-meta -->
			               <?php
			               if ( have_posts() ) :

			                  /* Start the Loop */
			                  while ( have_posts() ) : the_post();

			                     get_template_part( 'template-parts/content', 'single' );

			                  endwhile;

			                  the_posts_navigation();

			               else :

			                  get_template_part( 'template-parts/content', 'none' );

			               endif; ?>
		                  
		                </div>
	            </div>
                <div class="col-md-4">
                   <?php get_sidebar('right'); ?>    
                </div>
            </div>
        </div>
      </section><!-- page-content END -->
      <!--==========================================================-->
      <!-- Page Content area End -->
      <!--==========================================================-->

	

<?php get_footer(); ?>
