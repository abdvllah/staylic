<?php include 'header.php' ?>

<style>
.gm-style .gm-style-iw {
text-align: center;
}

</style>
<div id="salon">
    <div id="banner" style="background-image: url('img/slider/img3.jpg');" class="has-background" class="col-xs-12">
        <div class="caption">
            <!--       <div class="img"></div>
            -->      <div id="desc">
                <h3><?php echo $salon['name']; ?></h3>
                <?php
                if (!empty($salon['social_media_account'])) {
                    echo '<div class="social">';
                    foreach ($salon['social_media_account'] as $value) {
                        $img = "img/social/" . $value['social_media_name'] . '.png';
                        $link = $value['link'] . $value['account_name'];
                        echo '<a target=_blank data-toggle="tooltip" title="' . $value['social_media_name'] . '" href=' . $link . '><img src=' . $img . ' alt=""></a>';
                    }
                    echo '</div>';
                }
                if (!empty($salon['address'])) {
                    foreach ($salon['address'] as $value) {
                        echo '<span class="location"><img src="img/icons/location.png" alt="">' . $value['name'] . '</span>';
                    }
                }
                ?>
            </div>

            <?php
            echo '<div class="amen">';
            if ($salon['has_parking'] == '1') {
                echo '<img data-toggle="tooltip" title="Has Car Parking" src="img/amen/car.png" alt="">&nbsp;&nbsp;';
            }
            if ($salon['kids_friendly'] == '1') {
                echo '<img data-toggle="tooltip" title="Kids Friendly" src="img/amen/kids.png" alt="">&nbsp;&nbsp;';
            }
            if ($salon['by_appointment'] == '1') {
                echo '<img data-toggle="tooltip" title="Book By Appointment" src="img/amen/bycall.png" alt="">&nbsp;&nbsp;';
            }
            if ($salon['payment_method'] == '0') {
                echo '<img data-toggle="tooltip" title="Pay By Cash" src="img/amen/cash.png" alt="">&nbsp;&nbsp;';
            }
            if ($salon['payment_method'] == '1') {
                echo '<img data-toggle="tooltip" title="Pay By Card" src="img/amen/card.png" alt="">&nbsp;&nbsp;';
            }
            if ($salon['payment_method'] == '2') {
                echo '<img data-toggle="tooltip" title="Pay By Cash" src="img/amen/cash.png" alt="">&nbsp;&nbsp;';
                echo '<img data-toggle="tooltip" title="Pay By Card" src="img/amen/card.png" alt="">&nbsp;&nbsp;';
            }
            echo '</div>';
            ?>

            <!--            <div class="fx-rating">
                            <span>♥</span>
                            <span>♥</span>
                            <span>♥</span>
                            <span class="current">♥</span>
                            <span>♥</span>
                        </div>-->
        </div> <!-- End Caption -->
    </div> <!-- End Banner -->

    <div id="tabs">
        <a rel="#services" class="active">Services</a>
        <a rel="#info">info</a>
        <!--           <a class=" col-xs-12" rel="#beauty-professions">Beauty Professions</a>
        -->   
        <a rel="#gallery">Gallery</a>       
        <a rel="#reviews">Reviews</a>       
    </div> <!-- End Tabs -->

    <div id="services">
        <h3>Services</h3>
        <div class="cat-nav">
            <?php 
                        foreach ($salon['categories'] as $value) {
                            echo '<a style="background-image: url(img/icons/hair.png);" href=#'.$value['name'].'>'.$value['name'].'</a>';
                        }
            ?>
