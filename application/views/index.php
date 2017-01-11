<?php include 'header.php' ?>

<div id="hero" class="has-background">
   <!--  <picture>
        <source srcset="img/hero.jpg" media="(min-width: 900px)">
        <source srcset="img/hero-m.jpg" media="(min-width: 501px)">
        <img src="img/hero-s.jpg"  alt="">
    </picture> -->

    <div class="hero-txt">
        <h1>Staylic is an online network that promotes beauty salons across Qatar. Finding a Beauty Service has never been easier!</h1>
    </div>
    <div id="to-do">
        <ul>
            <a href="<?= base_url('/discover_salons/')?>"><li><!-- <span class="glyphicon glyphicon-eye-open"></span> --> <img src="img/svg/discover.svg" alt=""><h2>Discover</h2></li></a>
            <a href="<?= base_url('/search')?>"><li><!-- <span class="glyphicon glyphicon-search"></span> --> <img src="img/svg/search.svg" alt=""><h2>Search</h2></li></a>
            <a href="<?= base_url('/salons_map/')?>"><li><!-- <span class="glyphicon glyphicon-map-marker"></span> --> <img src="img/svg/map.svg" alt=""><h2>Map</h2></li></a>
        </ul>            
    </div>
    <div class="hero-hover"></div>
</div>


<div id="search">
    <div class="search-icon">
        <img class="icon" src="img/icons/search.png" alt="search icon">
    </div>
    <form action="Search" method="post">

        <div>
            <input type="text" id="query" name="query" placeholder="Salon Name">
        </div>
        <div class="select">                          
           <select id="area" name="area">
            <option value="">Location (ALL)</option>
            <?php foreach ($areas as $item): ?>
            <option value="<?= $item->name ?>"> <?= $item->name ?> </option>
        <?php endforeach; ?>
    </select>
    <span class="glyphicon glyphicon-chevron-down"></span>              
</div>

<div class="select">
    <select id="category" name="category">
        <option value="">Category (ALL)</option>
        <?php foreach ($categories as $item): ?>
        <option value="<?= $item->name ?>"> <?= $item->name ?> </option>
    <?php endforeach; ?>
</select>
<span class="glyphicon glyphicon-chevron-down"></span>
</div>

<div>
    <button type="submit" name="submit">Search</button>
</div>
</form>

</div> <!-- End Search -->

<div id="home">
<!-- Portfolio Grid Section -->
<section id="categories">
    <div class="wrap-h"><h2>CATEGORIES</h2></div>
   
    <div class="flex-homepage-items">
        
     <a class="item" href="<?= base_url('/Search')?>" onclick="changeCategory('Hair');" >
        <div class="caption">
            <h3>Hair</h3>
        </div>   
        <img src="img/categories/hair.png" class="img-responsive" alt="Hair category"> 
        </a>

      <a class="item" href="<?= base_url('/Search')?>" onclick="changeCategory('Facial');" >
        <div class="caption">
            <h3>Facial</h3>
        </div>
        <img src="img/categories/facial.png" class="img-responsive" alt="Facial Category">
         </a>
   
   
     <a class="item" href="<?= base_url('/Search')?>" onclick="changeCategory('Manicure & Pedicure');" >
        <div class="caption">
            <h3>Manicure & Pedicure</h3>
        </div>
        <img src="img/categories/m_p.png" class="img-responsive" alt="Manicure & Pedicure Category">
    </a>
        <a class="item" href="<?= base_url('/Search')?>" onclick="changeCategory('Waxing');" >
        <div class="caption">
            <h3>Waxing</h3>
        </div>
        <img src="img/categories/waxing.png" class="img-responsive" alt="Waxing Category">
   </a>
   
         <a class="item" href="<?= base_url('/Search')?>" onclick="changeCategory('Makeup');">
        <div class="caption">
            <h3>Makeup</h3>
        </div>
        <img src="img/categories/makeup.png" class="img-responsive" alt="Makeup Category">
        </a>
            <a class="item" href="<?= base_url('/Search')?>" onclick="changeCategory('Henna');" >
        <div class="caption">
            <h3>Henna</h3>
        </div>
        <img src="img/categories/henna.png" class="img-responsive" alt="Henna Category">
       </a>
        <a class="item" href="<?= base_url('/Search')?>" onclick="changeCategory('Bridal');">
        <div class="caption">
            <h3>Bridal</h3>
        </div>
        <img src="img/categories/bride.png" class="img-responsive" alt="Bridal">
       </a>
           <a class="item" href="<?= base_url('/Search')?>" onclick="changeCategory('Spa');" >
        <div class="caption">
            <h3>Spa</h3>
        </div>
        <img src="img/categories/spa.png" class="img-responsive" alt="Spa Category">
    </a>

