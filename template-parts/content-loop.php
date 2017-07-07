<!--====================== Single post start  ======================-->
<article id="post-<?php the_ID(); ?>" <?php post_class('single-post'); ?>>
   <div class="blog-title-and-meta text-center">
      <div class="post-title">
         <h3><a href="<?php echo esc_url( get_the_permalink() ); ?>"><?php the_title(); ?></a></h3>
      </div>
      <div class="post-meta">
         <span><?php the_time( 'M d, Y' ); ?> in</span>
         <span><a href="#">Illustration</a></span>
      </div>
   </div>
   <div class="fet-image">
      <a href="<?php echo esc_url( get_the_permalink() ); ?>">
         <img src="assets/images/blog-1.jpg" alt="">
      </a>
   </div>
   <div class="entry-excerpt">
      <p> <?php echo wp_trim_words( get_the_content() , 35 ); ?> </p>
   </div>
   <a href="<?php echo esc_url( get_the_permalink() ); ?>" class="read-more"><?php echo esc_html__( 'Read more','wp_shosi'); ?></a>
</article>
<!--====================== Single post end  ======================-->