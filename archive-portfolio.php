<?php
/**
 * The main template file for the Portfolio (Projects)
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
			$args = array( 'post_type' => 'Portfolio', 'posts_per_page' => 0, 'orderby' => 'date' );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
				$firmName = get_field('firm_name');
				$mockupImage = get_field('mockup_image');
				$linkToProjectPage = get_post_permalink();
				$linkToFirmSite = get_field('link_to_firm_site');				
				$homePageScreenshot = get_field('home_page_screenshot');
		?>
		<h2><?php echo $firmName ?></h2>
		<section class="site-screenshot"><a href="<?php echo $linkToProjectPage ?>"><img src="<?php echo $homePageScreenshot ?>" alt="<?php echo $firmName ?> Screenshot"></a></section>
		<section class="site-mockup"><a href="<?php echo $linkToProjectPage ?>"><img src="<?php echo $mockupImage ?>" alt="<?php echo $firmName ?> Mockup"></a></section>
		<ul class="portfolio-links">
			<li><a href="<?php echo $linkToProjectPage ?>">Read about the <?php echo $firmName ?> project&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a></li>
			<li><a target="_blank" href="<?php echo $linkToFirmSite ?>">Visit the <?php echo $firmName ?> website&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a></li>
		</ul>

		<?php endwhile; ?>

		</article>		
		
		<?php get_sidebar(); ?>

	</div>
	
</section>

<?php get_footer(); ?>
