<?php
/*Template Name: Contact-Us*/
get_header();
 ?>

		<?php get_template_part('breadcrum');?>

		<!-- Start Contact Info Area -->
		<section class="contact-info-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<?php the_content(); ?>
				</div>
				<div class="row">
					<div class="col-lg-4 col-md-6">
						<div class="single-contact-info">
							<i class="bx bx-location-plus"></i>

							<?php dynamic_sidebar('address'); ?>
						</div>
					</div>

					<div class="col-lg-4 col-md-6">
						<div class="single-contact-info">
							<i class="bx bx-envelope"></i>
						<?php dynamic_sidebar('email'); ?>   
						</div>
					</div>

					<div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
						<div class="single-contact-info">
							<i class="bx bx-phone-call"></i>
							<?php dynamic_sidebar('phone'); ?>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Info Area -->

		<!-- Start Contact Area -->
		<section class="main-contact-area pb-100">
			<div class="container">
				<div class="section-title">
					<h2>Write Us</h2>
				</div>
                <div class="row">
					<div class="col-md-4">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact-doc.png" alt="Image" class="contact-avtar img-fluid">
					</div>
					<div class="col-md-8">
					<div id="contactForm" style="width:100%;">
					<?php echo do_shortcode('[contact-form-7 id="44" title="Contact Page"]'); ?>
					</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact Area -->

		<!-- Start Map Area -->
		<div class="map-area">
			<?php echo ot_get_option('map'); ?>
		</div>
		<!-- End Map Area -->

		
		
<?php get_footer(); ?>