<?php
/**
 * Front Page
 *
 * @package Merak
 */

get_header();
?>

<section class="slider">
		<div class="container">
			<div class="row">
				<div class="offset-lg-4 col-lg-8 offset-xl-3 col-xl-9">
					<div class="slider-foto color-schema-white">
						<div class="swiper-container" data-option='{"loop":true, "navigation":true, "pagination":true, "slidesPerView": 1}'>
							<div class="swiper-wrapper">
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/merak-home-1-slider-1.jpg" alt="">
									<div class="slider-foto-inner">
										<h1>Beautiful Casual Summer Dress</h1>
										<p>Cultivated who resolution connection motionless did occasional. Journey promise if it colonel.</p>
										<div class="button-wrapper">
											<a href="#" class="button button-while">To Shop</a>
											<span class="button chech-product"></span>
											<span class="button chech-product chech-product-red"></span>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/merak-home-1-slider-2.jpg" alt="">
									<div class="slider-foto-inner">
										<h1>Beautiful Casual Summer Dress</h1>
										<p>Cultivated who resolution connection motionless did occasional. Journey promise if it colonel.</p>
										<div class="button-wrapper">
											<span class="button chech-product"></span>
											<a href="#" class="button button-while">To Shop</a>
											<span class="button chech-product chech-product-red"></span>
										</div>
									</div>
								</div>
								<div class="swiper-slide">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/merak-home-1-slider-3.jpg" alt="">
									<div class="slider-foto-inner">
										<h1>Beautiful Casual Summer Dress</h1>
										<p>Cultivated who resolution connection motionless did occasional. Journey promise if it colonel.</p>
										<div class="button-wrapper">
											<span class="button chech-product"></span>
											<span class="button chech-product chech-product-red"></span>
											<a href="#" class="button button-while">To Shop</a>
										</div>
									</div>
								</div>
							</div>
							<div class="slider-numbers">
								<span class="slider-left"><i class="fas fa-chevron-left"></i></span>
								<div class="swiper-pagination"></div>
								<span class="slider-right"><i class="fas fa-chevron-right"></i></span>
							</div>							
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

<?php
get_footer();
?>
