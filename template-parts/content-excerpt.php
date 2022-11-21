<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package caiman-web-design
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<?php
				caiman_web_design_posted_on();
				caiman_web_design_posted_by();
			?>
		</div><!-- .entry-meta -->
		<?php
		endif; ?>
	</header><!-- .entry-header -->

	<?php caiman_web_design_post_thumbnail(); ?>

	<article class="entry-content the-excerpt">
		<?php
			the_excerpt();
		?>
		<div class="excerpt-keep-reading">
			<a href=" <?php the_permalink() ?> ">Keep Reading&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
		</div>
	</article><!-- .entry-content -->

</article><!-- #post-<?php the_ID(); ?> -->
