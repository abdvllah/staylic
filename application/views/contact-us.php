<?php include 'header.php' ?>

<!-- Contact Section -->
<section id="contact">
    <div class="page-title">
        <h2>Contact Us</h2>
    </div>
    <div class="my-jumbotron">
<p>We will be happy to hear from you, kindly fill below fileds!</p> 
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
<form method="post" name="contact-us" id="contact-us" action="">
    <div>
        Full Name*<br>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>" >
    </div>

    <div>
        Phone Number*<br>
        <input type="text" name="number" value="<?php echo isset($_POST['number']) ? $_POST['number'] : '' ?>"  placeholder="" />
    </div>

    <div>
        Email Address*<br>
        <input type="email" name="email" placeholder="" value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"  />
    </div>

    <div>
        Message*<br>
        <textarea name="message" cols="50" rows="5"><?php echo isset($_POST['message']) ? $_POST['message'] : '' ?></textarea>
    </div>
    <div class="g-recaptcha" data-sitekey="6Lebhg8UAAAAAB9vEQ3iA-bj659eTyjCLQQL02oR"></div>
    <div class="">
        <button  type="submit" name="submit-salon" class="btn">Submit</button>
    </div>
</form>
</div> <!-- End Form Section -->      
    </section>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <?php include 'footer.php' ?>