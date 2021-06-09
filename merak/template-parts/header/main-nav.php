<?php
/**
 * Main header
 *
 * @package Merak
 */

?>

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
						<a href="index.html" class="logo-main">
							<?php
							if ( function_exists( 'the_custom_logo' ) ) {
								the_custom_logo();
							}
							?>
						</a>
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
							<li class="<?php echo is_front_page() ? 'active-dropdown' : ''; ?>"><a href="#" class="categories-main color-schema-white"><span><i class="fas fa-bars"></i> Browse Categories</span> <i class="fas fa-angle-down"></i></a>
								<ul class="sub-menu menu-categories">
									<li><a href="#"><span><img src="<?php echo get_template_directory_uri(); ?>/assets/img/category-svg/merak-category-icon-1.svg" alt="">Sweatshirts</span> <i class="fas fa-angle-right"></i></a>
										<div class="sub-menu large-dropdown sweatshirts">
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
										<div class="sub-menu large-dropdown dresses">
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
										<div class="sub-menu large-dropdown jackets">
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
										<div class="sub-menu large-dropdown pants">
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
					<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'merak-header-menu',
								'menu'            => 'Header Menu',
								'container'       => 'div',
								'container_class' => 'header-col-center',
								'menu_class'      => 'menu-main',
								'link_before'     => '<span>',
								'link_after'      => '</span>',
							)
						);
						?>
					<div class="header-col-right">
						<div class="header-bottom-info">
							Winter <span class="primary-color">discounts</span> up to 40%
						</div>
					</div>
				</div>
			</div>
		</div>