<!--            <a style="background-image: url('img/icons/hair.png');" href="#Hair">Hair</a>
            <a style="background-image: url('img/icons/hairwash.png');" href="#Nail">Body</a>
            <a style="background-image: url('img/icons/eyes.png');" href="#Nail">Eyes </a>
            <a style="background-image: url('img/icons/facial.png');" href="#Nail">Facial</a>-->
        </div>
        <?php 
                       
        foreach ($salon['categories'] as $value) {
            echo '<div class="catagory" id="'.$value['name'].'">';
            echo '<div style="background-image: url(img/beauty/1.jpg);" class="catagory-head has-background">';
            echo '<h3 class="catagory-icon">'.$value['name'].'</h3>';  
            echo '<img src="img/icons/hair.png" alt="" title="nail polish">';
            echo '</div>';
            if(isset($value['sub_categories'])){
            foreach ($value['sub_categories'] as $subcat) {
                echo '<div class="menu">';
                echo '<h3>'.$subcat['name'].'</h3>';
                foreach ($subcat['services'] as $servic) {
                    echo '<div class="menu-item">';
                    echo '<div class="name">'.$servic['name'].'</div>';
                    echo '<div class="desc">'.$servic['description'].'</div>';
                    echo '<div class="price">'. $servic['price'].' QR | '.$servic['duration_minutes'].'Mins</div>';
                    echo '</div>';
                }
                echo '</div>';
                
            }}
            if(isset($value['services'])){
            foreach ($value['services'] as $service) {
                    echo '<div class="menu-item">';
                    echo '<div class="name">'.$service['name'].'</div>';
                    echo '<div class="desc">'.$service['description'].'</div>';
                    echo '<div class="price">'. $service['price'].' QR | '.$service['duration_minutes'].'Mins</div>';
                    echo '</div>';
            }
            
            }
            echo '</div>';
        }
            ?>
        
<!--        <div class="catagory" id="Hair">
            <div style="background-image: url('img/beauty/1.jpg');" class="catagory-head has-background">
                <h3 class="catagory-icon">Hair</h3>
                <img src="img/icons/hair.png" alt="nail polish" title="nail polish">
            </div>

            <div class="menu">
                <h3>Hair Color</h3>

                <div class="menu-item">
                    <div class="name">Salon Haircuts</div>
                    <div class="desc">Create the ultimate hairstyle to suit your hair type and lifestyle, every time.</div>
                    <div class="price">300 QR | 2-3 Hrs</div>
                </div>

                <div class="menu-item">
                    <div class="name">Qatari Haircuts</div>
                    <div class="desc">Create the ultimate hairstyle to suit your hair type and lifestyle, every time.</div>
                    <div class="price">230 QR | 1-2 Hrs</div>
                </div>

            </div>

            <div class="menu">
                <h3>Hair Style</h3>

                <div class="menu-item">
                    <div class="name">Salon Styles</div>
                    <div class="desc">Create the ultimate hairstyle to suit your hair type and lifestyle, every time.</div>
                    <div class="price">300 QR | 2-3 Hrs</div>
                </div>


            </div>
        </div>-->

