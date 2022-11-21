<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package caiman-web-design
 */

?>

	</div><!-- #content -->	
	<footer id="colophon" class="site-footer">
		<div class="inner">
			<article class="site-footer-menu">
				<nav>
					<?php
						wp_nav_menu( array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'footer-menu',
							'menu_class'     => 'clearfix',
						) );
					?>
				</nav>
				<p class="site-footer-copyright">Copyright &copy; <script>document.write(new Date().getFullYear())</script> Caiman Web Design LLC. All Rights Reserved.</p>
			</article>
			<div class="footer-button-container">
				<a href="/contact" class="button button-orange">Get a Quote - Contact&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
			</div>
			<article class="site-footer-connect">
				<h4>Connect With Us</h4>
				<div class="site-footer-social-icons">
					<a href="https://plus.google.com/b/107119314765810779042/communities/111595890892525407637"><i class="fab fa-google-plus-g"></i></a>
					<a href="http://www.linkedin.com/company/caiman-web-design"><i class="fab fa-linkedin-in"></i></a>
					<a href="http://www.twitter.com/caimanwebdesign"><i class="fab fa-twitter"></i></a>
					<a href="http://www.facebook.com/caimanwebdesign"><i class="fab fa-facebook-f"></i></a>
				</div>
			</article>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<!-- Livereload script -->
<script>
  var hostname = window.location.hostname;
  if(hostname.indexOf('dev.') > -1){
    var script = document.createElement('script');
        script.src="http://localhost:35729/livereload.js";
    jQuery('body').append(script);
  }
</script> <!-- end Livereload -->

</body>
</html>
