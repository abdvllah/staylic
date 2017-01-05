<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');?>
<?php include 'header.php' ?>

<div id="salon">
    <div id="banner" style="background-image: url(<?= base_url('img/slider/slider2.jpg'); ?>);" class="has-background">
        <h2 class="salon-name"><?php echo htmlspecialchars_decode($salon['name']); ?></h2>
        <!-- Display Salon Rating -->
        <?php 
        if($count_reviewrs[0]->count){
            ?> 
            <div class="salon-rating">
                <?php 
$j = (int) $rating[0]->rating; // Get the current rating
for($i=1; $i<=5; $i++) { // for loop to maximum rating 5
if($i <= $j) {  // if counter less or equal rating, display colored image
    ?>
    <span><img src="<?php echo base_url("img/icons/frasha-r.png") ?>" alt=""></span>
    <?php
} 
else {  // display gray image
    ?>
    <span><img src="<?php echo base_url("img/icons/frasha.png") ?>" alt=""></span>
    <?php
}
}
?>

<span class="rate-count">(<?=$count_reviewrs[0]->count?>)</span>
</div>              
<?php } ?>
</div> <!-- End Banner -->

<div id="tabs">
    <a rel="#services" class="active">Services</a>
    <a rel="#reviews">Reviews</a>       
</div> <!-- End Tabs -->

