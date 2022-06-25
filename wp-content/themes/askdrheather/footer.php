<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package askdrheather
 */

?>

	<!-- Start Footer Area -->
		<footer class="footer-area pt-100 pb-0">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6">
						 <?php dynamic_sidebar('footer1'); ?>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Contact Us</h3>
                       <ul class="address">
								<li class="location">
								<i class="bx bx-location-plus"></i>
								<?php dynamic_sidebar('address'); ?>
                                </li>
								<li>
									<i class="bx bx-envelope"></i>
									<?php dynamic_sidebar('email'); ?>
									
								</li>
								<li>
									<i class="bx bx-phone"></i>
									<?php dynamic_sidebar('phone'); ?>
								</li>

								<li>
									<i class="fa fa-fax iconfax" aria-hidden="true"></i>
									<?php dynamic_sidebar('fax'); ?>
								</li>
							</ul>
							
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						<div class="single-footer-widget">
							<h3>Quick Links</h3>

							<?php dynamic_sidebar('footer3'); ?>
						</div>
					</div>

					<div class="col-lg-3 col-md-6">
						
                     <?php dynamic_sidebar('footer4'); ?>


<div class="single-footer-widget">							
<ul class="import-link">	
<form>
<div class="form-group">
<!-- <input type="email" class="form-control mt-3 p-3" id="exampleFormControlInput1" placeholder="Your Email" /> -->
<button data-bs-toggle="modal" data-bs-target="#subscribeMe" type="button" class="btn w-100 mt-1" id="subscribeBtn" >Subscribe NOW...Start your day.</button>
</div>
</form>
</ul>
</div> 

      <!--               <form>
<div class="form-group">
<input type="email" class="form-control mt-3 p-3" id="exampleFormControlInput1" placeholder="Your Email" />
<button class="btn w-100 mt-1">Subscribe</button>
</div>
</form> -->

					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer Area -->

		<!-- Start Copy Right Area -->
		<div class="copy-right-area">
			<div class="container">
				<?php dynamic_sidebar('copyright'); ?>
			</div>
		</div>
		<!-- End Copy Right Area -->
		
		<!-- Start Go Top Area -->
		<div class="go-top">
			<i class="bx bx-chevrons-up"></i>
			<i class="bx bx-chevrons-up"></i>
		</div>
		<!-- End Go Top Area -->
		

        <!-- Jquery Min JS -->
        <script data-cfasync="false" src="<?php echo get_template_directory_uri(); ?>/../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script> 
        <!-- Bootstrap Bundle Min JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
        <!-- Meanmenu Min JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/meanmenu.min.js"></script>
		<!-- Owl Carousel Min JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/owl.carousel.min.js"></script>
		<!-- Wow Min JS -->
        <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>
        <!-- Nice Select Min JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/nice-select.min.js"></script>
        <!-- Magnific Popup Min JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/magnific-popup.min.js"></script>
		<!-- Mixitup Min JS --> 
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/mixitup.min.js"></script>
		<!-- Datepicker Min JS --> 
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap-datepicker.min.js"></script>
		<!-- Form Validator Min JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/form-validator.min.js"></script>
		<!-- Contact JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/contact-form-script.js"></script>
		<!-- Ajaxchimp Min JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/ajaxchimp.min.js"></script>
        <!-- Custom JS -->
		<script src="<?php echo get_template_directory_uri(); ?>/assets/js/custom.js"></script>
    </body>
	
	<script>
		$(document).ready(function(){
    $("#subscribeBtn").click(function(){
        $("#subscribeMe").modal();
    });
});
	</script>
<?php wp_footer(); ?>





<div class="modal fade" id="subscribeMe" tabindex="-1" role="dialog" aria-labelledby="subscribeMeLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row align-items-center">
                    <div class="col-xl-12 text-white col-12 text-center">
						<h1 class="text-white">Subscribe</h1>
						</div>
						<div class="col-xl-12 col-12 text-center text-xl-right form-mid-sec">
							<input type="text" name="" id="" placeholder="Your Name" class="email-control">
								<input type="email" name="email" value="" size="40" class="email-control" aria-required="true" aria-invalid="false" placeholder="Your email address">
							<input type="submit" value="Subscribe NOW...Start your day." class="default-btn">
						</div>
					</div>
      </div>
    </div>
  </div>
</div>
</html>



