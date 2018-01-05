<!--
Following HTML code is used to display Reservation form after clicking on the "Make a Reservation" button in the left sidebar.
This form requires "reservation-form.php" file to work.
-->
<div class="various-content" id="modal">

	<h2>Make a Reservation</h2>

	<!-- RESERVATION FORM : begin -->
	<form id="modal-reservation-form" class="default-form m-ajax-form" action="<?=base_url()?>main/submit" method="post">
		<input type="hidden" name="reservation-form">

		<!-- FORM VALIDATION ERROR MESSAGE : begin -->
		<p class="c-alert-message m-warning m-validation-error" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>Please fill in all required (*) fields.</p>
		<!-- FORM VALIDATION ERROR MESSAGE : end -->

		<!-- SENDING REQUEST ERROR MESSAGE : begin -->
		<p class="c-alert-message m-success" style="display: none;"><i class="ico fa fa-exclamation-circle"></i>success!.</p>
		<!-- SENDING REQUEST ERROR MESSAGE : end -->

		<!-- SERVICE LIST : begin -->
		<div class="form-field">
			<h5 class="form-field-title">Cosmetics</h5>
			<ul class="checkbox-list">
				<li>

					<!-- SERVICE CHECKBOX : begin -->
					<input type="checkbox" class="checkbox-input" id="reservation-service-1-1" name="facial" value="1">
					<label for="reservation-service-1-1">Facials</label>
					<!-- SERVICE CHECKBOX : end -->

				</li>
				<li>

					<!-- SERVICE CHECKBOX : begin -->
					<input type="checkbox" class="checkbox-input" id="reservation-service-1-2" name="eyebrow" value="1">
					<label for="reservation-service-1-2">Eyebrow & Eyelashes</label>
					<!-- SERVICE CHECKBOX : end -->

				</li>

				<li>

					<!-- SERVICE CHECKBOX : begin -->
					<input type="checkbox" class="checkbox-input" id="reservation-service-1-3" name="microdermabrasion" value="1">
					<label for="reservation-service-1-3">Microdermabrasion</label>
					<!-- SERVICE CHECKBOX : end -->

				</li>
				<li>

					<!-- SERVICE CHECKBOX : begin -->
					<input type="checkbox" class="checkbox-input" id="reservation-service-1-4" name="acne_treatment" value="1">
					<label for="reservation-service-1-4">Acne Treatments</label>
					<!-- SERVICE CHECKBOX : end -->

				</li>
			</ul>
		</div>
		<!-- SERVICE LIST : end -->

		<!-- SERVICE LIST : begin -->
		<div class="form-field">
			<h5 class="form-field-title">Hairdressing</h5>
			<ul class="checkbox-list">
				<li>

					<!-- SERVICE CHECKBOX : begin -->
					<input type="checkbox" class="checkbox-input" id="reservation-service-2-1" name="wash" value="1">
					<label for="reservation-service-2-1">Wash</label>
					<!-- SERVICE CHECKBOX : end -->

				</li>
				<li>

					<!-- SERVICE CHECKBOX : begin -->
					<input type="checkbox" class="checkbox-input" id="reservation-service-2-2" name="cut_finish" value="1">
					<label for="reservation-service-2-2">Cut & Finish</label>
					<!-- SERVICE CHECKBOX : end -->

				</li>

				<li>

					<!-- SERVICE CHECKBOX : begin -->
					<input type="checkbox" class="checkbox-input" id="reservation-service-2-3" name="blow_dries" value="1">
					<label for="reservation-service-2-3">Blow Dries</label>
					<!-- SERVICE CHECKBOX : end -->

				</li>
				<li>

					<!-- SERVICE CHECKBOX : begin -->
					<input type="checkbox" class="checkbox-input" id="reservation-service-2-4" name="hair_colouring" value="1">
					<label for="reservation-service-2-4">Hair Colouring & Highlights</label>
					<!-- SERVICE CHECKBOX : end -->

				</li>
			</ul>
		</div>
		<!-- SERVICE LIST : end -->

		<hr class="c-divider">

		<div class="row">
			<div class="col-sm-6">

				<!-- NAME FIELD : begin -->
				<div class="form-field">
					<label for="reservation-name">Your Name <span>*</span></label>
					<input id="reservation-name" name="reservation-name" class="m-required">
				</div>
				<!-- NAME FIELD : end -->

				<!-- EMAIL FIELD : begin -->
				<div class="form-field">
					<label for="reservation-email">Your Email Address <span>**</span></label>
					<input id="reservation-email" name="reservation-email" class="m-required-one m-email">
				</div>
				<p style="display: none;">
					<label for="reservation-email-hp">Re Email Address</label>
					<input id="reservation-email-hp" name="reservation-email-hp">
				</p>
				<!-- EMAIL FIELD : end -->

				<!-- PHONE FIELD : begin -->
				<div class="form-field">
					<label for="reservation-phone">Your Phone Number <span>**</span></label>
					<input id="reservation-phone" name="reservation-phone" class="m-required-one">
				</div>
				<!-- PHONE FIELD : end -->

			</div>
			<div class="col-sm-6">

				<!-- DATEPICKER FIELD : begin -->
				<div class="form-field">
					<label for="reservation-date">Preferred Date & Time</label>
					<div class="row">
						<div class="col-sm-6">
							<div class="datepicker-input" data-date-format="mm/dd/yy" data-first-day="0">
								<input type="datetime" id="reservation-date" name="reservation-date">
								<i class="fa fa-calendar"></i>
							</div>
						</div>
						<div class="col-sm-6">
							<select class="selectbox-input" id="reservation-time" name="reservation-time">
								<option value="9:00">9:00</option>
								<option value="9:30">9:30</option>
								<option value="10:00">10:00</option>
								<option value="10:30">10:30</option>
								<option value="11:00">11:00</option>
								<option value="11:30">11:30</option>
								<option value="12:00">12:00</option>
								<option value="12:30">12:30</option>
								<option value="13:00">13:00</option>
								<option value="13:30">13:30</option>
								<option value="14:00">14:00</option>
								<option value="14:30">14:30</option>
								<option value="15:00">15:00</option>
								<option value="15:30">15:30</option>
							</select>
						</div>
					</div>
				</div>
				<!-- DATEPICKER FIELD : end -->

				<!-- NOTE FIELD : begin -->
				<div class="form-field">
					<label for="reservation-note">Note</label>
					<textarea id="reservation-note" name="reservation-note"></textarea>
				</div>
				<!-- NOTE FIELD : end -->

				<!-- SUBMIT BUTTON : begin -->
				<div class="form-field">
					<input type="hidden" value="reservation" name="submit_type"/>
					<button class="submit-btn c-button" type="submit" data-label="Send Message" data-loading-label="Sending...">Send Message</button>
				</div>
				<!-- SUBMIT BUTTON : end -->

			</div>
		</div>

		<!-- FORM NOTE : begin -->
		<div class="form-note">
			<p><span>*</span> required field</p>
			<p><span>**</span> fill at least one of those please</p>
		</div>
		<!-- FORM NOTE : end -->

	</form>
	<!-- RESERVATION FORM : end -->

</div>
<script>
    
$( "#modal-reservation-form" ).submit(function( event ) {
 // alert( "Handler for .submit() called." );
     //event.preventDefault();
     $('#modal').modal().hide();
});
   
</script>