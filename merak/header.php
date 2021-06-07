<?php
/**
 * Header template
 *
 * @package Merak
 */

?>
<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo(' charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Merak</title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open()' ) ) {
	wp_body_open();
}
?>

	<header class="header-main">
		<div class="top-bar">
			<div class="container">
				<div class="header-row color-schema-white">
					<div class="header-col-left">
						<div class="tell">Call Now: (+035) 527-1710-70</div>
						<div class="email">Email: Contact@merak.com</div>
					</div>
					<div class="header-col-right">
						<div class="info">Ample end might folly quiet one set spoke.</div>
						<div class="currency">USD <i class="fas fa-angle-down"></i></div>
						<div class="languare"> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/usa-icon.svg" alt=""> USA <i class="fas fa-angle-down"></i></div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-general">
			<div class="container">
				<div class="header-row">
					<div class="header-col-left">
						<a href="index.html" class="logo-main"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/merak-logo.svg" alt=""></a>
					</div>
					<div class="header-col-center">
						<form class="form-search">
							<input type="text" class="autocomplete-ajax-x" disabled="disabled">
							<input type="text" placeholder="Search for products" class="autocomplete-ajax">
							<span class="select-wrapper">
								<select>
									<option>Select Category</option>
									<option>Select Category 1</option>
									<option>Select Category 2</option>
									<option>Select Category 3</option>
								</select>
							</span>
							<button><i class="fas fa-search"></i></button>
							<div class="selction-ajax"></div>
						</form>
					</div>
					<div class="header-col-right">
						<div class="header-link">
							<a href=".sing-up" class="btn-popup" data-effect="mfp-move-horizontal-right"><i class="far fa-user"></i>Login / Register</a>
							<a href="#"><i class="far fa-heart"></i> Wishlist</a>
							<a href=".shop-card" class="btn-popup" data-effect="mfp-move-horizontal-right"><i class="icons-main-header fal fa-shopping-bag"></i> 2  <span>/ $280.00</span></a>
						</div>
						<button class="button-burger"><i class="fas fa-bars"></i></button>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom">
			<div class="container">
				<div class="header-row">
					<div class="header-col-left">
						<ul class="menu-categories">
							<li class="active-dropdown"><a href="#" class="categories-main color-schema-white"><span><i class="fas fa-bars"></i> Browse Categories</span> <i class="fas fa-angle-down"></i></a>
								<ul class="menu-dropdown menu-categories">
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-1.svg" alt="">Sweatshirts</span> <i class="fas fa-angle-right"></i></a>
										<div class="menu-dropdown large-dropdown sweatshirts">
											<div class="row">
												<div class="col-5">
													<div class="dropdown-title">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-1.svg" alt="">
														<h5>Sweaters</h5>
													</div>
													<ul>
														<li><a href="#">Great blue sweater</a></li>
														<li><a href="#">Woman white sweater</a></li>
														<li><a href="#">Casual sweater with print</a></li>
														<li><a href="#">Blue sweater</a></li>
													</ul>
													<div class="dropdown-title">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-1.svg" alt="">
														<h5>Hoodies</h5>
													</div>
													<ul>
														<li><a href="#"><span class="menu-label">Casual hoodie with print<span class="menu-label-inner">New</span></span></a></li>
														<li><a href="#">Woman white hoodie</a></li>
														<li><a href="#">Black hoodie</a></li>
														<li><a href="#">Great red hoodie</a></li>
													</ul>
												</div>
												<div class="col-5">
													<div class="dropdown-title">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-1.svg" alt="">
														<h5>Sweatshirts</h5>
													</div>
													<ul>
														<li><a href="#">Casual sweatshirt with print</a></li>
														<li><a href="#"><span class="menu-label">Red sweatshirt<span class="menu-label-inner hot">HOT</span></span></a></li>
														<li><a href="#">Great yellow sweatshirt</a></li>
														<li><a href="#">Woman black sweatshirt</a></li>
													</ul>
													<div class="dropdown-title">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-1.svg" alt="">
														<h5>T-Shirts</h5>
													</div>
													<ul>
														<li><a href="#">Great blue t-shirt</a></li>
														<li><a href="#">Blue t-shirt</a></li>
														<li><a href="#">Casual t-shirt with print</a></li>
														<li><a href="#">Woman white t-shirt</a></li>
													</ul>
												</div>
												<div class="col-2">
													<div class="dropdown-category-img">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/megamenues/merak-megamenu-category-girl.png" alt="">
													</div>
												</div>
											</div>
										</div>
									</li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-2.svg" alt="">Dresses</span> <i class="fas fa-angle-right"></i></a>
										<div class="menu-dropdown large-dropdown dresses">
											<div class="row">
												<div class="col-4">
													<div class="dropdown-title-img">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/megamenues/merak-megamenu-category-banner-1.jpg" alt="">
														<div class="dropdown-title-img-inner">
															<h5>Maxi dresses</h5>
														</div>
													</div>
													<ul>
														<li><a href="#">Casual maxi dresses</a></li>
														<li><a href="#">Maxi lace frock dresses</a></li>
														<li><a href="#">Great maxi dresses</a></li>
														<li><a href="#"><span class="menu-label">Maxi Velvet dresses<span class="menu-label-inner hot">HOT</span></span></a></li>
													</ul>
												</div>
												<div class="col-4">
													<div class="dropdown-title-img">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/megamenues/merak-megamenu-category-banner-2.jpg" alt="">
														<div class="dropdown-title-img-inner">
															<h5>Mid dresses</h5>
														</div>
													</div>
													<ul>
														<li><a href="#">Casual mid dresses</a></li>
														<li><a href="#">Mid lace frock dresses</a></li>
														<li><a href="#">Great mid dresses</a></li>
														<li><a href="#">Mid Velvet dresses</a></li>
													</ul>
												</div>
												<div class="col-4">
													<div class="dropdown-title-img">
														<img src="<?php echo get_template_directory_uri(); ?>/assets/img/megamenues/merak-megamenu-category-banner-3.jpg" alt="">
														<div class="dropdown-title-img-inner">
															<h5>Mini dresses</h5>
														</div>
													</div>
													<ul>
														<li><a href="#">Cool mini dresses</a></li>
														<li><a href="#"><span class="menu-label">Mini Velvet dresses<span class="menu-label-inner">New</span></span></a></li>
														<li><a href="#">Lace frock mini dresses</a></li>
														<li><a href="#">Casual mini dresses</a></li>
													</ul>
												</div>
											</div>
											<div class="dresses-menu-link">
												<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands-ready/merak-brand-1.png" alt=""></a>
												<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands-ready/merak-brand-2.png" alt=""></a>
												<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands-ready/merak-brand-3.png" alt=""></a>
												<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands-ready/merak-brand-4.png" alt=""></a>
												<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands-ready/merak-brand-5.png" alt=""></a>
												<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/brands-ready/merak-brand-6.png" alt=""></a>
											</div>
										</div>
									</li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-3.svg" alt="">Jackets</span> <i class="fas fa-angle-right"></i></a>
										<div class="menu-dropdown large-dropdown jackets">
											<div class="row">
												<div class="col-4">
													<h5>Demi jackets</h5>
												<ul>
													<li><a href="#">Casual jaket with print</a></li>
													<li><a href="#">Woman white jaket</a></li>
													<li><a href="#"><span class="menu-label">Black jaket<span class="menu-label-inner hot">hot</span></span></a></li>
													<li><a href="#">Great red jaket</a></li>
												</ul>
												<h5>Demi jackets</h5>
												<ul>
													<li><a href="#">Casual jaket with print</a></li>
													<li><a href="#">Woman white jaket</a></li>
													<li><a href="#">Black jaket</a></li>
													<li><a href="#">Great red jaket</a></li>
												</ul>
												</div>
												<div class="col-8">
													<div class="popular-products">
														<div class="product-main-inner">
															<h5>Most popular products</h5>
															<a href="#"><span class="menu-border active"> View all </span></a>
														</div>
														<div class="row">
															<div class="col-6">
																<div class="product-box">
																	<div class="product-foto">
																		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/products(compressed)/merak-product-29-min.jpg" alt="">
																		<div class="product-foto-hover">
																			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/products(compressed)/merak-product-29-2-min.jpg" alt="">
																			<a href="#" class="link-full"></a>
																			<div class="button-product-wrapper">
																				<a href="#" class="button button-product"><i class="fas fa-plus"></i></a>
																				<a href=".quick-view" class="button button-product btn-popup" data-effect="mfp-move-horizontal" data-toggle="tooltip" data-placement="top" title="Search"><i class="fas fa-search"></i></a>
																				<a href="#" class="button button-product" data-toggle="tooltip" data-placement="top" title="Like"><i class="far fa-heart"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="product-text">
																		<div class="product-text-inner">
																			<h6><a href="#" class="link-hover">Shopper bag</a></h6>
																		</div>
																		<div class="price">$68.00</div>
																	</div>
																</div>
															</div>
															<div class="col-6">
																<div class="product-box">
																	<div class="product-foto">
																		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/products(compressed)/merak-product-32-2-min.jpg" alt="">
																		<div class="product-foto-hover">
																			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/products(compressed)/merak-product-32-min.jpg" alt="">
																			<a href="#" class="link-full"></a>
																			<div class="button-product-wrapper">
																				<a href="#" class="button button-product"><i class="fas fa-plus"></i></a>
																				<a href=".quick-view" class="button button-product btn-popup" data-effect="mfp-move-horizontal" data-toggle="tooltip" data-placement="top" title="Search"><i class="fas fa-search"></i></a>
																				<a href="#" class="button button-product" data-toggle="tooltip" data-placement="top" title="Like"><i class="far fa-heart"></i></a>
																			</div>
																		</div>
																	</div>
																	<div class="product-text">
																		<div class="product-text-inner">
																			<h6><a href="#" class="link-hover">Shopper bag</a></h6>
																		</div>
																		<div class="price">$68.00</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-4.svg" alt="">Pants</span> <i class="fas fa-angle-right"></i></a>
										<div class="menu-dropdown large-dropdown pants">
											<div class="row">
												<div class="col-4">
													<h5 class="new-pants">New pants</h5>
													<h5>Classic pants</h5>
													<ul>
														<li><a href="#">Great classic pants</a></li>
														<li><a href="#">Popular classic pants</a></li>
													</ul>
													<h5>Shorts</h5>
													<ul>
														<li><a href="#">Casual shorts</a></li>
														<li><a href="#">Jeans shorts</a></li>
														<li><a href="#">High-Waisted shorts</a></li>
														<li><a href="#">Low waist shorts</a></li>
													</ul>
												</div>
												<div class="col-4">
													<h5>Jeans</h5>
													<ul>
														<li><a href="#">Casual Jeans</a></li>
														<li><a href="#">Colored jeans</a></li>
														<li><a href="#">High-Waisted jeans</a></li>
														<li><a href="#">Low waist jeans</a></li>
														<li><a href="#">Popular brands</a></li>
													</ul>
													<h5>Joggers</h5>
													<ul>
														<li><a href="#">Casual joggers</a></li>
														<li><a href="#">Sport joggers</a></li>
														<li><a href="#">Joggers with print</a></li>
													</ul>
												</div>
												<div class="col-4 menu-border-left">
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/megamenues/merak-megamenu-category-banner-4.jpg" alt="">
													<h5>A wonderful serenity has possession</h5>
													<p>I am so happy, my dear exquisite sense</p>
												</div>
											</div>
										</div>
									</li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-5.svg" alt="">Cardigan</span></a></li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-6.svg" alt="">Boots</span></a></li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-7.svg" alt="">Loafers</span></a></li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-8.svg" alt="">Handbags</span></a></li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-9.svg" alt="">Hats</span></a></li>
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-10.svg" alt="">Accessories</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="header-col-center">
						<ul class="menu-main">
							<li><a href="index.html"><span class="menu-border active"> Home </span><i class="fas fa-angle-down"></i></a>
								<div class="menu-dropdown large-dropdown home">
									<div class="row">
										<div class="col-4">
											<h5>Home #1</h5>
											<p>Women's urban clothing store</p>
											<a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/megamenues/merak-megamenu-home-1.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<h5>Home #2</h5>
											<p>Women's urban clothing store</p>
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/megamenues/merak-megamenu-home-2.jpg" alt=""></a>
										</div>
										<div class="col-4">
											<h5>Home #3</h5>
											<p>Women's urban clothing store</p>
											<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/megamenues/merak-megamenu-home-3.jpg" alt=""></a>
										</div>
									</div>
								</div>
							</li>
							<li><a href="pages/shop.html"><span class="menu-border">Shop</span> <i class="fas fa-angle-down"></i></a>
								<div class="menu-dropdown large-dropdown shop">
									<div class="row menu-dropdown-inner">
										<div class="col-3">
											<h5>Product Hovers</h5>
											<ul>
												<li><a href="#">Summary</a></li>
												<li><a href="#">Summary alternative</a></li>
												<li><a href="#">Bottom button</a></li>
												<li><a href="#">Button on image</a></li>
											</ul>
											<h5>Theme Features</h5>
											<ul>
												<li><a href="#">Product with video</a></li>
												<li><a href="#"><span class="menu-label">Stock progress bar<span class="menu-label-inner hot">HOT</span></span></a></li>
												<li><a href="#">With countdown timer</a></li>
											</ul>
										</div>
										<div class="col-3">
											<div class="shop-dropdown-img">
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/megamenues/merak-megamenu-banner-1.jpg" alt="">
												<div class="shop-dropdown-img-inner">
													<h6 class="sub-title">Treat yourself</h6>
													<h3>Summer Loafers</h3>
													<a href="#" class="link-hover"><span class="menu-border active">To shop</span></a>
												</div>
											</div>
										</div>
										<div class="col-6">
											<h5>Trends</h5>
											<div class="shop-list-wrapper">
												<ul class="shop-list-col-2">
													<li><a href="#">Off canvas sidebar</a></li>
													<li><a href="#">Filters widget area</a></li>
													<li><a href="#">Header overlap</a></li>
													<li><a href="#"><span class="menu-label">With page heading<span class="menu-label-inner">new</span></span></a></li>
													<li><a href="#">Off canvas sidebar</a></li>
													<li><a href="#">Filters widget area</a></li>
													<li><a href="#">Header overlap</a></li>
													<li><a href="#">With page heading</a></li>
												</ul>
											</div>
											<h5>Popular categories</h5>
											<div class="popular-categories">
												<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-2-category/merak-home-2-category-5.jpg" alt=""></a>
												<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-2-category/merak-home-2-category-7.jpg" alt=""></a>
												<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-2-category/merak-home-2-category-2.jpg" alt=""></a>
												<a href="#"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home-2-category/merak-home-2-category-9.jpg" alt=""></a>
											</div>
										</div>
									</div>
								</div>
							</li>
							<li><a href="#"><span class="menu-border">Blog </span><i class="fas fa-angle-down"></i></a>
								<div class="menu-dropdown large-dropdown blog">
									<div class="row menu-dropdown-inner">
										<div class="col-6">
											<h5>Blog posts</h5>
											<ul>
												<li><a href="#">Post Example #1</a></li>
												<li><a href="#">Post Example #2</a></li>
												<li><a href="#"><span class="menu-label">Post Gutenberg<span class="menu-label-inner hot">HOT</span></span></a></li>
											</ul>
											<h5>Blog options</h5>
											<ul>
												<li><a href="#">Post design default</a></li>
												<li><a href="#">Post design mask</a></li>
												<li><a href="#">Load more button</a></li>
												<li><a href="#">Infinite scrolling</a></li>
											</ul>
										</div>
										<div class="col-6">
											<h5>Features</h5>
											<ul>
												<li><a href="#">Image in page title</a></li>
												<li><a href="#">Content layout boxed</a></li>
												<li><a href="#">Masonry layout</a></li>
												<li><a href="#">Different post sizes</a></li>
												<li><a href="#">One column layout</a></li>
												<li><a href="#">Image in page title</a></li>
												<li><a href="#"><span class="menu-label">Content layout boxed <span class="menu-label-inner">new</span></span></a></li>
												<li><a href="#">Masonry layout</a></li>
											</ul>
										</div>
									</div>
									<div class="rectangle color-schema-white">
										<h5>We are a very popular store</h5>
										<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,	there live the blind texts.</p>
										<div class="rectangle-video">
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/megamenues/merak-megamenu-video.jpg" alt="">
											<a href="#" class="play"><i class="fal fa-play"></i></a>
										</div>
									</div>
								</div>
							</li>
							<li><a href="pages/about-us.html"><span class="menu-border">About us</span></a></li>
							<li><a href="pages/contact-us.html"><span class="menu-border">Contact us</span></a></li>
						</ul>
					</div>
					<div class="header-col-right">
						<div class="header-bottom-info">
							Winter <span class="primary-color">discounts</span> up to 40%
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
