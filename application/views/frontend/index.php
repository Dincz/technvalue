<!-- header start  -->
<?php $this->load->view('layout/header'); ?>
<!-- header end  -->

<h1>Form</h1>
<form id="quoteForm" class="row" method="post" action="<?php echo site_url('mail'); ?>">
			<div class="form-group col-12 col-md-6 col-lg-6">
				<label for="name" class="navyText fw-bold">Name:</label>
				<input type="text" id="name" name="name" value="<?php echo set_value('name'); ?>" class="form-control"
					required>
			</div>
			<div class="form-group col-12 col-md-6 col-lg-6">
				<label for="email" class="navyText fw-bold">Email:</label>
				<input type="email" id="email" name="email" value="<?php echo set_value('email') ?>"
					class="form-control" required>
			</div>
			<div class="form-group col-12 col-md-6 col-lg-6">
				<label for="product" class="navyText fw-bold">Product:</label>
				<select id="product" name="product" class="form-control " required>
					<option value="" disabled selected>Select from below</option>
					<option value="Dust Suppression">Dust Suppression</option>
					<option value="Wastewater Evaporation">Wastewater Evaporation</option>
					<option value="Odour Control System">Odour Control System</option>
					<option value="Road Washing System">Road Washing System</option>
					<option value="Fog Curtains">Fog Curtains</option>
					<option value="Vehicle Mounted">Vehicle Mounted</option>
					<option value="Cooling and Humidification">Cooling and Humidification</option>
					<option value="Slag Management">Slag Management</option>
					<option value="Other">Other</option>
				</select>
			</div>
			<div class="form-group col-12 col-md-6 col-lg-6">
				<label for="phone" class="navyText fw-bold">Phone:</label>
				<input type="tel" id="phone" name="phone" class="form-control" placeholder="+91 9876543210"
					pattern="\d{10}"
					title="Please enter a 10-digit phone number without any spaces or special characters.">
			</div>
			<div class="form-group col-12">
				<label for="comment" class="navyText fw-bold">Comment:</label>
				<textarea id="comment" name="comment" rows="4" class="form-control"></textarea>
			</div>
			<div class="form-group col-12 col-md-6 col-lg-6">
				<label class="navyText fw-bold">Captcha:</label>
				<div class="captcha ">
					<span id="captchaQuestion">Loading...</span>
					<input type="text" id="captcha" name="captcha" class="form-control" required>
				</div>
			</div>
			<div class="form-group col-12 mt-2">
				<button class="btn btn-success w-100" type="submit">Submit</button>
			</div>
		</form>

<!-- header start  -->
<?php $this->load->view('layout/footer'); ?>
<!-- header end  -->