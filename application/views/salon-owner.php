<?php include 'header.php' ?>

  <section id="salon-owner">
    <div class="page-title">
        <h2>Salon Owner?</h2>
    </div>

    <?php 
    if (isset($_GET['status'])) {
             if ($_GET['status'] == 'sent') {
            echo 'Thank you, we will get back to you soon!';
    }
}
    ?>


    <h3>Who we are and what do we do?</h3>
    <ul>
        <li>point one</li>
        <li>point two</li>
        <li>point three</li>
    </ul>

    <h3>What will we do for you?</h3>
    <ul>
        <li>point one</li>
        <li>point two</li>
        <li>point three</li>
    </ul>

    <p class="my-jumbotron">To be a member and enrol your Salon with Staylic.com, fill up this form now and our sales team will contact you very soon! 
    </p>

    <h3>Salon Form</h3>

    <div>
       <form method="post" name="s-owner" id="s-owner" action="salon_owner">
        <div>
            Full Name<br>
            <input type="text" name="name" placeholder="">
        </div>
        <div>
            Salon Name<br>
            <input type="text" name="salon" placeholder="">
        </div>
<div class="checkbox">
        <input type="checkbox" name="branches">
        Does Your Salon have more than one branch?
</div>
<div class="checkbox">
        <input type="checkbox" name="ebooking">
        Does your Salon have Electronic Booking System? 
</div>
<div class="plate-address">
    Blue Plate Address (MyAddress)<br>
    <input type="text" name="area" placeholder="Area Number">
    <input type="text" name="street" placeholder="Street Number">
    <input type="text" name="building" placeholder="Building Number">
</div>
<div>
    Text Address<br>
<input type="text" name="address" placeholder="">
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
    <span class="text-danger">Security Check:  What is 3 + 6 = ?</span><br>
<input type="text" name="check" placeholder="Your Answer">
</div>

        <div class="">
            <button  type="submit" name="submit-salon" class="btn">Submit</button>
        </div>
    </form>
</div> <!-- End Form Section -->


</section>


<?php include 'footer.php' ?>
