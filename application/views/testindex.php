<?php include 'header.php' ?>
<link href="../css/staylictest.css">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>

 <div id="intro" style="background-image: url('img/main.jpg');">
     <div class="hover">
    </div>
        <h2>We are Staylic, an online platform to discover beauty around you. In short, your beauty best buddy! <p>Lets get started</p>
        </h2>
    </div>

<div id="home">
    <h3>I Want to ..</h3>
    <a class="todo" href="">Discover All Salons  😏</a>
    <a class="todo" href="">Search For Nearby Salons  👀</a>
    <a class="todo" href="">Book An Appointment 😎</a>
    
    <div id="search">
        <div class="search-icon">
            <img class="icon" src="img/icons/search.png">
        </div>
        <form action="Welcome/search" method="post">

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

</div>
<!-- End Search -->

   <!--  <section id="featured" class="featured">
        <div class="wrap-h"><h2>Featured Salons</h2></div>

        <div class="item">
            <a href="salon.php"><img src="img/beauty/1.jpg"></a>
            <div class="caption">
                <h4>Salon Rehab</h4>
                <p>some information</p>
            </div>
        </div>
        <div class="item">
            <a href="salon.php"><img src="img/beauty/2.jpg"></a>
            <div class="caption">
                <h4>Salon Rehab</h4>
                <p>some information</p>
            </div>
        </div>
        <div class="item">
            <a href="salon.php"><img src="img/beauty/3.jpg"></a>
            <div class="caption">
                <h4>Salon Rehab</h4>
                <p>some information</p>
            </div>
        </div>
        <div class="item">
            <a href="salon.php"><img src="img/beauty/4.jpg"></a>
            <div class="caption">
                <h4>Salon Rehab</h4>
                <p>some information</p>
            </div>
        </div>
    </section>
-->

<!-- Portfolio Grid Section -->
<section id="categories">
    <div class="wrap-h"><h2>Search By Category</h2></div>
    <div class="homepage_item">
        <div class="caption">
            <h3>Hair</h3>
        </div>
        <img src="../img/categories/hair.png" class="img-responsive" alt="">
    </div>
    <div class="homepage_item">
        <div class="caption">
            <h3>Facial</h3>
        </div>
        <img src="../img/categories/facial.png" class="img-responsive" alt="">
    </div>
    <div class="homepage_item">
        <div class="caption">
            <h3>Manicure & Pedicure</h3>
        </div>
        <img src="../img/categories/m&p.png" class="img-responsive" alt="">
    </div>
    <div class="homepage_item">
        <div class="caption">
            <h3>Waxing</h3>
        </div>
        <img src="../img/categories/waxing.png" class="img-responsive" alt="">
    </div>
    <div class="homepage_item">
        <div class="caption">
            <h3>Makeup</h3>
        </div>
        <img src="../img/categories/makeup.png" class="img-responsive" alt="">
    </div>
    <div class="homepage_item">
        <div class="caption">
            <h3>Henna</h3>
        </div>
        <img src="../img/categories/henna.png" class="img-responsive" alt="">
    </div>
    <div class="homepage_item">
        <div class="caption">
            <h3>Bridel</h3>
        </div>
        <img src="../img/categories/bride.png" class="img-responsive" alt="">
    </div>
    <div class="homepage_item">
        <div class="caption">
            <h3>Spa</h3>
        </div>
        <img src="../img/categories/spa.png" class="img-responsive" alt="">
    </div>
  <!--   <div class="homepage_item">
        <div class="caption">
            <h3>Fitness</h3>
        </div>
        <img src="img/categories/fitness.png" class="img-responsive" alt="">
    </div>
    <div class="homepage_item">
        <div class="caption">
            <h3>Special Packages</h3>
        </div>
        <img src="img/categories/special.png" class="img-responsive" alt="">
    </div> -->
</section>

    <!-- <section id="top" class="featured">
        <div class="wrap-h"><h2>Top Rated Salons</h2></div>

        <div class="item">
            <img src="img/beauty/1.jpg">
            <div class="caption">
                <h4>Salon Rehab</h4>
                <p>some information</p>
            </div>
        </div>
        <div class="item">
            <img src="img/beauty/2.jpg">
            <div class="caption">
                <h4>Salon Rehab</h4>
                <p>some information</p>
            </div>
        </div>
        <div class="item">
            <img src="img/beauty/3.jpg">
            <div class="caption">
                <h4>Salon Rehab</h4>
                <p>some information</p>
            </div>
        </div>
        <div class="item">
            <img src="img/beauty/4.jpg">
            <div class="caption">
                <h4>Salon Rehab</h4>
                <p>some information</p>
            </div>
        </div>
    </section> -->


    <section id="location">  
        <div class="wrap-h"><h2>Search By Location</h2></div>

        <div class="homepage_item">
            <div class="caption">
                <h3>Al-Wakrah</h3>
            </div>
            <img src="../img/loc/alwakrah.png" class="img-responsive" alt="">
        </div>

        <div class="homepage_item">
            <div class="caption">
                <h3>Old Airport</h3>
            </div>
            <img src="../img/loc/old-airport.png" class="img-responsive" alt="">
        </div>

        <div class="homepage_item">
            <div class="caption">
                <h3>Al-Rayyan</h3>
            </div>
            <img src="../img/loc/alrayyan.png" class="img-responsive" alt="">
        </div>

        <div class="homepage_item">
            <div class="caption">
                <h3>Madinat Khalifa</h3>
            </div>
            <img src="../img/loc/madinat-khalifa.png" class="img-responsive" alt="">
        </div>

        <div class="homepage_item">
            <div class="caption">
                <h3>Umsalal</h3>
            </div>
            <img src="../img/loc/umsalal.png" class="img-responsive" alt="">
        </div>

        <div class="homepage_item">
            <div class="caption">
                <h3>Al-Khour</h3>
            </div>
            <img src="../img/loc/alkhour.png" class="img-responsive" alt="">
        </div>

        <div class="homepage_item">
            <div class="caption">
                <h3>Al-Saad</h3>
            </div>
            <img src="../img/loc/alsaad.png" class="img-responsive" alt="">
        </div>

        <div class="homepage_item">
            <div class="caption">
                <h3>West Bay</h3>
            </div>
            <img src="../img/loc/westbay.png" class="img-responsive" alt="">
        </div>

    </section> 

<h3>You can always come back for more.. Stay near 😘
</h3>

</div> <!-- End Home Div -->


<!-- jQuery -->
<script src="js/jquery.js"></script>


<script>
function displayVals() {
  sessionStorage.sName = $("#query").val();
  sessionStorage.sArea = $("#area").val();
  sessionStorage.sCat = $("#category").val();
  // alert(localStorage.sName);
  // alert(localStorage.sArea);
  // alert(localStorage.sCat);
}

$( "select, input" ).change(displayVals );

</script>

<?php include 'footer.php' ?> 
