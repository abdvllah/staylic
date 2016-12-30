<?php include 'header.php' ?>

        <div id="search-page" class="wrap">

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
      <hr>
      <div id="filters">
        <h4>تصفية حسب</h4>

        <ul class="filter">
          <b>التقييم</b>
          <li>١ ♥</li>
          <li>٢ ♥♥</li>
          <li>٣ ♥♥♥</li>
          <li>٤ ♥♥♥♥</li>
          <li>٥ ♥♥♥♥♥</li>
        </ul>
        <ul class="filter">
          <b>المميزات</b>
          <li>المواقف</li>
          <li>القهوة</li>
          <li>مكان للأطفال</li>
        </ul>
         <ul class="filter">
          <b>الموقع</b>
          <li>شارع</li>
          <li>حيّ</li>
          <li>فندق</li>
        </ul>
         <ul class="filter">
          <b>مجال السعر</b>
          <li>أقل من ٥٠</li>
          <li>٥٠ - ١٠٠</li>
          <li>١٠٠ - ٢٠٠</li>
          <li>٢٠٠ - ٣٠٠</li>
          <li>٣٠٠ - ٤٠٠</li>
          <li>٤٠٠ - ٥٠٠</li>
          <li>أعلى من ٥٠٠</li>
        </ul>

      </div> <!-- End Filters -->
  </div> <!-- End Search -->

    <div id="results">

<div class="sorting">

  <div class="c-results">لديك حوالي ٣٠ نتيجة بحث<br>
      <b>لا يوجد</b>
</div>
  <div class="sort">
    <h4>
    رتّب
    &#x2191;
    &#x2193;
    <br>
    </h4>

    <div class="options">
      <ul>
      <li>الأعلى تقييمًا</li>
      <li>السعر (أقل إلى أعلى)</li>
      <li>السعر (أعلى إلى أقل)</li>
      <li>الأكثر مراجعة</li>
      <li>أبجديًا (أ - ي)</li>
      </ul>
    </div>
  </div>

  </div>

      <div class="item">
        <img src="../img/beauty/1.jpg">
        <div class="info">
        <div class="title">صالون رحاب للتجميل</div>
        <div class="fx-rating">
                     <span>♥</span>
                     <span>♥</span>
                     <span>♥</span>
                     <span class="current">♥</span>
                     <span>♥</span>
        </div>
        <div class="address">الدوحة - المطار القديم</div>
        <div class="top-service">قص الشعر</div>
        <div class="price">$</div>
      </div>
      </div>

<div class="item">
        <img src="../img/beauty/2.jpg">
        <div class="info">
        <div class="title">صالون التميز للتجميل</div>
        <div class="fx-rating">
                     <span>♥</span>
                     <span>♥</span>
                     <span>♥</span>
                     <span>♥</span>
                     <span class="current">♥</span>
        </div>
        <div class="address">الدوحة - المطار القديم</div>
        <div class="top-service">المكياج</div>
        <div class="price">$</div>
      </div>
      </div>

      <div class="item">
      <img src="../img/beauty/3.jpg">
        <div class="info">
        <div class="title">صالون الجميلة للتجميل</div>
        <div class="fx-rating">
                     <span>♥</span>
                     <span>♥</span>
                     <span class="current">♥</span>
                     <span>♥</span>
                     <span>♥</span>
        </div>
        <div class="address">الدوحة - المطار القديم</div>
        <div class="top-service">التسمير</div>
        <div class="price">$</div>
      </div>
      </div>

          </div> <!-- End Results -->

  </div> <!-- End Wrap -->


<!-- jQuery -->
<script src="../js/jquery.js"></script>

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