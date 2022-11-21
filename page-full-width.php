<?php
/*
Template Name: Inside Page - Full Width Background
*/

get_header(); ?>

<section class="inside-container inside-container-full-width clearfix">
	<article class="inside-content">
		<div class="inner">
			<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
			    <?php if(function_exists('bcn_display'))
			    {
			        bcn_display();
			    }?>
			</div>
		</div>
		<?php
			while ( have_posts() ) : the_post();
				the_content();
			endwhile; // End of the loop.
		?>
	</article>
	<div class="inner">
		<article class="sidebar">
			<nav class="sidebar-links-generic sidebar-widget">
				<?php
					wp_nav_menu( array(
						'theme_location' => 'sidebar-links-generic',
						'menu_id'        => 'sidebar-links-generic',
						'menu_class'     => 'sidebar-links',
						'link_after'          => '&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i>',
					) );
				?>
			</nav>

			<section class="sidebar-featured-website sidebar-widget">
				<h3>Featured Website</h3>
				<h4>House Packard McElderry LLC</h4>
				<?php
					$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 0 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
							$firmName = get_field('firm_name');
							$mockupImage = get_field('mockup_image');
							$linkToProjectPage = get_permalink();
							$linkToFirmSite = get_field('link_to_firm_site');
					?>
					<?php if(get_field('featured')): ?>
						<img src="<?php echo $mockupImage ?>" alt="Featured Website Mockup">
						<ul class="sidebar-featured-links"> 
							<li><a href="<?php echo $linkToProjectPage ?>">Read About This Project&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a></li>
							<li><a href="<?php echo $linkToFirmSite ?>" target="_blank">Visit the Site&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a></li>
						</ul>
					<?php endif; ?>
				<?php endwhile;?>
			</section>
			
			<section class="sidebar-testimonials sidebar-widget">
				<h3>What Our Clients Say</h3>
				<?php
					$args = array( 'post_type' => 'testimonials', 'posts_per_page' => 0 );
					$loop = new WP_Query( $args );
					while ( $loop->have_posts() ) : $loop->the_post();
							$shortenedQuote = get_field('shortened_quote');
							$clientName = get_field('client_name');
							$clientPhoto = get_field('photo');
							$clientInfo = get_field('client_info');
							$clientURL = get_field('client_url');
							$prettyURL = get_field('pretty_url');
				?>
					<?php if(get_field('featured')): ?>
						<div class="sidebar-testimonial-quote">
							<p> "<?php echo $shortenedQuote ?>" </p>							
						</div>
						<div class="sidebar-testimonial-bio-container">
							<div class="sidebar-testimonial-bio">
								<h4><?php echo $clientName ?></h4>
								<p><?php echo $clientInfo ?></p>
								<a target="_blank" href="<?php echo $clientURL ?>"><?php echo $prettyURL ?></a>
							</div>
							<div class="sidebar-testimonial-headshot-container">
								<img src="<?php echo $clientPhoto ?>" alt="Testimonial Headshot" class="sidebar-testimonial-headshot" />
							</div>							
						</div>
						<a href="/testimonials">More Client Testimonials&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
					<?php endif; ?>
				<?php endwhile;?>
			</section>
		</article>
	</div>

	<article class="subbar">
		<div class="inner">
			<h3>Learn More About Websites and What We Do</h3>
			<?php
				while ( have_posts() ) : the_post();
					echo do_shortcode( get_post_meta( get_the_id(), 'subbar', true ) );
				endwhile; // End of the loop.
			?>
		</div>
	</article>	
</section>

<?php get_footer(); ?>
