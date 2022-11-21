<?php
/*
Template Name: Inside Page - Generic
*/

get_header(); ?>

<section class="inside-container clearfix">
	<div class="inner">
		<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
		    <?php if(function_exists('bcn_display'))
		    {
		        bcn_display();
		    }?>
		</div>
		<article class="inside-content">
			<?php
				while ( have_posts() ) : the_post();
					the_content();
				endwhile; // End of the loop.
			?>
		</article>
		
		<?php get_sidebar(); ?>
		
		</aside>
	</div>
	<aside class="subbar">
		<div class="inner">
			<h3>Learn More About Websites and What We Do</h3>
			<?php
				while ( have_posts() ) : the_post();
					echo do_shortcode( get_post_meta( get_the_id(), 'subbar', true ) );
				endwhile; // End of the loop.
			?>
		</div>
	</aside>	
</section>

<?php get_footer(); ?>
