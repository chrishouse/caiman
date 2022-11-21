<?php
/*
Template Name: Home Page
*/

get_header(); ?>

<section class="home-hero">
	<div class="inner">
		<h1>Website Creation &amp; Marketing for Law Firms</h1>
		<h2>Everything you need to attract visitors and convert them into clients</h2>
		<br>
		<h2>Web design options to fit firms of all sizes</h2>
		<br>
		<a href="/portfolio" class="button button-aqua">View Our Portfolio&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
	</div>
</section>

<section class="home-options clearfix">
	<div class="inner">
		<article class="left-section">
			<h2 class="home-section-heading">Flexible options to Meet the Needs of Your Firm</h2>
			<p>No matter your firm's budget and requirements, Caiman Web Design will create a world class website that will impress visitors and convert them into clients. And most importantly, we'll make sure your potential clients find you in the first place.</p>			
		</article>
		<article class="right-section">
			<ul class="link-list">
				<li><a href="/portfolio"><i class="fas fa-chevron-right"></i>&nbsp;&nbsp;&nbsp;Portfolio of work</a></li>
				<li><a href="/website-creation"><i class="fas fa-chevron-right"></i>&nbsp;&nbsp;&nbsp;Website creation</a></li>
				<li><a href="/marketing"><i class="fas fa-chevron-right"></i>&nbsp;&nbsp;&nbsp;Marketing services</a></li>
				<li><a href="/why-choose-us"><i class="fas fa-chevron-right"></i>&nbsp;&nbsp;&nbsp;Why choose us</a></li>
			</ul>
		</article>
		<div class="home-options-button-container">
			<a href="/contact" class="button button-orange">Get a quote&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
		</div>
	</div>
</section>

<section class="home-features">
	<div class="inner">
		<h2 class="home-section-heading">Every Website Includes These Great Features</h2>
		<article class="features-boxes">
			<div class="box">
				<i class="fas fa-tv"></i>
				<p>A modern design focusing on user experience and lead conversion</p>
			</div>
			<div class="box">
				<i class="fas fa-mobile-alt"></i>
				<p>Responsive design for screens and devices of all shapes and sizes</p>
			</div>
			<div class="box">
				<i class="fas fa-search"></i>
				<p>Search engine optimization to ensure your clients find you</p>
			</div>
			<div class="box">
				<i class="fas fa-pencil-alt"></i>
				<p>A site administration area for easy do-it-yourself content changes</p>
			</div>
			<div class="box">
				<i class="fab fa-wordpress-simple"></i>
				<p>Built on WordPress, the world's leading content management software</p>
			</div>
			<div class="box">
				<i class="fab fa-google"></i>
				<p>Up-to-the-minute site usage data with Google Analytics</p>
			</div>
		</article>
	</div>
</section>

<section class="home-what-else">
	<div class="what-else-grey-bar"></div>
	<div class="inner clearfix">
		<article class="left-section">
			<h2><span>What Else Can <span class="company-name">Caiman<br class="home-heading-break"> Web Design</span> Do For You?</span></h2>
		</article>
		<article class="right-section">
			<div class="box">
				<h3>Market Your<br class="home-heading-break"> Business</h3>
				<p>With Google AdWords, we'll create and maintain an effective advertising campaign to get your firm seen by as many potential clients as possible.</p>
				<a href="/marketing" class="home-what-else-read-more">Read More&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
			</div>
			<div class="box">
				<h3>Professional Logo Design</h3>
				<p>Whether you're just starting out or need a fresh design, we'll craft a logo that accurately reflects your firm's unique identity.</p>
				<a href="/logo-design" class="home-what-else-read-more">Read More&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
			</div>
			<div class="box">
				<h3>Hosting And<br class="home-heading-break"> Upkeep</h3>
				<p>We'll ensure your site is always fast, secure and backed up. You'll never worry about performance, viruses or data loss.</p>
				<a href="/website-creation/hosting-and-upkeep" class="home-what-else-read-more">Read More&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
			</div>
			<div class="box">
				<h3>On-Call Site<br class="home-heading-break"> Servicing</h3>
				<p>Don't have the time to edit your site yourself? We're here to make any modifications you need, from small content edits to major design changes.</p>
				<a href="/hosting-and-upkeep" class="home-what-else-read-more">Read More&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
			</div>
		</article>
	</div>
</section>

<section class="home-testimonial">
	<div class="inner">
		<?php			
			$args = array( 'post_type' => 'testimonials', 'posts_per_page' => 0 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
					$clientQuote = get_the_content();
					$clientName = get_field('client_name');
					$clientPhoto = get_field('photo');
					$clientInfo = get_field('client_info');
					$clientURL = get_field('client_url');
					$prettyURL = get_field('pretty_url');
		?>
			<?php if(get_field('featured')): ?>
				<div class="home-testimonial-quote">
					<p> <?php echo $clientQuote ?> </p>
					<a href="/testimonials" class="button button-orange">More testimonials&nbsp;&nbsp;&nbsp;<i class="fas fa-chevron-right"></i></a>
				</div>
				<img src="<?php echo $clientPhoto ?>" alt="Testimonial Headshot" class="home-testimonial-headshot" />
				<div class="home-testimonial-bio">
					<h4><?php echo $clientName ?></h4>
					<p><?php echo $clientInfo ?></p>
					<a target="_blank" href="<?php echo $clientURL ?>"><?php echo $prettyURL ?></a>
				</div>
			<?php endif; ?>
		<?php endwhile; ?>
	</div>
</section>

<section class="home-featured-website">
	<div class="featured-website-grey-bar"></div>
	<div class="inner clearfix">
		<article class="right-section">
			<h2>Featured Website<br class="home-heading-break"> Launch</h2>
		</article>
		<article class="left-section">
			<?php			
			$args = array( 'post_type' => 'portfolio', 'posts_per_page' => 0 );
			$loop = new WP_Query( $args );
			while ( $loop->have_posts() ) : $loop->the_post();
					$firmName = get_field('firm_name');
					$mockupImage = get_field('mockup_image');
					$linkToProjectPage = get_post_permalink();
					$linkToFirmSite = get_field('link_to_firm_site');
					$projectSummary = get_field('project_summary');
			?>
			<?php if(get_field('featured')): ?>				
				<div class="box">
					<div>
						<img src="<?php echo $mockupImage ?>" alt="Featured Website Mockup">
					</div>
					<div class="home-featured-links">
						<a href="<?php echo $linkToFirmSite ?>" target="_blank"><i class="fas fa-chevron-right"></i>&nbsp;&nbsp;&nbsp;Visit the <?php echo $firmName ?> Website</a>
					</div>
				</div>
				<div class="box">
					<div class="home-featured-site-info">
						<h4><?php echo $firmName ?></h4>
						<p><?php echo $projectSummary ?></p>
					</div>
					<div class="home-featured-links">
						<a href="<?php echo $linkToProjectPage ?>"><i class="fas fa-chevron-right"></i>&nbsp;&nbsp;&nbsp;Read More About This Project</a>
						<a href="/portfolio"><i class="fas fa-chevron-right"></i>&nbsp;&nbsp;&nbsp;See Other Recent Projects</a>
					</div>
				</div>
			<?php endif; ?>
			<?php endwhile; ?>
		</article>
	</div>
</section>	


<?php get_footer(); ?>