<!--        <div class="catagory" id="Nail">
            <div style="background-image: url('img/beauty/2.jpg');" class="catagory-head has-background">
                <h3 class="catagory-icon">Nail</h3>
                <img src="img/icons/nail.png" alt="nail polish" title="nail polish">
            </div>


            <div class="menu">
                <h3>Hair Color</h3>

                <div class="menu-item">
                    <div class="name">Salon Haircuts</div>
                    <div class="desc">Create the ultimate hairstyle to suit your hair type and lifestyle, every time.</div>
                    <div class="price">300 QR | 2-3 Hrs</div>
                </div>

                <div class="menu-item">
                    <div class="name">Qatari Haircuts</div>
                    <div class="desc">Create the ultimate hairstyle to suit your hair type and lifestyle, every time.</div>
                    <div class="price">230 QR | 1-2 Hrs</div>
                </div>

            </div>

            <div class="menu">
                <h3>Hair Style</h3>

                <div class="menu-item">
                    <div class="name">Salon Styles</div>
                    <div class="desc">Create the ultimate hairstyle to suit your hair type and lifestyle, every time.</div>
                    <div class="price">300 QR | 2-3 Hrs</div>
                </div>
            </div>
        </div>-->

    </div> <!-- End Services -->

    <div id="gallery">
        <h3>Gallery</h3>
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <div class="myslider-img" style="background-image: url('img/beauty/1.jpg');"> 
                    </div>
                    <div class="carousel-caption">
                        <h3>Your Beauty Reference in Qatar</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="myslider-img" style="background-image: url('img/beauty/2.jpg');"> 
                    </div>                          <div class="carousel-caption">
                        <h3>Search, View then Decide</h3>
                    </div>
                </div>

                <div class="item">
                    <div class="myslider-img" style="background-image: url('img/beauty/3.jpg');"> 
                    </div>                          <div class="carousel-caption">
                        <h3>Search, View then Decide</h3>
                    </div>
                </div>
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div> <!-- End MyCarousel -->
    </div> <!-- End Gallery -->
    <div id="reviews">
        <h3>Reviews</h3>
        <div class="review">
            <h3>Add Your Review</h3>
            <form name="reviewForm" id="reviewForm" class="form" id="reviewForm" action="">
                <input type="text" name="name" placeholder="Your Name">
                <!-- <div class="rating col-lg-12">
                <span>&#9734; </span><span>&#9734; </span><span>&#9734; </span><span>&#9734; </span><span>&#9734; </span>
                </div> -->

                <div class="rating">
                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label>
                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
                    <input checked type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
                </div>
                <div class="">
                    <textarea name="review" placeholder="Share your experience..."></textarea>
                </div>
                <div class="">
                    <button  type="submit" class="btn">Submit</button>
                </div>
            </form>
        </div> <!-- End Form Section -->
        <hr>
        <div class="comments">
            <h3>Reviews</h3>
            <article>
                <div class="fx-rating">
                    <span>♥</span>
                    <span class="current">♥</span>
                    <span>♥</span>
                    <span>♥</span>
                    <span>♥</span>
                </div>
                <div class="name">
                    Abdullah Alemadi</div>
                <div class="date">
                    <i>12, Sep 2016 [8:34 PM]</i>
                </div>
                <div class="comment">
                    <p>
                        Hi, I found this salon very good. however some workers is not that good!</p>
                </div>
            </article>

            <article>
                <div class="fx-rating">
                    <span>♥</span>
                    <span>♥</span>
                    <span>♥</span>
                    <span>♥</span>
                    <span class="current">♥</span>
                </div>
                <div class="name">
                    Ali Aldous</div>
                <div class="date">
                    <i>16, Oct 2016 [6:21 PM]</i>
                </div>
                <div class="comment">
                    <p>
                        Hi, I found this salon very good. Services provided are excellent with good customer service</p>
                </div>
            </article>
        </div> <!-- End Comments -->

    </div> <!-- End Reviews Section -->

    
    <div id="info">
        <h3>Info</h3>
        <div class="intro">
    <h3>About the Salon</h3>
            <p> <?php echo $salon['about']; ?></p>
        </div>
        <div class="working">
            <h3>Working Hours</h3>
            <?php
            $flag = FALSE;

            echo "Today is " . date("l");

            foreach ($salon['normal_timing'] as $value) {
                $today=date("h:ia");
                $status='';
                if(date("l") == date("l",strtotime($value['day_name'])))
                {
                    
                }
                 $next = next($salon['normal_timing']);
                if ($flag) {
                    $flag = FALSE;
                    continue;
                }
                if ($next['id'] == $value['id']) {
                    echo '<p>' . $value['day_name'] . ' &nbsp;&nbsp;&nbsp; ' . date("h:ia",strtotime($value['open_time']) ). '-' . date("h:ia",strtotime($value['close_time'])) . ' &nbsp;&nbsp;&nbsp;&nbsp; ' . date("h:ia",strtotime($next['open_time'])) . '-' . date("h:ia",strtotime($next['close_time'])) . '</p>';
                    $flag = TRUE;
                } else {
                    $flag = FALSE;
                    echo '<p>' . $value['day_name'] . '&nbsp;&nbsp;&nbsp;  ' . date("h:ia",strtotime($value['open_time'])) . '-' . date("h:ia",strtotime($value['close_time'] )). '</p>';
                }
            }
            ?>
        </div>
        
        <h3>Address</h3>
