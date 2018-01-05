
	<body class="m-has-style-switcher">
	
		<!-- WRAPPER : begin -->
		<div id="wrapper">

			<!-- CORE : begin -->
			<div id="core" class="core-bg-2">

				<!-- PAGE HEADER : begin -->
				<div id="page-header">
					<div class="container">
						<h1><?php echo $ptv['name']?></h1>
						<ul class="breadcrumbs">
							<li><a href="index.php">Home</a></li>
							<li><a href=<?php echo base_url()?>/main/pages/shop-list>Shop</a></li>
							<li><?php echo $ptv['name']?></li>
						</ul>
					</div>
				</div>
				<!-- PAGE HEADER : begin -->

				<div class="container">
					<div class="row">
						<div class="col-md-8">

							<!-- PAGE CONTENT : begin -->
							<div id="page-content">

								<!-- PRODUCT DETAIL : begin -->
								<div class="product-detail">

									<div class="row">
										<div class="col-sm-6">

											<!-- PRODUCT IMAGES : begin -->
											<div class="product-images">
												<p class="main-image"><a href="images/product_01_big.jpg" class="lightbox" data-lightbox-group="product"><img src="images/product_01_big.jpg" alt=""></a></p>
												<ul>
													<li><a href="images/product_01_big_02.jpg" class="lightbox" data-lightbox-group="product"><img src="images/product_01_thumb_02.jpg" alt=""></a></li>
													<li><a href="images/product_01_big_03.jpg" class="lightbox" data-lightbox-group="product"><img src="images/product_01_thumb_03.jpg" alt=""></a></li>
													<li><a href="images/product_01_big_04.jpg" class="lightbox" data-lightbox-group="product"><img src="images/product_01_thumb_04.jpg" alt=""></a></li>
												</ul>
											</div>
											<!-- PRODUCT IMAGES : end -->

										</div>
										<div class="col-sm-6">

											<!-- PRODUCT RATING : begin -->
											<div class="product-rating">
												<a href="#product-tabs">
													<span class="rating-stars"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></span>
													<span class="rating-label">3 reviews</span>
												</a>
											</div>
											<!-- PRODUCT RATING : end -->

											<!-- PRODUCT SHORT DESCRIPTION : begin -->
											<div class="product-short-description various-content">
												<p><?php echo $ptv['description']?></p>
											</div>
											<!-- PRODUCT SHORT DESCRIPTION : end -->

											<!-- PRODUCT INFO : begin -->
											<div class="product-info">

												<!-- PRODUCT STATUS : begin -->
												<div class="product-status m-available">
													<div class="product-status-inner">
														<i class="ico fa fa-check"></i>
														<h5>In Stock</h5>
														<p>Ship in 24h</p>
													</div>
												</div>
												<!--div class="product-status m-unavailable">
													<div class="product-status-inner">
														<i class="ico fa fa-times"></i>
														<h5>Unavailable</h5>
														<p>Product unavailable</p>
													</div>
												</div-->
												<!--div class="product-status m-info">
													<div class="product-status-inner">
														<i class="ico fa fa-clock-o"></i>
														<h5>Back Order</h5>
														<p>Out of stock</p>
													</div>
												</div-->
												<!-- PRODUCT STATUS : end -->

												<!-- PRODUCT PRICE : begin -->
												<div class="product-price">
													<span class="old-price">$29,99</span>
													<strong class="price"><?php echo $ptv['price']?></strong>
												</div>
												<!-- PRODUCT PRICE : end -->

											</div>
											<!-- PRODUCT INFO : end -->

											<!-- PRODUCT TOOLS : begin -->
											<form action=<?php echo base_url()?>main/add2cart/<?php echo $ptv['product_id']?> class="product-tools default-form">

												<div class="quantity-input">
													<input type="number" class="m-type-2" value="1" min="1" max="100" step="1">
												</div>
												<button class="c-button product-cart-btn" type="submit">Add To Cart</button>

											</form>
											<!-- PRODUCT TOOLS : end -->

										</div>
									</div>

									<!-- PRODUCT TABS : begin -->
									<div class="c-tabs product-tabs" id="product-tabs">
										<ul class="tab-list">
											<li class="m-active">Description</li>
											<li class="product-reviews-tab">Reviews (3)</li>
										</ul>
										<ul class="content-list">
											<li>

												<!-- PRODUCT DESCRIPTION : begin -->
												<div class="product-description various-content">
                                                    <?php echo $ptv['description']?>

                                                </div>
												<!-- PRODUCT DESCRIPTION : end -->

											</li>
											<li style="display: none;">

												<!-- PRODUCT REVIEWS : begin -->
												<div class="product-reviews">

													<!-- REVIEW LIST: begin -->
													<ul class="review-list" id="product-reviews">
														<li>

															<!-- REVIEW : begin -->
															<div class="review">
																<p class="review-portrait"><img alt="" src="images/comment_author_01.jpg"></p>
																<h4 class="review-author">NO ONE</h4>
																<p class="review-rating"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></p>
																<div class="review-content various-content">
																	<p>NOT AVAILABLE CURRENTLY</p>
																</div>
																<div class="review-info">
																	<div class="review-date">no date</div>
																</div>
															</div>
															<!-- REVIEW : end -->

														</li>
														
													</ul>
													<!-- REVIEW LIST: end -->

													
												</div>
												<!-- PRODUCT REVIEWS : end -->

											</li>
										</ul>
									</div>
									<!-- PRODUCT TABS : end -->

									<!-- RELATED PRODUCTS : begin -->
									<div class="related-products">

										<h2 class="heading-2">Related Products</h2>

										<div class="row">
											<div class="col-sm-4">

												<!-- PRODUCT : begin -->
												<div class="product">
													<p class="product-image">
														<a href="shop-detail.html"><img src="images/product_01_thumb.jpg" alt=""></a>
													</p>
													<h4 class="product-title"><a href="shop-detail.html">Almond Supple Skin Oil</a></h4>
													<p class="product-price">$35.50</p>
												</div>
												<!-- PRODUCT : end -->

											</div>
											<div class="col-sm-4">

												<!-- PRODUCT : begin -->
												<div class="product">
													<p class="product-image">
														<a href="shop-detail.html"><img src="images/product_02_thumb.jpg" alt=""></a>
													</p>
													<h4 class="product-title"><a href="shop-detail.html">Almond Tonic Body Oil</a></h4>
													<p class="product-price">$36.50</p>
												</div>
												<!-- PRODUCT : end -->

											</div>
											<div class="col-sm-4">

												<!-- PRODUCT : begin -->
												<div class="product">
													<p class="product-image">
														<a href="shop-detail.html"><img src="images/product_03_thumb.jpg" alt=""></a>
													</p>
													<h4 class="product-title"><a href="shop-detail.html">Aroma Volumizing Mask</a></h4>
													<p class="product-price"><span class="old-price">$27.20</span>$24.20</p>
												</div>
												<!-- PRODUCT : end -->

											</div>
										</div>

									</div>
									<!-- RELATED PRODUCTS : end -->

								</div>
								<!-- PRODUCT DETAIL : end -->

							</div>
							<!-- PAGE CONTENT : end -->

						</div>
						<div class="col-md-4">

							<!-- SIDEBAR : begin -->
							<aside id="sidebar">

								<!-- SIDEBAR CART : begin -->
								<div class="sidebar-widget sidebar-cart">
									<h3 class="widget-title">Your Cart</h3>
									<div class="widget-content">

										<!-- CART PRODUCT LIST : begin -->
										<ul class="cart-product-list">
											<li>
												<div class="cart-product">
													<p class="product-image"><a href="shop-detail.html"><img src="images/product_01_mini.jpg" alt=""></a></p>
													<h4 class="product-title"><a href="shop-detail.html">Almond Supple Skin Oil</a></h4>
													<p class="product-price">1 x $35.50</p>
												</div>
											</li>
											<li>
												<div class="cart-product">
													<p class="product-image"><a href="shop-detail.html"><img src="images/product_02_mini.jpg" alt=""></a></p>
													<h4 class="product-title"><a href="shop-detail.html">Almond Tonic Body Oil</a></h4>
													<p class="product-price">1 x $36.50</p>
												</div>
											</li>
											<li>
												<div class="cart-product">
													<p class="product-image"><a href="shop-detail.html"><img src="images/product_03_mini.jpg" alt=""></a></p>
													<h4 class="product-title"><a href="shop-detail.html">Aroma Volumizing Mask</a></h4>
													<p class="product-price">1 x $27.20</p>
												</div>
											</li>
										</ul>
										<!-- CART PRODUCT LIST : end -->

										<!-- CART FOOTER : begin -->
										<footer class="cart-footer">
											<div class="cart-total"><h5>Total</h5><strong>$99.20</strong></div>
											<p class="cart-btn"><a href="shop-cart.html" class="c-button m-type-2">Open Cart</a></p>
										</footer>
										<!-- CART FOOTER : end -->

									</div>
								</div>
								<!-- SIDEBAR CART : end -->

								<!-- SIDEBAR LINKS : begin -->
								<div class="sidebar-widget sidebar-links">
									<h3 class="widget-title">Categories</h3>
									<div class="widget-content">
										<ul>
											<li><a href="#">Hair Products</a></li>
											<li><a href="#">Face Care Products</a></li>
											<li><a href="#">Body Care Products</a></li>
										</ul>
									</div>
								</div>
								<!-- SIDEBAR LINKS : end -->

								<!-- SIDEBAR SEARCH : begin -->
								<div class="sidebar-widget sidebar-search">
									<h3 class="widget-title">Search</h3>
									<div class="widget-content">
										<form class="c-search-form" action="search-results.html">
											<div class="form-fields">
												<input type="text" data-placeholder="What to search...">
												<button class="c-button" type="submit"><i class="fa fa-search"></i></button>
											</div>
										</form>
									</div>
								</div>
								<!-- SIDEBAR SEARCH : end -->

								<!-- SIDEBAR PRODUCTS : begin -->
								<div class="sidebar-widget sidebar-products">
									<h3 class="widget-title">Popular Products</h3>
									<div class="widget-content">
										<ul>
											<li>
												<h4 class="product-title"><a href="shop-detail.html">Aromachology Repairing Mask</a></h4>
												<p class="product-price"><span class="old-price">$26.49</span> $22.49</p>
											</li>
											<li>
												<h4 class="product-title"><a href="shop-detail.html">Almond Supple Skin Oil</a></h4>
												<p class="product-price">$35.50</p>
											</li>
											<li>
												<h4 class="product-title"><a href="shop-detail.html">Shea Ultra Gentle Moisturizer</a></h4>
												<p class="product-price">$29.99</p>
											</li>
										</ul>
									</div>
								</div>
								<!-- SIDEBAR PRODUCTS : end -->

								<!-- SIDEBAR TAGS : begin -->
								<div class="sidebar-widget sidebar-tags">
									<h3 class="widget-title">Popular Tags</h3>
									<div class="widget-content">
										<ul>
											<li><a href="#">Cream</a></li>
											<li><a href="#">Skin</a></li>
											<li><a href="#">Almond</a></li>
											<li><a href="#">Extract</a></li>
											<li><a href="#">Face</a></li>
											<li><a href="#">Shaping</a></li>
											<li><a href="#">Mask</a></li>
										</ul>
									</div>
								</div>
								<!-- SIDEBAR TAGS : end -->

							</aside>
							<!-- SIDEBAR : end -->

						</div>
					</div>
				</div>

			</div>
			<!-- CORE : end -->

			<!-- BOTTOM PANEL : begin -->
			<div id="bottom-panel">
				<div class="bottom-panel-inner">
					<div class="container">
						<div class="row">
							<div class="col-md-6">

								<!-- BOTTOM TEXT : begin -->
								<div class="bottom-text various-content">

									<h3>About Beautyspot</h3>
									<p><strong>BEAUTYSPOT</strong> is an ideal template for <strong>beauty salon, hairdressers, wellness or spa</strong>. Clean code and top-notch web design techniques are wrapped with <strong>several gorgeous color schemes</strong> to choose from.</p><p>You can buy this responsive HTML5/CSS3 template on <a href="http://themeforest.net/user/ShakespeareThemes/portfolio?ref=LSVRthemes">ThemeForest</a>.</p>

								</div>
								<!-- BOTTOM TEXT : end -->

							</div>
							<div class="col-md-6">

								<!-- BOTTOM SUBSCRIBE : begin -->
								<div class="bottom-subscribe various-content">

									<h3>Newsletter</h3>
									<p>BEAUTYSPOT supports MailChimp integration.</p>
									<form id="subscribe-form" action="http://volovar.us8.list-manage.com/subscribe/post-json?u=76a50c9454ec8ab78914d1bf2&amp;id=49e892f53d&amp;c=?" method="get">

										<!-- VALIDATION ERROR MESSAGE : begin -->
										<p style="display: none;" class="c-alert-message m-warning m-validation-error"><i class="ico fa fa-exclamation-circle"></i>Email address is required.</p>
										<!-- VALIDATION ERROR MESSAGE : end -->

										<!-- SENDING REQUEST ERROR MESSAGE : begin -->
										<p style="display: none;" class="c-alert-message m-warning m-request-error"><i class="ico fa fa-exclamation-circle"></i>There was a connection problem. Try again later.</p>
										<!-- SENDING REQUEST ERROR MESSAGE : end -->

										<!-- SUCCESS MESSAGE : begin -->
										<p style="display: none;" class="c-alert-message m-success"><i class="ico fa fa-check-circle"></i><strong>Sent successfully.</strong></p>
										<!-- SUCCESS MESSAGE : end -->

										<div class="form-fields">
											<input class="m-required m-email" name="EMAIL" type="text" data-placeholder="Your email address" title="Your email address">
											<button class="c-button submit-btn" type="submit" data-label="Subscribe" data-loading-label="Sending...">Subscribe</button>
										</div>
									</form>

								</div>
								<!-- BOTTOM SUBSCRIBE : end -->

							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- BOTTOM PANEL : end -->

			<!-- FOOTER : end -->

		</div>
	

	</body>
