<?php include 'header.php' ?>

<div id="hero" class="has-background">
    <div class="hero-txt">
        <h1>Staylic is an online network that promotes beauty salons across Qatar. Finding a Beauty Service has not been easier!</h1>
    </div>
    <div id="to-do">
        <ul>
            <a href="<?= base_url('/search')?>"><li><span class="glyphicon glyphicon-search"></span> <h2>Search for nearby salon</h2></li></a>
            <a href="<?= base_url('/discover_salons/')?>"><li><span class="glyphicon glyphicon-eye-open"></span> <h2>Discover All Salons</h2></li></a>
            <a href="<?= base_url('/salons_map/')?>"><li><span class="glyphicon glyphicon-map-marker"></span> <h2>View salons map</h2></li></a>
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
   
    <div class="homepage_item" id="haircat">
     <a href="<?= base_url('/Search')?>" onclick="changeCategory('Hair');" >
        <div class="caption">
            <h3>Hair</h3>
        </div>   <img src="img/categories/hair.png" class="img-responsive" alt="Hair category"> 
        </a>
    </div>
    <div class="homepage_item" id="facialcat">
      <a href="<?= base_url('/Search')?>" onclick="changeCategory('Facial');" >
        <div class="caption">
            <h3>Facial</h3>
        </div>
        <img src="img/categories/facial.png" class="img-responsive" alt="Facial Category">
         </a>
    </div>
   
   
    <div class="homepage_item" id="mpcat">
     <a href="<?= base_url('/Search')?>" onclick="changeCategory('Manicure & Pedicure');" >
        <div class="caption">
            <h3>Manicure & Pedicure</h3>
        </div>
        <img src="img/categories/m_p.png" class="img-responsive" alt="Manicure & Pedicure Category">
    </a>
    </div>
       <div class="homepage_item" id="waxingcat">
        <a href="<?= base_url('/Search')?>" onclick="changeCategory('Waxing');" >
        <div class="caption">
            <h3>Waxing</h3>
        </div>
        <img src="img/categories/waxing.png" class="img-responsive" alt="Waxing Category">
   </a>
    </div>
   
       <div class="homepage_item" id="makeupcat">
         <a href="<?= base_url('/Search')?>" onclick="changeCategory('Makeup');">
        <div class="caption">
            <h3>Makeup</h3>
        </div>
        <img src="img/categories/makeup.png" class="img-responsive" alt="Makeup Category">
        </a>
    </div>
    <div class="homepage_item" id="hennacat">
            <a href="<?= base_url('/Search')?>" onclick="changeCategory('Henna');" >
        <div class="caption">
            <h3>Henna</h3>
        </div>
        <img src="img/categories/henna.png" class="img-responsive" alt="Henna Category">
       </a>
    </div>
    <div class="homepage_item" id="bridalcat">
        <a href="<?= base_url('/Search')?>" onclick="changeCategory('Bride');">
        <div class="caption">
            <h3>Bridal</h3>
        </div>
        <img src="img/categories/bride.png" class="img-responsive" alt="Bridal">
       </a>
    </div>
    <div class="homepage_item" id="spacat">
           <a href="<?= base_url('/Search')?>" onclick="changeCategory('Spa');" >
        <div class="caption">
            <h3>Spa</h3>
        </div>
        <img src="img/categories/spa.png" class="img-responsive" alt="Spa Category">
    </a>
    </div>
</section>
    <section id="location">  
        <div class="wrap-h"><h2>LOCATIONS</h2></div>

        <div class="homepage_item">
           <a href="<?= base_url('/Search')?>" onclick="changeLocation('Al Wakrah');" >
            <div class="caption">
                <h3>Al-Wakrah</h3>
            </div>
            <img src="img/loc/alwakrah.png" class="img-responsive" alt="Al-Wakrah">
        </a>
        </div>

        <div class="homepage_item">
           <a href="<?= base_url('/Search')?>" onclick="changeLocation('Old Airport');" >
            <div class="caption">
                <h3>Old Airport</h3>
            </div>
            <img src="img/loc/old-airport.png" class="img-responsive" alt="Old Airport">
       </a>
        </div>

        <div class="homepage_item">
           <a href="<?= base_url('/Search')?>" onclick="changeLocation('Al Rayyan');" >
            <div class="caption">
                <h3>Al-Rayyan</h3>
            </div>
            <img src="img/loc/alrayyan.png" class="img-responsive" alt="Al Rayyan">
        </a>
        </div>

        <div class="homepage_item">
           <a href="<?= base_url('/Search')?>" onclick="changeLocation('Madinat Khalifa');" >
            <div class="caption">
                <h3>Madinat Khalifa</h3>
            </div>
            <img src="img/loc/madinat-khalifa.png" class="img-responsive" alt="Madinat Khalifa">
            </a>
        </div>

        <div class="homepage_item">
           <a href="<?= base_url('/Search')?>" onclick="changeLocation('Um Salal Mohammed');" >
            <div class="caption">
                <h3>Umsalal</h3>
            </div>
            <img src="img/loc/umsalal.png" class="img-responsive" alt="Umsalal">
            </a>
        </div>

        <div class="homepage_item">
           <a href="<?= base_url('/Search')?>" onclick="changeLocation('Al Khour');" >
            <div class="caption">
                <h3>Al-Khour</h3>
            </div>
            <img src="img/loc/alkhour.png" class="img-responsive" alt="Al-Khour">
            </a>
        </div>

        <div class="homepage_item">
           <a href="<?= base_url('/Search')?>" onclick="changeLocation('Al Saad');" >
            <div class="caption">
                <h3>Al-Saad</h3>
            </div>
            <img src="img/loc/alsaad.png" class="img-responsive" alt="Al-Saad">
            </a>
        </div>

        <div class="homepage_item">
           <a href="<?= base_url('/Search')?>" onclick="changeLocation('West Bay');" >
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
$(document).ready(function () {
    // Store session search terms
    $('#query').val(sessionStorage.sName);
    $('#area').val(sessionStorage.sArea);
    $('#category').val(sessionStorage.sCat);
});

// Hero bakcground change dynamicly
var backgrounds = [
'url(http://staylic.com/StaylicFrontend/img/hero/hero.jpg)', 
'url(http://staylic.com/StaylicFrontend/img/hero/hero2.jpg)', 
'url(http://staylic.com/StaylicFrontend/img/hero/hero3.jpg)', 
'url(http://staylic.com/StaylicFrontend/img/hero/hero4.jpg)', 
];
var current = 0;

function nextBackground() {
    $("#hero").css(
        'background-image',
        backgrounds[current = ++current % backgrounds.length]);

    setTimeout(nextBackground, 5000);
}
setTimeout(nextBackground, 5000);


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
//**search by category
    function changeCategory(cat){
	 sessionStorage.sCat = cat;
	 sessionStorage.sArea='';
	 sessionStorage.sName = '';
	}
	
	function changeLocation(location){
	 sessionStorage.sCat = '';
	 sessionStorage.sArea=location;
	 sessionStorage.sName = '';
	}

</script>

<?php include 'footer.php' ?> 
