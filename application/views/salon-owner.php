<?php include 'header.php' ?>

<section id="salon-owner">
	<div class="page-title">
		<h2>Salon Owner?</h2>
	</div>
	<div class="my-jumbotron">
		<p>To be a Staylic member, Please fill the form below and Staylic Team will contact you very soon!
		</p>
		<h3>Join Staylic</h3>
		<?php 
    if (isset($_GET['status'])) {
             if ($_GET['status'] == 'sent') {
            echo '<div class="success">Thank you, we will get back to you soon!</div>';
    }
}else{
		if(!empty(validation_errors())){
			//echo form_error('name', '<div class="warning">', '</div><br>');
			//echo form_error('email', '<div class="warning">', '</div>');
//echo form_error('email', '<div class="warning">', '</div>');
			echo validation_errors('<div class="warning"><p>', '</p></div>');

		}
	}
    ?>
			<form method="post" name="s-owner" id="s-owner" action="salon_owner">
				<div>
					Contact person Name*<br>
					<input type="text" name="name" placeholder="" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>">
				</div>
				<div>
					Email Address*<br>
					<input type="email" name="email" placeholder="Enter a valid email address" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>">
				</div>
				<div>
					Salon Name*<br>
					<input type="text" name="salon" placeholder="" value="<?php echo isset($_POST['salon']) ? $_POST['salon'] : '' ?>">
				</div>
				<div>
					Salon Location*<br>
					<input type="text" name="address" placeholder="" value="<?php echo isset($_POST['address']) ? $_POST['address'] : '' ?>">
				</div>
				<div>
					Phone Number* <br>
					<input type="text" name="number" placeholder="" value="<?php echo isset($_POST['number']) ? $_POST['number'] : '' ?>">
				</div>
				<div>
					Comments (Max:200 Characters)<br>
					<textarea name="message" cols="50" rows="4" size="200">
						<?php echo isset($_POST['message']) ? $_POST['message'] : '' ?>
					</textarea>
				</div>
				<div class="g-recaptcha" data-sitekey="6Lebhg8UAAAAAB9vEQ3iA-bj659eTyjCLQQL02oR"></div>
		<br>
		<div class="">
			<button type="submit" name="submit-salon" class="btn">Submit</button>
		</div>
		</form>
	</div>
	<!-- End Form Section -->

</section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php include 'footer.php' ?>