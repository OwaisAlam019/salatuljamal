
	<body class="m-has-style-switcher">

		

		<!-- WRAPPER : begin -->
		<div id="wrapper">

			<!-- CORE : begin -->
			<div id="core" class="core-bg-2">

				<!-- PAGE HEADER : begin -->

				<div class="container">
					<div class="row">
						<div class="col-md-8">

							<!-- PAGE CONTENT : begin -->
							<div id="page-content">

								<!-- PRODUCT LIST TOOLS : begin -->
								<div class="product-list-tools">
									<div class="row">
										<div class="col-sm-6">

											<!-- PRODUCT LIST TITLE : begin -->
											<h2 class="product-list-title">Showing 12 Items</h2>
											<!-- PRODUCT LIST TITLE : end -->

										</div>
										<div class="col-sm-6">

											<!-- PRODUCT LIST SORTING : begin -->
											<form action="" class="default-form product-list-sorting">
												<select class="selectbox-input m-small m-type-2">
													<option value="default">Default Sorting</option>
													<option value="lowest">Lowest Price</option>
													<option value="highest">Highest Price</option>
												</select>
											</form>
											<!-- PRODUCT LIST SORTING : end -->

										</div>
									</div>
								</div>
								<!-- PRODUCT LIST TOOLS : end -->

								<!-- PRODUCT LIST : begin -->
								<ul class="product-list">
                                    <?php foreach($products as $row) : ?>
									<!-- PRODUCT : begin -->
                                   <li class="product">
										<div class="product-inner">
											<h3 class="product-title"><a href="shop-detail.html"><?php echo $row['name'] ;?></a></h3>
											<p class="product-image"><a href="shop-detail.html"><img src="images/product_01_thumb.jpg" alt="image not availabe"></a></p>
											<div class="product-info">
												<div class="product-price"><?php echo $row['price'] ;?>$</div>
												<a href=<?php echo base_url()?>main/product_detail/<?php echo $row['product_id'] ;?> class="product-btn c-button m-type-2 m-small">Buy</a>
											</div>
										</div>
									</li>
                                    <?php endforeach; ?>
									<!-- PRODUCT : end -->

									
					

								</ul>
								<!-- PRODUCT LIST : end -->

								<!-- PAGINATION : begin -->
								<ul class="c-pagination">
									<li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
									<li><a href="#">1</a></li>
									<li class="m-active"><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
								</ul>
								<!-- PAGINATION : end -->

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
		

		</div>
</body>
