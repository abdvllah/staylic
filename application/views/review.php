
   <div id="reviews">
        <h3>Reviews</h3>
        <div class="review">
            <h3>Add Your Review</h3>
            <?php 
if (isset($_POST["reviewSubmit"])) {
    $captcha = "";
    echo '<h2>' . $_POST["name"] . '</h2>';
    if(isset($_POST["g-recaptcha-response"])) {
        $captcha = $_POST["g-recaptcha-response"];
        $secretKey = "6LeF2ikTAAAAADs-KS1-TUjO-yrVvx2myDFK_qer";
        $response=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secretKey."&response=".$captcha);
                $responseKeys = json_decode($response,true);
                if(intval($responseKeys["success"]) !== 1) {
                  echo '<h2>You are spammer ! Get the @$%K out</h2>';
                } else {
                  echo '<h2>Thanks for posting comment.</h2>';
                }
    }

}
?>
            <form method="post" name="reviewForm" id="reviewForm" class="form" id="reviewForm" action="" >
                <div><input type="text" name="name" placeholder="Your Name" size="50"> </div>
                <div><input type="email" name="email" placeholder="Your Email"></div>
                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                    <input checked type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                </div>
                <div class="">
                    <textarea name="review_text" placeholder="Share your experience..."></textarea>
                </div>
                <?php
					  require_once('libraries/recaptchalib.php');
					  $publickey = "6LeF2ikTAAAAABG9qfhl9KIDGPjcqxOH09CwPJ_2"; // you got this from the signup page
					  echo recaptcha_get_html($publickey);
                 ?>
<!--
                <div class="g-recaptcha" data-sitekey="6LeF2ikTAAAAABG9qfhl9KIDGPjcqxOH09CwPJ_2"></div>
-->
                <div class="">
                    <button type="submit" name="reviewSubmit" class="btn">Submit</button>
                </div>
            </form>
        </div> <!-- End Form Section -->
        
        <script src='https://www.google.com/recaptcha/api.js'></script>
