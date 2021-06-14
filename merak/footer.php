<?php
/**
 * Footer template
 *
 * @package Merak
 */

?>
	<footer class="footer-main">
		<div class="footer-general">
			<div class="container">
				<div class="footer-general-inner">
					<div class="row">
						<div class="col-sm-12 col-lg-3">
							<a href="index.html" class="logo-main">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/merak-logo.svg" alt="">
							</a>
							<p>Merak Fashion - Brand clothing and accessories store for women</p>
							<a href="#">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/img/payment-metods.png" alt="">
							</a>
						</div>
						<div class="col-sm-12 col-md-6 offset-lg-1 col-lg-2">
							<div class="footer-link-wrapper">
								<ul class="footer-link">
									<li><a href="pages/about-us.html" class="link-hover-primary">About</a></li>
									<li><a href="#">Blog</a></li>
									<li><a href="pages/contact-us.html">Contact</a></li>
									<li><a href="#">FAQs</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-md-6 col-lg-3">
							<div class="footer-link-wrapper">
								<ul class="footer-link">
									<li><a href="#">Privacy Policy</a></li>
									<li><a href="#">Returns</a></li>
									<li><a href="#">Order tracking</a></li>
									<li><a href="#">Conditions</a></li>
									<li><a href="#">Support</a></li>
								</ul>
							</div>
						</div>
						<div class="col-sm-12 col-lg-3">
							<div class="footer-about-us">
								<div class="tell">+453 211 41 38</div>
								<div class="address">Kongens Nytorv 13, 1095, København, Denmark</div>
								<div class="footer-social">
									<a href="#" class="link-hover-primary">
										<i class="fas fa-envelope"></i>
									</a>
									<a href="#" class="link-hover-primary">
										<i class="fa fa-facebook" aria-hidden="true"></i>
									</a>
									<a href="#" class="link-hover-primary">
										<i class="fab fa-twitter"></i>
									</a>
									<a href="#" class="link-hover-primary">
										<i class="fab fa-instagram"></i>
									</a>
									<a href="#" class="link-hover-primary">
										<i class="fab fa-telegram"></i>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="copyring">
			<div class="container">
				Merak 2020 Created Name Studio
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>
