
	
	<body class="m-has-style-switcher">

		
		<!-- WRAPPER : begin -->
		<div id="wrapper">

			<!-- CORE : begin -->
			<div id="core">

				<!-- PAGE HEADER : begin -->
				<div id="page-header">
					<div class="container">
						<h1>Cart Detail</h1>
						<ul class="breadcrumbs">
							<li><a href="index.php">Home</a></li>
							<li><a href=<?php echo base_url()?>/main/pages/shop-cart>Shop</a></li>
							<li>Cart Detail</li>
						</ul>
					</div>
				</div>
				<!-- PAGE HEADER : begin -->

				<div class="container">

					<!-- PAGE CONTENT : begin -->
					<div id="page-content">

						<!-- SHOP CART : begin -->
						<div class="shop-cart">

							<form class="default-form" action="shop-checkout.html">

								<!-- CART TABLE : begin -->
								<table class="cart-table">
									<thead>
										<tr>
											<th class="image-col"></th>
											<th class="title-col">Product</th>
											<th class="price-col">Price</th>
											<th class="quantity-col">Quantity</th>
											<th class="total-col">Total</th>
											<th class="remove-col"></th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td class="product-image"><a href="shop-detail.html"><img src="images/product_01_mini.jpg" alt=""></a></td>
											<td><a href="shop-detail.html">Almond Supple Skin Oil</a></td>
											<td>$35.50</td>
											<td>
												<div class="quantity-input">
													<input type="number" class="m-type-2" value="1" min="1" max="100" step="1">
												</div>
											</td>
											<td>$35.50</td>
											<td class="textalign-right"><a href="#" class="remove-item"><i class="fa fa-trash-o"></i></a></td>
										</tr>
										<tr>
											<td class="product-image"><a href="shop-detail.html"><img src="images/product_02_mini.jpg" alt=""></a></td>
											<td><a href="shop-detail.html">Almond Tonic Body Oil</a></td>
											<td>$36.50</td>
											<td>
												<div class="quantity-input">
													<input type="number" class="m-type-2" value="1" min="1" max="100" step="1">
												</div>
											</td>
											<td>$36.50</td>
											<td class="textalign-right"><a href="#" class="remove-item"><i class="fa fa-trash-o"></i></a></td>
										</tr>
										<tr>
											<td class="product-image"><a href="shop-detail.html"><img src="images/product_03_mini.jpg" alt=""></a></td>
											<td><a href="shop-detail.html">Aroma Volumizing Mask</a></td>
											<td>$27.20</td>
											<td>
												<div class="quantity-input">
													<input type="number" class="m-type-2" value="1" min="1" max="100" step="1">
												</div>
											</td>
											<td>$27.20</td>
											<td class="textalign-right"><a href="#" class="remove-item"><i class="fa fa-trash-o"></i></a></td>
										</tr>
									</tbody>
								</table>
								<!-- CART TABLE : end -->

								<!-- CART TOOLS : begin -->
								<div class="cart-tools">

									<!-- CART COUPON : begin -->
									<div class="cart-coupon">
										<input type="text" class="m-type-2">
										<button class="c-button m-type-2" type="submit">Apply Coupon</button>
									</div>
									<!-- CART COUPON : end -->

									<!-- CART BUTTONS : begin -->
									<div class="cart-buttons">
										<button class="c-button m-type-2" type="submit">Update Cart</button>
										<button class="c-button" type="submit">Checkout</button>
									</div>
									<!-- CART BUTTONS : end -->

								</div>
								<!-- CART TOOLS : end -->

							</form>

							<!-- CART FOOTER : begin -->
							<div class="cart-footer">

								<!-- CART SHIPPING : begin -->
								<div class="cart-shipping">
									<form class="default-form" action="shop-cart.html">

										<h2 class="heading-2 m-small">Cart Shipping</h2>
										<div class="form-field">
											<select class="selectbox-input">
												<option>Select Country...</option>
												<option value="country1">Country 1</option>
												<option value="country2">Country 2</option>
												<option value="country3">Country 3</option>
												<option value="country4">Country 4</option>
												<option value="country5">Country 5</option>
												<option value="country6">Country 6</option>
												<option value="country7">Country 7</option>
												<option value="country8">Country 8</option>
											</select>
										</div>
										<button class="c-button m-type-2" type="submit">Update Totals</button>

									</form>
								</div>
								<!-- CART SHIPPING : end -->

								<!-- CART TOTALS : begin -->
								<div class="cart-totals">

									<h2 class="heading-2 m-small">Cart Totals</h2>
									<dl>
										<dt>Cart Subtotal</dt>
										<dd>$30.24</dd>
										<dt>Shipping</dt>
										<dd>$1.99</dd>
										<dt>Total</dt>
										<dd><strong>$32.99</strong></dd>
									</dl>

								</div>
								<!-- CART TOTALS : end -->

							</div>
							<!-- CART FOOTER : end -->

						</div>
						<!-- SHOP CART : end -->

					</div>
					<!-- PAGE CONTENT : end -->

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


		</div>
		<!-- WRAPPER : end -->


	</body>
