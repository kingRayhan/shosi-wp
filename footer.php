<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package SHOSI_-_Elegant_Blog_Theme
 */
?>
	</div><!-- #content // started in header.php-->

	<section class="instagramPhoto">
	 <div class="container-fluid">
	    <div class="row">
	       <div class="follow-me text-center">
	          <h2>Follow Me On #king_rayhan</h2>
	       </div>
	       <div id="instafeed"></div>
	       <div class="clearfix"></div>
	    </div>
	 </div>
	</section>



	<footer id="colophon" class="footer site-footer">
         <div class="container">
            <div class="row">
               <div class="col-xs-12">
                  <div class="clearfix"></div>
                  <ul class="footer-social-icons">
                     <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                     <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                     <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                     <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                     <li><a href="#"><i class="fa fa-feed"></i></a></li>
                     <li><a href="#"><i class="fa fa-envelope-o"></i></a></li>
                  </ul>
                  <span class="copyright">© Copyright <?php echo date('Y'); ?> - <b>SHOSi</b> - Clean html blog Template. Designed by <span><i class="fa fa-heart"></i></span> <b><a href="https://themeforest.net/user/electronthemes" target="_blank">ElectronThemes</a></b></span> 
               </div>
               <!-- end col-12 --> 
            </div>
            <!-- end row --> 
         </div>
         <!-- end container --> 
	</footer><!-- #colophon -->
</div><!-- #page // started in header.php-->
<?php wp_footer(); ?>
</body>
</html>