<div class="flex-salon-profile">


        <!-- Start #services -->
        <div id="services" >
            <h3>Services</h3>

            <?php
            if(!empty($salon['categories'])){
                foreach ($salon['categories'] as $value) {
                    ?>
                    <div class="category" id="<?=$value['id']?>">
                        <div class="category_h">
                            <div class="caption">
                                <h3><?=htmlspecialchars_decode($value['name'])?></h3>
                            </div>
                            <img  class="img" src="/StaylicFrontend/img/categories/<?=$value['icon']?>" alt="<?=$value['name']?>">
                        </div>

                        <?php
                        if (!empty($value['sub_categories'])) {
                            foreach ($value['sub_categories'] as $subcat) { ?>
                            <!--  <div class="menu"> -->
                            <div class="category_sub"><h3><?=$subcat['name']?></h3></div>
                            <?php 
                            if (!empty($subcat['services'])) {
                                foreach ($subcat['services'] as $servic)
                                {
                                    $line='';
                                    if($servic->price > 0){
                                        $line.=$servic->price.' QR';
                                    }
                                    if($servic->duration_minutes > 0)   {
                                        if($servic->price > 0){
                                            $line.=' | ';
                                        }
                                        $line.=$servic->duration_minutes.' Mins';
                                    }   

                                    ?>
                                    <div class="menu-item">
                                        <div class="name"><?=htmlspecialchars_decode($servic->name)?></div>
                                        <?php if($line !=''){
                                            echo '<div class="price">'.$line.'</div>';                           
                                        }
                                        if(!empty($servic->description)){
                                            echo '<div class="desc">'.htmlspecialchars_decode($servic->description).'</div>';

                                        }
                                        ?>

                                    </div> <!-- end menu-item -->
                                    <?php                               
                                }
                            }
                        }
                    }
                    if (!empty($value['services'])) {
                        foreach ($value['services'] as $service) { 
                            $line='';
                            if($service->price > 0){
                                $line.=$service->price.' QR';
                            }
                            if($service->duration_minutes > 0)  {
                                if($service->price > 0){
                                    $line.=' | ';
                                }
                                $line.=$service->duration_minutes.' Mins';
                            }       
                            ?>
                            <div class="menu-item">
                                <div class="name"><?=htmlspecialchars_decode($service->name)?></div>
                                <div class="price"><?=$line?></div>
                                <div class="desc"><?=htmlspecialchars_decode($service->description)?></div>
                            </div> <!-- end menu-item -->
                            <?php }
                        } ?>
                    </div> <!-- end Catagory -->
                    <?php }
                } 
                else {  ?>
                <p>This salon has no services because it is not registered yet, <a href="<?= base_url('/salon_owner')?>">register your business now!</a></p>
                <?php }
                ?>

            </div> <!-- End Services -->


    <div id="reviews">
        <h3>Reviews</h3>
        <div class="review">

            <!-- Trigger the modal with a button -->
            <button type="button" class="btn" data-toggle="modal" data-target="#myModal">Add Your Review</button>

            <!-- Modal -->
            <div id="myModal" class="modal fade" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div name="reviewForm" id="reviewForm" class="form" id="reviewForm"> 
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Add Review</h4>
                            </div>
                            <div class="modal-body">
                                <div id="alert-msg"></div>
                                <?php // echo validation_errors(); ?>
                                <input id="salon_id" type="hidden" name="salon_id" value="<?php echo $salon['id']; ?>">
                                <div id="rating" class="rating" name="rating" >
                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Excellent!">5 stars</label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Very Good">4 stars</label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Good">3 stars</label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Moderate">2 stars</label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Kinda Bad">1 star</label>
                                </div>
                                <div><input required id="name" type="text" name="name" placeholder="Your Name (*)" value="<?php echo set_value('name'); ?>" size="20"> </div>
                                <div><input required id="email" type="email" name="email" placeholder="Your Email(*)" value="<?php echo set_value('email'); ?>"></div>

                                <div><textarea id="review_text" name="review_text" cols="50" rows="5" placeholder="Review text(optional)" ></textarea>

    <!--        <textarea id="review_text" type="text" name="review_text" placeholder="Share your experience..." ></textarea>
    -->        </div>
    <div class="g-recaptcha" data-sitekey="6Lebhg8UAAAAAB9vEQ3iA-bj659eTyjCLQQL02oR"></div>
    </div>
    <div class="modal-footer">
        <button name="reviewSubmit" type="submit" class="btn" id="submit">Submit your Review</button>
    </div>
    </div> 

    </div> <!-- end Modal Content -->
    </div> <!-- end Modal Dialog -->
    </div> <!-- end myModal -->

    <div id="thanks" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div> 
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Review Submitted</h4>
                    </div>
                    <div class="modal-body">
                                <p class="my-jumbotron"> Thank you for rating <?php echo htmlspecialchars_decode($salon['name']); ?>.<br>
                            Please note that reviews are monitored by Staylic.</p>
						
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div> 

            </div>
        </div> <!-- end thanks -->

    </div> <!-- end Review -->

    <div class="comments">
        <h3>Reviews</h3>

        <?php
        if(empty($reviews) ){
            echo("<p>This salon has no reviews :( Be the first one to add a Review for this Salon.</p>");

        } else {
            foreach ($reviews as $review) { ?>

            <article>
                <div class="fx-rating">
                    <?php 
    $j = (int) $review->rating; // Get the current rating
    for($i=1; $i<=5; $i++) { // for loop to maximum rating 5
    if($i <= $j) {  // if counter less or equal rating, display colored image
        ?>
        <span><img src="<?php echo base_url("img/icons/frasha-r.png") ?>" alt=""></span>
        <?php
    } 
    else {  // display gray image
        ?>
        <span><img src="<?php echo base_url("img/icons/frasha.png") ?>" alt=""></span>
        <?php
    }
    }
    ?>

    </div>

    <div class="name"><?=$review->name?></div>
    <div class="date">
        <i><?=date('d, M Y [h:i:s A]',strtotime($review->time))?></i>
    </div>
    <div class="comment">
        <p><?=htmlspecialchars_decode($review->review_text) ?></p>
    </div>
    </article>          
    <?php

    }       
    }

    ?>

    </div> <!-- End Comments -->

    </div> <!-- End Reviews Section -->


    <div id="information">

        <?php
        foreach ($salon['address'] as $value) { 
		 if(isset($value->altitude) && isset($value->longtitude) )	{			
			$altitude=$value->altitude;
		$longtitude=$value->longtitude;			
		?>

        <h3 id="distance">
            
        </h3>
        <!--   echo '<h4>'.$value['name'].'</h4>';  -->
        <div id="map"></div>
        <div class="salon-address">
            <div class="sec1"><small>Building</small><br><span class="number"><?=$value->building_number?></span></div>
            <div class="sec1"><small>Area (Zone)</small><br><?=htmlspecialchars_decode($value->name)?><br><?=$value->zone_number?></div>
            <div class="sec4"><small>Street</small><br><?=$value->street_number?></div>
        </div>

        <?php
			 }
		} ?>
        
        <div class="salon-times">
            <h3>Working Times</h3>
            <?php
            $flag = FALSE;
            foreach ($salon['normal_timing'] as $value) {
                $today = date("h:ia");
                $status = '';
                if (date("l") == date("l", strtotime($value->day_name))) {
                    ?>            
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1">Today&nbsp;&nbsp;&nbsp; &nbsp;
                                        <?=date("h:ia", strtotime($value->open_time))?> - <?=date("h:ia", strtotime($value->close_time))?> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                        <?php if($value->close_time_2 != NULL || $value->open_time_2 != NULL){ ?>
                                        <?=date("h:ia", strtotime($value->open_time_2))?> - <?=date("h:ia", strtotime($value->close_time_2))?>
                                        <?php }?>
                                        &nbsp;&nbsp;&nbsp; 
                                    </a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse">
                                <?php foreach ($salon['normal_timing'] as $value2) {?>
                                <div class="panel-body">
                                    <?=$value2->day_name?> &nbsp;&nbsp;&nbsp;  <?=date("h:ia", strtotime($value2->open_time))?>-  <?=date("h:ia", strtotime($value2->close_time))?>&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                    <?php if($value2->close_time_2 != NULL || $value2->open_time_2 != NULL){ ?>
                                    <?=date("h:ia", strtotime($value2->open_time_2))?> - <?=date("h:ia", strtotime($value2->close_time_2))?>
                                    <?php }?>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>  <!-- End panel group -->                  
                    <?php
                    break;
                }
            } ?>
        </div> <!-- End Salon times -->

        <div class="salon-amenities">
            <h3>Amenities</h3>
            <?php
            echo '<div class="amen">';
            if ($salon['has_parking'] == '1') {
            echo '<img data-toggle="tooltip" data-placement="top" title="Car parking available" src=' . base_url("img/amen/car.png") . ' alt="">&nbsp;&nbsp;';
            }
            if ($salon['kids_friendly'] == '1') {

            echo '<img data-toggle="tooltip" data-placement="top" title="Kids friendly" src=' . base_url("img/amen/kids.png") . ' alt="">&nbsp;&nbsp;';
            }
            if ($salon['by_appointment'] == '1') {
            echo '<img data-toggle="tooltip" data-placement="top" title="Appointment by call" src=' . base_url("img/amen/bycall.png") . ' alt="">&nbsp;&nbsp;';
            }
            if ($salon['refreshments_avilable'] == '1') {
            echo '<img data-toggle="tooltip" data-placement="top" title="Refreshment Available" src=' . base_url("img/amen/drinks.png") . ' alt="">&nbsp;&nbsp;';
            }
            if ($salon['wifi_avilable'] == '1') {
            echo '<img data-toggle="tooltip" data-placement="top" title="Wifi Available" src=' . base_url("img/amen/wifi.png") . ' alt="">&nbsp;&nbsp;';
            }
            if ($salon['home_service'] == '1') {
            echo '<img data-toggle="tooltip" data-placement="top" title="Home Service" src=' . base_url("img/amen/home.png") . ' alt="">&nbsp;&nbsp;';
            }
            if ($salon['payment_method'] == '0') {

            echo '<img data-toggle="tooltip" data-placement="top" title="Only cash payment" src=' . base_url("img/amen/cash.png") . ' alt="">&nbsp;&nbsp;';
            }
            if ($salon['payment_method'] == '1') {
            echo '<img data-toggle="tooltip" data-placement="top" title="Only card payment" src=' . base_url("img/amen/card.png") . ' alt="">&nbsp;&nbsp;';
            }
            if ($salon['payment_method'] == '2') {

            echo '<img data-toggle="tooltip" data-placement="top" title="Cash payment"   src=' . base_url("img/amen/cash.png") . ' alt="">&nbsp;&nbsp;';
            echo '<img data-toggle="tooltip" data-placement="top" title="Card payment" src=' . base_url("img/amen/card.png") . ' alt="">&nbsp;&nbsp;';
            }
            echo '</div>'; ?>

        </div> <!-- End salon amenities -->

        <?php if (!empty($salon['social_media_account'])) {?>
        <div class="salon-social">
            <h3>Social Media</h3>
            <div class="social">
                <?php foreach ($salon['social_media_account'] as $value) {
                    $img = base_url("img/social/" . $value->social_media_name . '.png');
                    $link = $value->link . $value->account_name;
                    echo '<a target=_blank href=' . $link . '><img src="' . $img . '"></a>';
                } ?>
            </div>
        </div>
        <?php } ?>


        <div class="salon-about">
            <h3>About</h3>
            <p> <?php echo htmlspecialchars_decode($salon['about']); ?></p>
        </div>

    </div>  <!-- End #inforamtion -->



</div>  <!-- End Flex Container -->


</div> <!-- End Salon Div -->

<!-- Google Map -->
<script>
function initMap() {
    directionsDisplay = new google.maps.DirectionsRenderer();

    var mapDiv = document.getElementById('map');
    var myCenter = new google.maps.LatLng(<?php echo $altitude; ?>, <?php echo $longtitude; ?>);
    var mapProp = {
        scrollwheel: false,
        center: myCenter,
        zoom: 17,
        backgroundColor: '#BA3D51',
        mapTypeControl: false,
        noClear: true,
        mapTypeId: google.maps.MapTypeId.ROADMAP
    };

    var map = new google.maps.Map(mapDiv, mapProp);

    var marker = new google.maps.Marker({
        position: myCenter,
    });

    marker.setMap(map);

    var infowindow = new google.maps.InfoWindow({
        content: "<b><?php echo $salon['name'];?></b><br><a href='http://maps.google.com/?q=<?php echo $altitude;?>,<?php  echo $longtitude;?>
'>View on google maps</a> "
    });
    infowindow.open(map, marker);
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf31ppfqiHYYrbwg7NZ_JW1dEAFaVWpf8&callback=initMap" type="text/javascript"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>-->
<!-- jQuery -->
<script src="<?= base_url('js/jquery.js'); ?> "></script>
<!--js-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>


<script>
        function getDistanceFromLatLonInKm(lat1,lon1,lat2,lon2) {
          var R = 6371; // Radius of the earth in km
          var dLat = deg2rad(lat2-lat1);  // deg2rad below
          var dLon = deg2rad(lon2-lon1); 
          var a = 
            Math.sin(dLat/2) * Math.sin(dLat/2) +
            Math.cos(deg2rad(lat1)) * Math.cos(deg2rad(lat2)) * 
            Math.sin(dLon/2) * Math.sin(dLon/2)
            ; 
          var c = 2 * Math.atan2(Math.sqrt(a), Math.sqrt(1-a)); 
          var d = R * c; // Distance in km
          return d.toFixed(2) + " KM";
        }

        function deg2rad(deg) {
          return deg * (Math.PI/180)
        }


        function getLocation() {
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(showPosition, showError);
            } else {
                x.innerHTML = "Geolocation is not supported by this browser.";
            }
        }

        function showPosition(position) {
            var latlon = position.coords.latitude + "," + position.coords.longitude;
            var mydiv = document.getElementById("distance");

            mydiv.innerHTML = getDistanceFromLatLonInKm(<?php echo $altitude ?> , <?php echo $longtitude; ?>, position.coords.latitude, position.coords.longitude);

            // var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="
            // +latlon+"&zoom=14&size=400x300&sensor=false";
            // document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
        }

        function showError(error) {
            switch(error.code) {
                case error.PERMISSION_DENIED:
                    x.innerHTML = "User denied the request for Geolocation."
                    break;
                case error.POSITION_UNAVAILABLE:
                    x.innerHTML = "Location information is unavailable."
                    break;
                case error.TIMEOUT:
                    x.innerHTML = "The request to get user location timed out."
                    break;
                case error.UNKNOWN_ERROR:
                    x.innerHTML = "An unknown error occurred."
                    break;
            }
        }

</script>

<script type="text/javascript">
$(document).ready(function () {
    getLocation();

// Initiate tooltip
$('[data-toggle="tooltip"]').tooltip();


// Salon Tabs functions
$("#tabs > a").click(function () {
    if (!$(this).hasClass("active")) {
        $("#tabs > a").removeClass("active");
        $(this).addClass("active");
        $("#services, #gallery, #reviews, #info").css("display", "none");
        $($(this).attr("rel")).fadeIn(2000);
    }
}); // End Salon Tabs Functions


$('*').on("touchstart", function (e) {
"use strict"; //satisfy the code inspectors
var link = $(this); //preselect the link
if (link.hasClass('hover')) {
    return true;
} else {
    link.addClass("hover");
    $('*').not(this).removeClass("hover");
// e.preventDefault();
// return false; //extra, and to make sure the function has consistent return points
}
});


$('#submit').click(function() {
    var form_data = {
        name: $('#name').val(),
        salon_id: $('#salon_id').val(),
        email: $('#email').val(),
        review_text: $('#review_text').val(),
        'g-recaptcha-response': $('#g-recaptcha-response').val(),
        rating: $('input[name=rating]:checked').val()
    };
// alert(form_data['name'] + form_data['email']) + form_data['subject']) + form_data['message']));
$.post("<?=base_url('Salon/review'); ?>", form_data,
    function(msg) {
        if(msg == "TRUE")
        {
            $("#myModal").modal('hide')
            $("#thanks").modal('show');
        }else {
            $('#alert-msg').html('<div class="warning"><p>' + msg + '</p></div>');
        }


    });
});
});
</script>
<?php include 'footer.php' ?>