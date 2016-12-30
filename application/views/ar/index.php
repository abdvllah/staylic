<?php include 'header.php' ?>

        <div id="home">
        <!-- Header -->
                <header>

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
                    <div class="myslider-img" style="background-image: url('../img/slider/img1.jpg');"> 
                    </div>                          <div class="carousel-caption">
                    <h3>دليلك للجمال في قطر</h3>
                </div>
            </div>

            <div class="item">
                <div class="myslider-img" style="background-image: url('../img/slider/img2.jpg');"> 
                </div>                          <div class="carousel-caption">
                <h3>ابحث، شاهد ثم قرر!</h3>
            </div>
        </div>

        <div class="item">
            <div class="myslider-img" style="background-image: url('../img/slider/img3.jpg');"> 
            </div>                      <div class="carousel-caption">
            <h3>أكثر من مئة صالون بقربك</h3>
        </div>

        </div>

        <div class="item">
            <div class="myslider-img" style="background-image: url('../img/slider/img4.jpg');"> 
            </div>                  <div class="carousel-caption">
            <h3>شارك تجربتك مع الآخرين</h3>
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
        </div> <!-- End My Carousel -->


                        <div id="search" class="form">
                          <form action="search.php" method="get">
                           <div>
                            <button class="btn nearest">أعطني الأقرب لي</button>
                          </div>
                          <div>
                              <input type="text" id="query" name="query" placeholder="الصالون أو الخدمة">
                          </div>
                          <div>
                              <select id="city" name="locations">
                                <option selected="" value="">المنطقة (الكل)</option>
                                <option value="">الوكرة</option>
                                <option value="">المطار</option>
                                <option value="">الريان</option>
                                <option value="">مدينة خليفة</option>
                                <option value="">أم صلال</option>
                                <option value="">الخور</option>
                            </select>
                        </div>
                        <div>
                          <select id="catagory" name="catagories">
                            <option selected="" value="">التصنيف (الكل)</option>
                            <option value="">أظافر</option>
                            <option value="">تلوين الشعر</option>
                            <option value="">قص الشعر</option>
                            <option value="">الحواجب</option>
                        </select>
                    </div>
                    <div>
                      <button type="submit" class="btn">ابحث</button>
                  </div>
              </form>
          </div> <!-- End Search -->

          <div class="down page-scroll">
    <a href="#featured" >Scroll Down<br>
        <span class="glyphicon glyphicon-chevron-down"></span>
        </a>
    </div>
        </header>


<section id="featured" class="featured">
    <div class="wrap-h"><h2>الصالونات المُبرزة؟</h2></div>

    <div class="item">
        <a href="salon.php"><img src="../img/beauty/1.jpg"></a>
        <div class="caption">
            <h4>صالون الجميلة</h4>
            <p>بعص المعلومات</p>
        </div>
    </div>
   <div class="item">
        <a href="salon.php"><img src="../img/beauty/2.jpg"></a>
        <div class="caption">
            <h4>صالون الجميلة</h4>
            <p>بعص المعلومات</p>
        </div>
    </div>
    <div class="item">
        <a href="salon.php"><img src="../img/beauty/3.jpg"></a>
        <div class="caption">
           <h4>صالون الجميلة</h4>
           <p>بعص المعلومات</p>
        </div>
    </div>
    <div class="item">
        <a href="salon.php"><img src="../img/beauty/4.jpg"></a>
        <div class="caption">
         <h4>صالون الجميلة</h4>
         <p>بعص المعلومات</p>
        </div>
    </div>
</section>

        <!-- Portfolio Grid Section -->
        <section id="portfolio">
                   <div class="wrap-h"><h2>التصنيفات</h2></div>
                    <div class="portfolio-item">
                        <div class="caption">
                            <h3>صباغة الشعر</h3>
                        </div>
                        <img src="../img/portfolio/haircolor.png" class="img-responsive" alt="">
                    </div>
                    <div class="portfolio-item">
                        <div class="caption">
                            <h3>قص الشعر</h3>
                        </div>
                        <img src="../img/portfolio/haircut.png" class="img-responsive" alt="">
                    </div>
                    <div class="portfolio-item">
                        <div class="caption">
                            <h3>الأظافر</h3>
                        </div>
                        <img src="../img/portfolio/nails.png" class="img-responsive" alt="">
                    </div>
                    <div class="portfolio-item">
                        <div class="caption">
                            <h3>التسريح</h3>
                        </div>
                        <img src="../img/portfolio/blowout.png" class="img-responsive" alt="">
                    </div>
                    <div class="portfolio-item">
                        <div class="caption">
                            <h3>املكياج</h3>
                        </div>
                        <img src="../img/portfolio/makeup.png" class="img-responsive" alt="">
                    </div>
                    <div class="portfolio-item">
                        <div class="caption">
                            <h3>التسمير</h3>
                        </div>
                        <img src="../img/portfolio/tanning.png" class="img-responsive" alt="">
                    </div>
                    <div class="portfolio-item">
                        <div class="caption">
                            <h3>الحواجب</h3>
                        </div>
                        <img src="../img/portfolio/brows.png" class="img-responsive" alt="">
                    </div>
                    <div class="portfolio-item">
                        <div class="caption">
                            <h3>الوجه</h3>
                        </div>
                        <img src="../img/portfolio/facial.png" class="img-responsive" alt="">
                    </div>
        </section>




<section id="top" class="featured">
    <div class="wrap-h"><h2>الصالونات الأعلى تقييمًا</h2></div>

    <div class="item">
        <img src="../img/beauty/1.jpg">
        <div class="caption">
           <h4>صالون الجميلة</h4>
           <p>بعص المعلومات</p>
        </div>
    </div>
   <div class="item">
        <img src="../img/beauty/2.jpg">
        <div class="caption">
          <h4>صالون الجميلة</h4>
          <p>بعص المعلومات</p>
        </div>
    </div>
    <div class="item">
        <img src="../img/beauty/3.jpg">
        <div class="caption">
            <h4>صالون الجميلة</h4>
            <p>بعص المعلومات</p>
        </div>
    </div>
    <div class="item">
        <img src="../img/beauty/4.jpg">
        <div class="caption">
           <h4>صالون الجميلة</h4>
           <p>بعص المعلومات</p>
        </div>
    </div>
</section>


        <section id="location">  
         <div class="wrap-h"><h2>ابحث بواسطة المكان</h2></div>

        <div class="item has-background" style="background-image: url('../img/loc/wakrah.jpg');">
            الوكرة
        </div>
        <div class="item">المطار
        </div>
        <div class="item has-background" style="background-image: url('../img/loc/rayyan.jpg');">الريان
        </div>
        <div class="item">مدينة خليفة
        </div>
        <div class="item has-background" style="background-image: url('../img/loc/umsalal.jpg');">أم صلال
        </div>
        <div class="item has-background " style="background-image: url('../img/loc/khour.jpg');">الخور
        </div>
        </section> 

 </div> <!-- End Home Div -->


<!-- jQuery -->
<script src="../js/jquery.js"></script>

<?php include 'footer.php' ?> 