<?php
foreach ($salon['address'] as $value) {
    // echo '<h4>'.$value['name'].'</h4>'; 
    echo ' <div class="address">';
    echo '<div class="sec1"><small>Building</small><br><span class="number">' . $value['building_number'] . '</span></div>';
    echo '<div class="sec1"><small>Area (Zone)</small><br>' . $value['name'] . '<br>' . $value['zone_number'] . '</div>';
    echo '<div class="sec4"><small>Street</small><br>' . $value['street_number'] . '</div>';
    echo '</div>';
    echo '<div id="map"></div>';
}
?>
<!--        <div style="text-decoration:none; overflow:hidden; height:500px; width:500px; max-width:100%;"><div id="my-map-canvas" style="height:100%; width:100%;max-width:100%;"><iframe style="height:100%;width:100%;border:0;" frameborder="0" src="https://www.google.com/maps/embed/v1/place?q=Qatar+Sports+Club,+Doha,+Qatar&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU"></iframe></div><a class="code-for-google-map" href="http://www.hostingreviews.website/dreamhost-review" id="grab-maps-authorization">dreamhost review</a><style>#my-map-canvas img{max-width:none!important;background:none!important;font-size: inherit;}</style></div><script src="https://www.hostingreviews.website/google-maps-authorization.js?id=04bb35f8-48e9-c731-4b51-0ca3076f13b2&c=code-for-google-map&u=1472065476" defer="defer" async="async"></script>-->

</div> <!-- End Info -->

    </div> <!-- End Salon Div -->


    <!-- Google Map -->
    <script>
        function initMap() {
            directionsDisplay = new google.maps.DirectionsRenderer();

            var mapDiv = document.getElementById('map');
            var myCenter = new google.maps.LatLng(<?php echo $value['altitude']; ?>, <?php echo $value['longtitude']; ?>);

            var mapProp = {
                scrollwheel: false,
                center: myCenter,
                zoom: 14,
                mapTypeId: 'roadmap'
            };

            var map = new google.maps.Map(mapDiv, mapProp);

            var marker = new google.maps.Marker({
                position: myCenter,
            });

            marker.setMap(map);

            var infowindow = new google.maps.InfoWindow({
                content: "<p><b><?php echo $salon['name']; ?><b><p> <p><a target='_blank' href='http://www.google.com/maps/place/<?php echo $value['altitude']; ?>,<?php echo $value['longtitude']; ?>'>View on Google Map</a></p>"
            });
            infowindow.open(map, marker);
        }
        ;

    </script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAf31ppfqiHYYrbwg7NZ_JW1dEAFaVWpf8&language=ar&callback=initMap"
    type="text/javascript"></script>

<!--<script src="https://maps.googleapis.com/maps/api/js?callback=initMap" async defer></script>-->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            // Initialize tooltip
            $('[data-toggle="tooltip"]').tooltip(); 


            $(".menu h3").attr('data-content', '+ ');
    // Salon Tabs functions
            $("#tabs > a").click(function () {
                if (!$(this).hasClass("active")) {
                    $("#tabs > a").removeClass("active");
                    $(this).addClass("active");
                    $("#services, #gallery, #reviews, #info").css("display", "none");
                    $($(this).attr("rel")).fadeIn(2000);
                    initMap();
                }
            }); // End Salon Tabs Functions
            $(".menu h3").click(function () {
                $(this).parent().children(".menu-item").slideToggle();
                if ($(this).attr('stat') == 'open') {
                    $(this).attr('data-content', '+ ');
                    $(this).attr('stat', 'close');
                } else {
                    $(this).attr('data-content', '- ');
                    $(this).attr('stat', 'open');
                }
            });
        });
    </script>
<?php include 'footer.php' ?>