<?php include 'header.php' ?>

        <div id="search-page" class="wrap">

                <div id="search" class="form">
                  <form action="search" method="post">
                   <div>
                    <a href="search.html?loc=nearest" class="nearest">Get Me The Nearest</a>
                  </div>
                  <div>
                      <input type="text" id="query" name="query" placeholder="SERVICE OR SALON">
                  </div>
                  <div>
                      <select id="city" name="locations">
                        <option selected="" value="">Location (ALL)</option>
                        <option value="">Doha</option>
                        <option value="">Wakrah</option>
                        <option value="">Khour</option>
                        <option value="">Rayyan</option>
                    </select>
                </div>
                <div>
                  <select id="catagory" name="catagories">
                    <option selected="" value="">Catagory (ALL)</option>
                    <option value="">Nail</option>
                    <option value="">Haircolor</option>
                    <option value="">Haircut</option>
                    <option value="">eyebrows</option>
                </select>
            </div>
            <div>
              <button type="submit" class="btn">SEARCH</button>
          </div>
      </form>
      <hr>
      <div id="filters">
        <h4>Filter By</h4>

        <ul class="filter">
          <b>Rating</b>
          <li>1 ♥</li>
          <li>2 ♥♥</li>
          <li>3 ♥♥♥</li>
          <li>4 ♥♥♥♥</li>
          <li>5 ♥♥♥♥♥</li>
        </ul>
        <ul class="filter">
          <b>Features</b>
          <li>Parking</li>
          <li>Coffee</li>
          <li>Children Corner</li>
        </ul>
         <ul class="filter">
          <b>Place</b>
          <li>Street</li>
          <li>Neighborhood</li>
          <li>Hotel</li>
        </ul>
         <ul class="filter">
          <b>Price Range (QR)</b>
          <li>Below 50</li>
          <li>50 - 100</li>
          <li>100 - 200</li>
          <li>200 - 300</li>
          <li>300 - 400</li>
          <li>400 - 500</li>
          <li>Above 500</li>
        </ul>

      </div> <!-- End Filters -->
  </div> <!-- End Search -->

    <div id="results">

<div class="sorting">

  <div class="c-results">You Have About 30 Search Results<br>
      <b>None</b>
</div>
  <div class="sort">
    <h4>
    Sort
    &#x2191;
    &#x2193;
    <br>
    </h4>

    <div class="options">
      <ul>
      <li>Highest Rated</li>
      <li>Price (Low to High)</li>
      <li>Price (High to Low)</li>
      <li>Most Reviewed</li>
      <li>Alphabeticl (A to Z)</li>
      </ul>
    </div>
  </div>

  </div>

      <div class="item">
        <img src="img/beauty/1.jpg">
        <div class="info">
        <div class="title">Rehab Beauty Salon</div>
        <div class="fx-rating">
                     <span>♥</span>
                     <span>♥</span>
                     <span>♥</span>
                     <span class="current">♥</span>
                     <span>♥</span>
        </div>
        <div class="address">Doha - Matar Street</div>
        <div class="top-service">Haircut</div>
        <div class="price">$</div>
      </div>
      </div>

    <div class="item">
        <img src="img/beauty/2.jpg">
        <div class="info">
        <div class="title">Rehab Beauty Salon</div>
        <div class="fx-rating">
                     <span>♥</span>
                     <span>♥</span>
                     <span>♥</span>
                     <span class="current">♥</span>
                     <span>♥</span>
        </div>
        <div class="address">Doha - Matar Street</div>
        <div class="top-service">Haircut</div>
        <div class="price">$$</div>
      </div>
      </div>

       <div class="item">
        <img src="img/beauty/3.jpg">
        <div class="info">
        <div class="title">Rehab Beauty Salon</div>
        <div class="fx-rating">
                     <span>♥</span>
                     <span>♥</span>
                     <span>♥</span>
                     <span class="current">♥</span>
                     <span>♥</span>
        </div>
        <div class="address">Doha - Matar Street</div>
        <div class="top-service">Haircut</div>
        <div class="price">$$</div>
      </div>
      </div>

          </div> <!-- End Results -->


  </div> <!-- End Wrap -->


<!-- jQuery -->
<script src="js/jquery.js"></script>

 <script type="text/javascript">
            $(document).ready (function() {
      // alert ('Jquery is running!');

      // Filters keyword +/- Functionality
      $(".filter b").attr('data-content','- ');
      $(".filter b").attr('stat','open');


      // Show and Hide Filter Options List
     $(".filter b").click(function() {

       if( $(this).attr('stat') == 'open' ) {
         $(this).attr('data-content','+ ');
         $(this).attr('stat','close');
         $(this).parent().children('li').slideToggle();
       }
       else {
        $(this).attr('data-content','- ');
        $(this).attr('stat','open');
        $(this).parent().children('li').slideToggle();
      }
    });

     // Show and Hide Filter Options Selection
     $(".filter li").click(function () {
      if($(this).hasClass('active')) {
        $(this).removeClass('active');
      }
      else {
      $(this).addClass('active');
    }
     });


     // Sorting Functionality
      $(".sort ").click(function() {
      $(this).children(".options").slideToggle();
    });
      $(".options li").click(function() {
        $(".options li").removeClass('active');
          $(this).addClass('active');
          $(".sorting .c-results b").html($(this).html());
      });

     
  });
</script>

<?php include 'footer.php' ?>