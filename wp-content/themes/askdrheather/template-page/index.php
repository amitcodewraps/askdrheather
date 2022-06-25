<?php
/*Template Name: Home*/
get_header();
$banner_image = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
 ?>

		<section class="fixed-banner" style="
		background-image: url('<?php echo $banner_image; ?>');
  background-repeat: no-repeat;
  height: 550px;
    background-size: auto;
    width: 100%;">
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
					<div class="healthy-life-content ptb-100 headerbanner">
					<?php the_content(); ?>

				</div>
					</div>
				</div>
			</div>
		</section>


		<!-- Start About Us Area -->
		<section class="about-us-area about-us-area-style-two bg-color-two ptb-100">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-6">
						<div class="about-img-content">
							<div class="about-img-1">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about-img-3.jpg" alt="Image">
								<div class="about-img-2">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/about/about-img-4.jpg" alt="Image">
								</div>
							</div>

							<h3><span>25</span> Years of Experience</h3>
						</div>
					</div>

					<div class="col-lg-6">
						<div class="about-content">
							<span>About Aava</span>
							<h2>Better Eat, Better Life</h2>
							<h4>If You Get Better Nutrition, You Can Enjoy a Healthy Age</h4>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus quaerat fuga ipsam temporibus reprehenderit libero earum autem, eius hic consequatur placeat ab eaque! Nostrum, exercitationem.</p>

							<h3>We Can Help You</h3>

							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<ul class="mb-20">
										<li>Low Energy</li>
										<li>Stress & Anxiety</li>
										<li>Poor Eating Habits</li>
										<li>Digestive Problems</li>
									</ul>
								</div>

								<div class="col-lg-6 col-sm-6">
									<ul>
										<li>Balance Body & Mind</li>
										<li>Advice</li>
										<li>Workout Routines</li>
										<li>Protein</li>
									</ul>
								</div>
							</div>

							<a href="about-us.html" target="_blank" class="default-btn">View More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About Us Area -->


