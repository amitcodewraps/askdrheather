<?php
/*Template Name: Shop*/
get_header();
 ?>

	<?php get_template_part('breadcrum');?>


		<!-- Start Product Area -->
		<section class="product-area ptb-100">
			<div class="container">
				
				<div class="row">


                <?php if( have_rows('add_details') ): while( have_rows('add_details') ): the_row(); ?>

					<div class="col-lg-4 col-sm-6">
						<div class="single-product">
							<div class="product-img">
								<a href="https://drheather.rebootnow.com/hk/" target="_blank">

								<img src="<?php echo get_sub_field('image'); ?>" alt="Image">
								</a>
							</div>
							<a href="<?php echo get_sub_field('url'); ?>" target="_blank">
								<h3><?php echo get_sub_field('title'); ?></h3>
							</a>
						</div>
					</div>
            <?php endwhile; endif; ?> 
					
				</div>
			</div>
		</section>
		<!-- End Product Area -->

<?php get_footer(); ?>		