<?php
/**
 * The template for displaying single projects
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
		<article class="inside-content inside-content-blog inside-content-blog-single inside-content-portfolio">

			<?php
			while ( have_posts() ) : the_post();

				$firmName = get_field('firm_name');
				$mockupImage = get_field('mockup_image');
				$linkToFirmSite = get_field('link_to_firm_site');				
				$homePageScreenshot = get_field('home_page_screenshot');
				$fullDescription = get_field('full_description');
				$features = get_field('features');
			?>

			<h2><?php echo $firmName ?></h2>
			<section class="site-screenshot">
				<a target="_blank" href="<?php echo $linkToFirmSite ?>">
					<img src="<?php echo $homePageScreenshot ?>" alt="<?php echo $firmName ?> Screenshot">
					<p class="caption">Visit <?php echo $firmName ?></p>
				</a>
			</section>
			<p class="site-description-projetc-page"><?php echo $fullDescription ?></p>
			<section class="features-mockup-container">
				<section class="site-mockup">
					<a target="_blank" href="<?php echo $linkToFirmSite ?>">
						<img src="<?php echo $mockupImage ?>" alt="<?php echo $firmName ?> Mockup">					
					</a>
				</section>
				<ul class="features">
					<?php echo $features ?>
				</ul>
			</section>
			<div class="button-container"><a class="button button-orange" href="<?php echo $linkToFirmSite ?>">Visit the <?php echo $firmName ?> website&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a></div>

			<?php endwhile; ?>
			 
		</article>

		<?php get_sidebar(); ?>
	</div>	
</section>

<?php get_footer(); ?>
