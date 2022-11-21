<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package caiman-web-design
 */

get_header(); ?>

<section class="inside-container clearfix">
	<div class="inner">
		
		<article class="inside-content inside-content-404">
			<h2>Oops, this page doesn't exist</h2>
			<p>We know this isn't fun, so let us make it up to you with a photo of Henry Winkler:</p>
			<div style="text-align: center;">
				<img src="/wp-content/themes/caiman-web-design/images/winkler.jpg" alt="">
			</div>
			<p style="text-align: center;"><a href="/">Return to the Home page</a></p>
		</article>
		
		<?php get_sidebar(); ?>

	</div>
	
</section>

<?php get_footer(); ?>
