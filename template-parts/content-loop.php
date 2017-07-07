<!--====================== Single post start  ======================-->
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
   <div class="blog-title-and-meta text-center">
      <div class="post-title">
         <h3><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a></h3>
      </div>
      <div class="post-meta">
         <span><?php the_time( 'M d, Y' ); ?> in</span>
         <span><?php the_category( ', ' ); ?> by</span>
         <span><?php the_author_link(); ?></span>
      </div>
   </div>
   <div class="fet-image">
      <a href="<?php echo esc_url( get_the_permalink() ); ?>">
         <?php if ( has_post_thumbnail() ) {
            the_post_thumbnail();
         } ?>
      </a>
   </div>
   <div class="entry-excerpt">
      <p> <?php echo wp_trim_words( get_the_content() , 35 ); ?> </p>
   </div>
   <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="read-more"><?php echo esc_html__( 'Read more','wp_shosi'); ?></a>
</article>
<!--====================== Single post end  ======================-->