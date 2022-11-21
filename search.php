<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package caiman-web-design
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
		<article class="inside-content inside-content-search">

		<?php
		if ( have_posts() ) : ?>

			<header class="page-header">
				<h2 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: "%s"', 'caiman-web-design' ), '<span>' . get_search_query() . '</span>' );
				?></h2>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

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