</div>

</section>
    <section id="location">  
        <div class="wrap-h"><h2>LOCATIONS</h2></div>

        <div class="flex-homepage-items">

           <a class="item" href="<?= base_url('/Search')?>" onclick="changeLocation('Al Wakrah');" >
            <div class="caption">
                <h3>Al-Wakrah</h3>
            </div>
            <img src="img/loc/alwakrah.png" class="img-responsive" alt="Al-Wakrah">
        </a>
        

           <a class="item" href="<?= base_url('/Search')?>" onclick="changeLocation('Old Airport');" >
            <div class="caption">
                <h3>Old Airport</h3>
            </div>
            <img src="img/loc/old-airport.png" class="img-responsive" alt="Old Airport">
       </a>
        

           <a class="item" href="<?= base_url('/Search')?>" onclick="changeLocation('Al Rayyan');" >
            <div class="caption">
                <h3>Al-Rayyan</h3>
            </div>
            <img src="img/loc/alrayyan.png" class="img-responsive" alt="Al Rayyan">
        </a>
        

           <a class="item" href="<?= base_url('/Search')?>" onclick="changeLocation('Madinat Khalifa');" >
            <div class="caption">
                <h3>Madinat Khalifa</h3>
            </div>
            <img src="img/loc/madinat-khalifa.png" class="img-responsive" alt="Madinat Khalifa">
            </a>
        

           <a class="item" href="<?= base_url('/Search')?>" onclick="changeLocation('Um Salal Mohammed');" >
            <div class="caption">
                <h3>Umsalal</h3>
            </div>
            <img src="img/loc/umsalal.png" class="img-responsive" alt="Umsalal">
            </a>
        

           <a class="item" href="<?= base_url('/Search')?>" onclick="changeLocation('Al Khour');" >
            <div class="caption">
                <h3>Al-Khour</h3>
            </div>
            <img src="img/loc/alkhour.png" class="img-responsive" alt="Al-Khour">
            </a>
        

           <a class="item" href="<?= base_url('/Search')?>" onclick="changeLocation('Al Sadd');" >
            <div class="caption">
                <h3>Al-Sadd</h3>
            </div>
            <img src="img/loc/alsaad.png" class="img-responsive" alt="Al-Saad">
            </a>
        

           <a class="item" href="<?= base_url('/Search')?>" onclick="changeLocation('West Bay');" >
            <div class="caption">
                <h3>West Bay</h3>
            </div>
            <img src="img/loc/westbay.png" class="img-responsive" alt="West Bay">
            </a>
        </div>

    </section> 

</div> <!-- End Home Div -->


<!-- jQuery -->
<script src="js/jquery.js"></script>

<script>
    function getLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition, showError);
        } else {
            x.innerHTML = "Geolocation is not supported by this browser.";
        }
    }

    function showPosition(position) {

      sessionStorage.latitude = position.coords.latitude;
      sessionStorage.longitude = position.coords.longitude;

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

<script>
$(document).ready(function () {
    getLocation();
    // Store session search terms
    $('#query').val(sessionStorage.sName);
    $('#area').val(sessionStorage.sArea);
    $('#category').val(sessionStorage.sCat);
});

// Activating hover for touch screens
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

// Scroll event for search to appear only in big screens
// $(window).scroll(function(){
//     var targetOffset = $('#hero').height();
//     if( $(window).width() > "768" )  {

//         if($(this).scrollTop() > targetOffset / 2){
//             $('#search').fadeIn();
//         }
//         if($(this).scrollTop() <= targetOffset / 2){
//             $('#search').fadeOut();
//         }
//     }

// });


// Store search session
function displayVals() {
  sessionStorage.sName = $("#query").val();
  sessionStorage.sArea = $("#area").val();
  sessionStorage.sCat = $("#category").val();
}

$( "select, input" ).change(displayVals );
    function changeCategory(cat){
	 sessionStorage.sCat = cat;
	 sessionStorage.sArea='';
	 sessionStorage.sName = '';
	}
	
	function changeLocation(location){
	 sessionStorage.sCat = '';
	 sessionStorage.sArea= location;
	 sessionStorage.sName = '';
	}

</script>

<?php include 'footer.php' ?> 
