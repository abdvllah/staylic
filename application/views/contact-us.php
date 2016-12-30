<?php include 'header.php' ?>

<!-- Contact Section -->
<section id="contact">
    <div class="page-title">
        <h2>Contact Us</h2>
    </div>


    <?php 
    if (isset($_GET['status'])) {
       if ($_GET['status'] == 'sent') {
        echo 'Thank you, we will get back to you soon!';
    }
}
?>

<p>We will be happy to hear from you, kindly fill below fileds!</p>

<div>
<form method="post" name="s-owner" id="s-owner" action="salon_owner">
    <div>
        Full Name<br>
        <input type="text" name="name" placeholder="">
    </div>

    <div>
        Contact Number (Tel/Mob)<br>
        <input type="text" name="number" placeholder="">
    </div>

    <div>
        Email Address<br>
        <input type="email" name="email" placeholder="">
    </div>

    <div>
        Message<br>
        <textarea name="message"></textarea>
    </div>

    <div class="">
        <button  type="submit" name="submit-salon" class="btn">Submit</button>
    </div>
</form>
</div> <!-- End Form Section -->


       <!--  <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. 
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Name</label>
                            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>Message</label>
                            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-lg">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> -->



    </section>

    <?php include 'footer.php' ?>