<!-- <section class="cta-banner">
        <div class="container-fluid bg-cover section-bg" style="background-image: url('http://13.233.86.123/projects/wordpress/askdrheather/wp-content/uploads/2022/03/background.jpeg44')">
            <div class="cta-content">
                <div class="row align-items-center">
                    <div class="col-xl-7 text-white col-12 text-center text-xl-left">
                        <h1>To start their day in the right way with some of my favorite breakfast/brunch recipes</h1>
                    </div>
                    <div class="col-xl-5 col-12 text-center text-xl-right">
                        <a href="contact.html" class="theme-btn mt-4 mt-xl-0">Let's Get Started<i class="fas fa-arrow-right"></i></a>
                        
                    </div>
                </div>
            </div>
        </div>
    </section> -->

 <!-- <section class="what-we-offer-area what-we-offer-area-style-two pt-100 pb-70">
        <div class="container bg-cover section-bg" style="background-image: url('http://13.233.86.123/projects/wordpress/askdrheather/wp-content/uploads/2022/03/background.jpeg44')">
            <div class="cta-content">
                <div class="row align-items-center">
                    <?php echo do_shortcode('[contact-form-7 id="30" title="Free Download"]'); ?>
                </div>
            </div>
        </div>
    </section> -->

		<!-- Start What We Offer Area -->
		<section class="what-we-offer-area what-we-offer-area-style-two pt-0 pb-70">
			<div class="container">
				<div class="section-title">
					<span>What We Offer</span>
					<h2>Our Diet & Nutrition Services</h2>
				</div>

				<div class="owl-carousel owl-theme what-we-offer-slider">
					<div class="single-what-we-offer">
						<a href="services-details.html" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/what-we-offer/what-we-offer-1.jpg" alt="Image">
						</a>

						<div class="what-we-offer-content">
							<h3>
								<a href="services-details.html" target="_blank">Nutrition Response Testing</a>
							</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							<a href="services-details.html"  target="_blank" class="read-more">Read More</a>
						</div>
					</div>

					<div class="single-what-we-offer">
						<a href="services-details.html">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/what-we-offer/what-we-offer-2.jpg" alt="Image">
						</a>

						<div class="what-we-offer-content">
							<h3>
								<a href="services-details.html">Weight Loss Program</a>
							</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							<a href="services-details.html" class="read-more">Read More</a>
						</div>
					</div>

					<div class="single-what-we-offer">
						<a href="services-details.html">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/what-we-offer/what-we-offer-3.jpg" alt="Image">
						</a>

						<div class="what-we-offer-content">
							<h3>
								<a href="services-details.html">Nutrition Response Testing</a>
							</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							<a href="services-details.html" class="read-more">Read More</a>
						</div>
					</div>

					<div class="single-what-we-offer">
						<a href="services-details.html">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/what-we-offer/what-we-offer-4.jpg" alt="Image">
						</a>

						<div class="what-we-offer-content">
							<h3>
								<a href="services-details.html">Clinical Nutrition</a>
							</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							<a href="services-details.html" class="read-more">Read More</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End What We Offer Area -->

		<!-- Start Healthy Life Area -->
		<section class="healthy-life-area healthy-life-area-style-two bg-color-two">
			<div class="container">
				<div class="row">

					<div class="col-lg-4 pr-0">
						<div class="healthy-life-img-2" style="background-image: url('http://13.233.86.123/projects/wordpress/askdrheather/wp-content/uploads/2022/02/Profile-pic-1.jpg');"> 
							
						</div>
					</div>

					
						<!-- <div class="col-lg-8">
						<div class="healthy-life-content ptb-100">
							<h2><?php echo get_field('title'); ?></h2>
							<p><?php echo get_field('statement'); ?></p>

						 <h3>Steps to Your Perfect Body</h3>

							<div class="row">
								<div class="col-lg-6 col-sm-6">
									<ul class="mb-20">
										<li>Low Energy</li>
										<li>Stress & Anxiety</li>
										<li>Poor Eating Habits</li>
										<li>Digestive Problems</li>
									</ul>
								</div>

								<div class="col-lg-6 col-sm-6">
									<ul>
										<li>Balance Body & Mind</li>
										<li>Advice</li>
										<li>Workout Routines</li>
										<li>Protein</li>
									</ul>
								</div>
							</div> 
						</div>
					</div>-->

					<div class="col-lg-6 pr-0">
						<div class="healthy-life-img-2" style="background-image: url('http://13.233.86.123/projects/wordpress/askdrheather/wp-content/uploads/2022/02/Profile-pic-1.jpg');"> 
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Healthy Life Area -->

		<!-- Start Pricing Area -->
		<section class="pricing-area pt-100 pb-70">
			
		</section>
		<!-- End Pricing Area -->

		<!-- Start Appointment Area -->
		<section class="appointment-area appointment-area-style-two">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 pl-0">
						<div class="appointment-img-2"></div>
					</div>

					<div class="col-lg-6">
						<div class="appointment-action ptb-100">
							<form>
								<div class="row">
									<div class="col-lg-6">
										<div class="form-group">
											<input type="text" class="form-control" id="Name" placeholder="Name">
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<input type="email" class="form-control" id="Email" placeholder="Email">
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<input type="text" class="form-control" id="Phone" placeholder="Phone">
										</div>
									</div>

									<div class="col-lg-6">
										<div class="form-group">
											<div class="input-group date" id="datetimepicker">
												<input type="text" class="form-control" id="Date" placeholder="Booking Date">
												<span class="input-group-addon"></span>
												<i class="bx bx-calendar"></i>
											</div>	
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<select>
												<option value="1">Type of Service</option>	
												<option value="2">Health Service</option>
												<option value="3">Nutrition Service</option>
												<option value="4">Response Service</option>
												<option value="5">Testing Service</option>
												<option value="6">Weight Service</option>
												<option value="7">Clinical Service</option>
											</select>
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<textarea name="message" class="form-control" id="Message" rows="4" placeholder="Your Message"></textarea>
										</div>
									</div>

									<div class="col-12">
										<button type="submit" class="default-btn">
											Book Appointment
										</button>
									</div>

									<h2>Make An Appointment</h2>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Appointment Area -->

		<!-- Start Team Area -->
		<section class="team-area pt-100 pb-70">
			<div class="container">
				<div class="section-title">
					<span class="top-title">Our Experts</span>
					<h2>Diet & Nutrition Experts</h2>
				</div>

				<div class="owl-carousel owl-theme team-slider">
					<div class="single-team">
						<div class="team-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-1.jpg" alt="Image">

							<ul class="team-link">
								<li>
									<a href="#">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-pinterest-alt"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
							</ul>
						</div>

						<div class="team-content">
							<h3>Dr. Angela Russell</h3>
							<span>Diet & Nutrition</span>
						</div>
					</div>
				
					<div class="single-team">
						<div class="team-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-2.jpg" alt="Image">

							<ul class="team-link">
								<li>
									<a href="#">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-pinterest-alt"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
							</ul>
						</div>

						<div class="team-content">
							<h3>Dr. Russell Anderson</h3>
							<span>Nutritonist</span>
						</div>
					</div>
				
					<div class="single-team">
						<div class="team-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-3.jpg" alt="Image">

							<ul class="team-link">
								<li>
									<a href="#">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-pinterest-alt"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
							</ul>
						</div>

						<div class="team-content">
							<h3>Dr. Miriam Landau</h3>
							<span>Diet & Nutrition</span>
						</div>
					</div>

					<div class="single-team">
						<div class="team-img">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/team/team-4.jpg" alt="Image">

							<ul class="team-link">
								<li>
									<a href="#">
										<i class="bx bxl-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-pinterest-alt"></i>
									</a>
								</li>
								<li>
									<a href="#">
										<i class="bx bxl-instagram"></i>
									</a>
								</li>
							</ul>
						</div>

						<div class="team-content">
							<h3>Dr. Anna Smith</h3>
							<span>Nutritonist</span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Team Area -->

		<!-- Start Testimonial Area -->
		<section class="testimonials-area testimonials-area-style-two pt-100">
			<div class="container">
				<div class="testimonials-content">
					<div class="testimonials-slider owl-carousel owl-theme">
						<div class="single-testimonials">
							<i class="bx bxs-quote-right"></i>
							<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus com modo viverra maecenas accumsan lacus vel facilisis.” </p>

							<div class="writer-name">
								<h3>Miriam Landau</h3>
								<span>Director</span>
							</div>
						</div>

						<div class="single-testimonials">
							<i class="bx bxs-quote-right"></i>
							<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus com modo viverra maecenas accumsan lacus vel facilisis.” </p>

							<div class="writer-name">
								<h3>Alex Dew</h3>
								<span>Company of CEO</span>
							</div>
						</div>

						<div class="single-testimonials">
							<i class="bx bxs-quote-right"></i>
							<p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus com modo viverra maecenas accumsan lacus vel facilisis.” </p>

							<div class="writer-name">
								<h3>Juhon Smith</h3>
								<span>Company of MD</span>
							</div>
						</div>
					</div>
				</div>
				<h4>Testimonials</h4>
			</div>
		</section>
		<!-- End Testimonial Area -->

		<!-- Start Partner Area -->
		<div class="partner-area bg-color-two ptb-100">
			<div class="container">
				<div class="partner-bg">
					<div class="row">
						<div class="partner-slider owl-carousel owl-theme">
							<div class="partner-item">
								<a href="partner-details.html">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/black-partner-1.png" alt="Image">
								</a>
							</div>
	
							<div class="partner-item">
								<a href="partner-details.html">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/black-partner-2.png" alt="Image">
								</a>
							</div>
	
							<div class="partner-item">
								<a href="partner-details.html">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/black-partner-3.png" alt="Image">
								</a>
							</div>
	
							<div class="partner-item">
								<a href="partner-details.html">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/black-partner-4.png" alt="Image">
								</a>
							</div>
	
							<div class="partner-item">
								<a href="partner-details.html">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/black-partner-5.png" alt="Image">
								</a>
							</div>

							<div class="partner-item">
								<a href="partner-details.html">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner/black-partner-3.png" alt="Image">
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Partner Area -->

		<!-- Start Our News Area -->
		<section class="our-news-area our-news-area-style-two pt-100 pb-0">
			<div class="container">
				<div class="section-title">
					<span>Our News</span>
					<h2>Featured News And Advice</h2>
				</div>

				<div class="owl-carousel owl-theme news-slider">
					<div class="single-news">
						<a href="news-details.html" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-1.jpg" alt="Image">
						</a>

						<div class="news-content">
							<ul>
								<li>
									<i class="bx bxs-user"></i>
									<a href="#">Harold McLeod</a>
								</li>
								<li>
									<i class="bx bxs-calendar"></i>
									<span>Dec 04, 2020</span>
								</li>
							</ul>

							<h3>
								<a href="news-details.html" target="_blank">
									Tips to Help Support Your Nutritional Assessment
								</a>
							</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							
							<a href="news-details.html" target="_blank" class="read-more">
								Read More
							</a>
						</div>
					</div>

					<div class="single-news">
						<a href="news-details.html" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-2.jpg" alt="Image">
						</a>

						<div class="news-content">
							<ul>
								<li>
									<i class="bx bxs-user"></i>
									<a href="#">James Stockton</a>
								</li>
								<li>
									<i class="bx bxs-calendar"></i>
									<span>Dec 05, 2020</span>
								</li>
							</ul>

							<h3>
								<a href="news-details.html" target="_blank">
									7 Steps to Stay Healthy During Times
								</a>
							</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							
							<a href="news-details.html" target="_blank" class="read-more">
								Read More
							</a>
						</div>
					</div>

					<div class="single-news">
						<a href="news-details.html" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-3.jpg" alt="Image">
						</a>

						<div class="news-content">
							<ul>
								<li>
									<i class="bx bxs-user"></i>
									<a href="#">George Harris</a>
								</li>
								<li>
									<i class="bx bxs-calendar"></i>
									<span>Dec 06, 2020</span>
								</li>
							</ul>

							<h3>
								<a href="news-details.html" target="_blank">
									Top 5 Tips Why Selfcare is More Important
								</a>
							</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							
							<a href="news-details.html" target="_blank" class="read-more">
								Read More
							</a>
						</div>
					</div>

					<div class="single-news">
						<a href="news-details.html" target="_blank">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/news/news-4.jpg" alt="Image">
						</a>

						<div class="news-content">
							<ul>
								<li>
									<i class="bx bxs-user"></i>
									<a href="#">Kliva Dew</a>
								</li>
								<li>
									<i class="bx bxs-calendar"></i>
									<span>Dec 07, 2020</span>
								</li>
							</ul>

							<h3>
								<a href="news-details.html" target="_blank">
									We Give You Inspiration For Living a Healthy Life
								</a>
							</h3>

							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
							
							<a href="news-details.html" target="_blank" class="read-more">
								Read More
							</a>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Our News Area -->
				<!-- Start FAQ Area -->
		<section class="faq-area ptb-70">
			<div class="container">
				<div class="section-title">
					<span>FAQs</span>
					<h2>Frequently Asked  Questions</h2>
				</div>

				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="faq-accordion mb-need">
							<ul class="accordion">
								<li class="accordion-item">
									<a class="accordion-title active" href="javascript:void(0)">
										<i class="bx bx-chevron-down"></i>
										What is Diet & Nutrition Health Center?
									</a>
	
									<div class="accordion-content show">
										<p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit. Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do you Startup blanditiis voluptates Lorem, ipsum dolor</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="row align-items-center">
					<div class="col-lg-12">
						<div class="faq-accordion">
							<ul class="accordion">
								<li class="accordion-item">
									<a class="accordion-title active" href="javascript:void(0)">
										<i class="bx bx-chevron-down"></i>
										How Do I Make an Appointment With Your Office?
									</a>
	
									<div class="accordion-content">
										<p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit. Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do you Startup blanditiis voluptates Lorem, ipsum dolor</p>
									</div>
								</li>

								<li class="accordion-item">
									<a class="accordion-title" href="javascript:void(0)">
										<i class="bx bx-chevron-down"></i>
										How Does Your Weight Loss Program Work?
									</a>
	
									<div class="accordion-content">
										<p>Lorem, ipsum dolor sit amet How do you Startup? consectetur adipisicing elit. Accusamus ipsa error, excepturi, obcaecati aliquid veniam blanditiis quas voluptates maxime unde, iste minima dolores dolor perferendis facilis. How do you Startup blanditiis voluptates Lorem, ipsum dolor</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End FAQ Area -->

<?php get_footer(); ?>
		


