<?php
/*Template Name: About Me*/
get_header();
 ?>

	<?php get_template_part('breadcrum');?>

		<!-- Start Why Choose Us Area -->
		<section class="why-choose-us-area why-choose-us-about ptb-100">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="why-choose-us-content">
							<span>About</span>
							<?php the_content(); ?>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="why-choose-us-img">
							
						</div>
					</div>
				</div>
				<div class="col-lg-12 mt-4">
						<div class="why-choose-us-content">
							<?php echo get_field('about_dr'); ?>
						</div>
					</div>
			</div>
		</section>
		<!-- End Why Choose Us Area -->

		<!-- Start Expertise Area -->
		<section class="expertise-area bg-color-two pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<h2>Mission Statement</h2>
					<p>Welcome to Ask Dr Heather, a blog dedicated to empowering each person to be the healthiest individual that you can be. You will be able to find the tools and information necessary to help redefine your state of health and fitness.</p>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-expertises">
							<i class="flaticon-diet"></i>
							<h3>Personal Nutrition</h3>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-expertises">
							<i class="flaticon-nutrition"></i>
							<h3>Dietitian Nutritionists</h3>
						</div>
					</div>
					
					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-expertises">
							<i class="flaticon-pyramid"></i>
							<h3>Nutritious Lifestyle</h3>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Expertise Area -->

		<!-- Start Testimonial Area -->
		<section class="testimonials-area testimonials-area-style-two style-about-page pt-100">
			<div class="container">
				<div class="testimonials-content">
					<div class="testimonials-slider owl-carousel owl-theme">

             <?php if( have_rows('testimonials') ): while( have_rows('testimonials') ): the_row(); ?>
						
						<div class="single-testimonials">
							<i class="bx bxs-quote-right"></i>
							<p><?php echo get_sub_field('overview'); ?></p>

							<div class="writer-name">
								<h3><?php echo get_sub_field('name'); ?></h3>
								<span><?php echo get_sub_field('position'); ?></span>
							</div>
						</div>
                <?php endwhile; endif; ?> 
				
					
					</div>
				</div>
				<h4>Testimonials</h4>
			</div>
		</section>
		<!-- End Testimonial Area -->


<?php get_footer(); ?>
		