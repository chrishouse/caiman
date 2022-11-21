<?php
/**
 * The main template file for the Blog Home page
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
		<article class="inside-content inside-content-blog">

			<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) : ?>
					<header>
						<h2 class="page-title screen-reader-text">Recent Blog Posts</h2>
					</header>

				<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content-excerpt', get_post_format() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</article>
		
		<?php get_sidebar('blog'); ?>

	</div>
	
</section>

<?php get_footer(); ?>
