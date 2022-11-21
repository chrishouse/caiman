<?php
/*
Template Name: Archive Index
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
			<div class="archive-index-months">
				<h2 class="page-title">Months</h2>
				<ul>
				<?php $args = array(
					'type'            => 'monthly',
					'limit'           => '',
					'format'          => 'html', 
					'before'          => '',
					'after'           => '',
					'show_post_count' => false,
					'echo'            => 1,
					'order'           => 'DESC',
				    'post_type'     => 'post'
				);
				wp_get_archives( $args ); ?>
				</ul>
			</div>			
			<div class="archive-index-categories">
				<h2 class="page-title">Categories</h2>
				<ul>
				<?php
					wp_list_categories( array(
						'orderby'    => 'count',
						'order'      => 'DESC',
						'show_count' => 0,
						'title_li'   => '',
						'number'     =>0,
					) );
				?>
				</ul>
			</div>
		</article>
		
		<?php get_sidebar('blog'); ?>

	</div>
	
</section>

<?php get_footer(); ?>
