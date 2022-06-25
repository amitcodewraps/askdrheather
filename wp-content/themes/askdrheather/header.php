<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package askdrheather
 */
?>
<!doctype html>
<html lang="zxx">
<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <?php wp_head(); ?>
		<!-- Bootstrap Min CSS --> 
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />  
		
		<!-- Favicon -->
		
		<!-- Title -->
		<title><?php the_title(); ?></title>
    </head>
    <body>
		<!-- Start Preloader Area -->
		<div class="preloader">
			<div class="lds-ripple">
				<span class="loader-inner-1"></span>
                <span class="loader-inner-2"></span>
                <span class="loader-inner-3"></span>
                <span class="loader-inner-4"></span>
			</div>
		</div>
		<!-- End Preloader Area -->





		  <div class="header-top">
			  <div class="container">
					<div class="row relate-position">
						<div class="col-md-12 text-center">
							<a class="site-logo" href="<?php echo get_home_url(); ?>">
								 <?php the_custom_logo(); ?>
							
							</a>
						</div>
						<div class="col-md-12 text-center">
							<a class="lets-start" href="<?php echo get_home_url(); ?>">
							Let's Get Started
						    </a>
						</div>
						
      <?php dynamic_sidebar('sidebar-1'); ?>

			<span class="subs-button">
				<input type="submit" value="Subscribe Now" class="default-btn" id="myBtn">
			</span>
					</div>
				</div>	
		  </div>
			<!-- Start Navbar Area -->
			<div class="navbar-area navbar-area-style-two">
				<div class="mobile-nav">
					<div class="container">
						<div class="mobile-menu">
							<div class="logo">
								<a href="<?php echo get_home_url(); ?>">
									<?php the_custom_logo(); ?>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="desktop-nav">
					<div class="container-fluid">
						<nav class="navbar navbar-expand-md navbar-light">
							<div class="collapse navbar-collapse mean-menu">
								<ul class="navbar-nav m-auto">
									<li class="nav-item">
										<a href="<?php echo esc_url( get_page_link( 5 ) ); ?>" class="nav-link active">
											Home
										</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo esc_url( get_page_link( 47 ) ); ?>" class="nav-link">About Me
										<i class="bx bx-chevron-down"></i>
										</a>
										<ul class="dropdown-menu">
											<li class="nav-item">
											<a href="<?php echo esc_url( get_page_link( 58 ) ); ?>" class="nav-link"> misson-statement</a>
											</li>
										
										</ul>
											
									</li>
                
                <li class="nav-item">
										<a href="#" class="nav-link">Healthy Bites 
											<i class="bx bx-chevron-down"></i>
										</a>
			
										<ul class="dropdown-menu">
											<li class="nav-item">
											<a href="#" class="nav-link"> Main dishes</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													Veggies
												</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">Snack & deserts</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">Cooking Tips</a>
											</li>
										</ul>
									</li>                   
                     
                  <li class="nav-item">
										<a href="#" class="nav-link">Natural Remedies</a>
									</li>

									<li class="nav-item">
										<a href="#" class="nav-link">Categories 
											<i class="bx bx-chevron-down"></i>
										</a>
			
										<ul class="dropdown-menu">
											<li class="nav-item">
											<a href="#" class="nav-link"> Nutrition</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													Movement & Fitness
												</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">Hormones</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">Chronic Pain</a>
												<ul class="dropdown-menu"><li class="nav-item">
												<a href="#" class="nav-link">RSD & CRPS Chronic Regional Pain Syndrome</a>
											</li></ul>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link"> Healthy Living</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">Detox</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">Heavy Metals</a>
											</li>
										</ul>
									</li>

									<li class="nav-item">
										<a href="#" class="nav-link">Ketones 
											<i class="bx bx-chevron-down"></i>
										</a>
			
										<ul class="dropdown-menu">
											<li class="nav-item">
											<a href="#" class="nav-link">ketones Exogenous </a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													Research
												</a>
											</li>
										</ul>
									</li>

										<li class="nav-item">
										<a href="#" class="nav-link">Challenges 
											<i class="bx bx-chevron-down"></i>
										</a>
			
										<ul class="dropdown-menu">
											<li class="nav-item">
											<a href="#" class="nav-link"> 24Fast</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													 60Hour Keto ReBoot
												</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													 10 Day Keto Challenge
												</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													 Core4 Challenge
												</a>
											</li>
										</ul>
									</li>


									<li class="nav-item">
										<a href="#" class="nav-link">Fasting 
											<i class="bx bx-chevron-down"></i>
										</a>
			
										<ul class="dropdown-menu">
											<li class="nav-item">
											<a href="#" class="nav-link">Intermittent Fasting</a>
											</li>
											<li class="nav-item">
												<a href="#" class="nav-link">
													 Prolonged Fasting
												</a>
											</li>
											<li class="nav-item">
											<a href="#" class="nav-link">Dry vs Wet Fasting</a>
											</li>
											<li class="nav-item">
											<a href="#" class="nav-link">Types of Fasting</a>
											</li>
										</ul>
									</li>
									
									
									<li class="nav-item">
										<a href="<?php echo esc_url( get_page_link( 40 ) ); ?>" class="nav-link">Contact</a>
									</li>

									<li class="nav-item">
										<a href="<?php echo esc_url( get_page_link( 33 ) ); ?>" class="nav-link">Shop</a>
									</li>
									
								</ul>
							</div>
						</nav>
					</div>
				</div>
			</div>
			<!-- End Navbar Area -->
		</header>
		<!-- End Header Area -->


<style>

.modal {
    padding-top: 100px;
    background-color: rgba(0,0,0,0.4);
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1050;
    display: none;
    width: 100%;
    height: 100%;
    overflow: hidden;
    outline: 0;
}

.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}


.modal-body {padding: 2px 16px;}

</style>


		<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
      <span class="close">&times;</span>
    <div class="modal-body">
      <div class="container-fluid bg-cover section-bg">
            <div class="cta-content">
                <div class="row align-items-center">
                    <div class="col-xl-12 text-white col-12 text-center">
						<h1 class="text-white">Subscribe</h1>
                        <p>To start their day in the right way with some of my favorite breakfast/brunch recipes</p>
						</div>
						<div class="col-xl-12 col-12 text-center text-xl-right form-mid-sec">
								<input type="email" name="email" value="" size="40" class="email-control" aria-required="true" aria-invalid="false" placeholder="Your email address">
							<input type="submit" value="Subscribe Now" class="default-btn">
						</div>
					</div>
				</div>
			</div>
    </div>
  </div>

</div>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>