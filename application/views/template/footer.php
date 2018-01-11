
			<!-- FOOTER : begin -->
			<footer id="footer">
				<div class="container">

					<!-- FOOTER TWITTER : begin -->
					<!--<div class="footer-twitter m-paginated" data-id="LSVRthemes" data-limit="3" data-interval="12000">
						<div class="footer-twitter-inner">
							<i class="ico fa fa-twitter"></i>
							<h4 class="twitter-title"><a href="https://twitter.com/LSVRthemes">@LSVRthemes</a></h4>
							<div class="twitter-feed">
								<span class="c-loading-anim"><span></span></span>
							</div>
						</div>-->
					</div>
					<!-- FOOTER TWITTER : end -->

					<!-- FOOTER BOTTOM : begin -->
					<div class="footer-bottom">
						<div class="row">
							<div class="col-md-6 col-md-push-6">

								<!-- FOOTER MENU : begin -->
								<nav class="footer-menu">
									<!--<ul>
										<li><a href="index.php">Home</a></li>
										<li><a href="services.php">Services</a></li>
										<li><a href="documentation.html">Documentation</a></li>
									</ul> -->
								</nav>
								<!-- FOOTER MENU : end -->

							</div>
							<div class="col-md-6 col-md-pull-6">

								<!-- FOOTER TEXT : begin -->
							<!-- 	<div class="footer-text">
									<p>POWERED BY <code class="label">semicolons</code></p>
								</div> -->
								<!-- FOOTER TEXT : end -->

							</div>
						</div>
					</div>
					<!-- FOOTER BOTTOM : end -->

				</div>
			</footer>
			<!-- FOOTER : end -->

		<!-- </div> -->

		<!-- WRAPPER : end -->

		<!-- SCRIPTS : begin -->
		<script src="<?=base_url()?>assets/library/js/jquery-1.9.1.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/library/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/library/js/jquery.ba-outside-events.min.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/library/js/owl.carousel.min.js" type="text/javascript"></script><!-- Carousel -->
		<script src="<?=base_url()?>assets/library/js/jquery.magnific-popup.min.js" type="text/javascript"></script>
		<!-- bootstrap time picker -->
		<script src="<?=base_url()?>assets/library/js/library.js" type="text/javascript"></script>
		<script src="<?=base_url()?>assets/library/js/scripts.js" type="text/javascript"></script>
<!--         <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.min.js"></script>
 -->        <script src="<?=base_url()?>dist/sweetalert.min.js"></script> 

<script type="text/javascript">

var submitted = <?= (isset($submitted)) ? json_encode($submitted) : "null";?>;
   if(submitted)
   	swal("Success",submitted, "success");

var pathname = window.location.pathname;
	$('li.nav-btn > span > a[href="http://localhost'+pathname+'"]').parent().parent().addClass('m-active');

</script>
</html>