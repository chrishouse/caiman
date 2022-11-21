<?php
/**
 * The main template file for the Testimonials
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
		<article class="inside-content inside-content-blog inside-content-testimonials">
			<h2>Client Testimonials</h2>
			<?php			
				$args = array( 'post_type' => 'testimonials', 'posts_per_page' => 0 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
						$clientQuote = get_the_content();
						$clientName = get_field('client_name');
						$clientPhoto = get_field('photo');
						$clientInfo = get_field('client_info');
						$clientURL = get_field('client_url');
			?>

			<div class="testimonial-quote">
				<p>"<?php echo $clientQuote ?>"</p>
			</div>
			<img src="<?php echo $clientPhoto ?>" alt="Testimonial Headshot" class="testimonial-headshot" />
			<div class="testimonial-bio">
				<h3><?php echo $clientName ?></h3>
				<p class="testimonial-client-info"><?php echo $clientInfo ?></p>
				<p><a target="_blank" href="<?php echo $clientURL ?>"><?php echo $clientURL ?></a></p>
			</div>			
			<hr style="clear:both;">

			<?php endwhile; ?>

		</article>		
		
		<?php get_sidebar(); ?>

	</div>
	
</section>

<?php get_footer(); ?>
