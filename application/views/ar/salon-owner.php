<?php include 'header.php' ?>
<section id="salon-owner">
    <div class="page-title">
        <h2>تملك صالون؟</h2>
    </div>


    <h3>من نحن؟ وماذا نفعل؟</h3>
    <ul>
        <li>point one</li>
        <li>point two</li>
        <li>point three</li>
    </ul>

    <h3>ماذا سنقدم لك؟</h3>
    <ul>
        <li>point one</li>
        <li>point two</li>
        <li>point three</li>
    </ul>

    <p class="my-jumbotron">لتكون عضوًا وتضم صالونك مع ستايلك، قم بملأ هذا النموذج الآن وسيقوم فريق المبيعات بمباشرة التواصل معك قريبًا جدًا.
    </p>

    <h3>نموذج الصالون</h3>

    <div>
       <form name="s-owner" id="s-owner" class="form" action="">
        <div>
            الاسم الكامل<br>
            <input type="text" name="name" placeholder="">
        </div>
        <div>
            اسم الصالون<br>
            <input type="text" name="salon" placeholder="">
        </div>
<div class="checkbox">
    هل لدى صالونك أكثر من فرع؟
        <input type="checkbox" name="branches">
</div>
<div class="checkbox">
    هل لدى صالونك نظام حجز الكتروني؟
        <input type="checkbox" name="branches">
</div>
<div class="plate-address">
    العنوان كما في لوحة "عنواني"<br>
    <input type="text" name="area" placeholder="رقم المنطة">
    <input type="text" name="street" placeholder="رقم الشارع">
    <input type="text" name="building" placeholder="رقم المبنى">
</div>
<div>
    العنوان بشكل نصي<br>
<input type="text" name="address" placeholder="">
</div>
<div>
    رقم التواصل (هاتف/جوال)<br>
<input type="text" name="number" placeholder="">
</div>

<div>
    البريد الالكرتوني<br>
<input type="email" name="email" placeholder="">
</div>

<div>
    <span class="text-danger">سؤال التثبت: ما هو ناتج ٣ + ٦ = ؟</span><br>
<input type="text" name="check" placeholder="">
</div>

        <div class="">
            <button  type="submit" class="btn">أرسل</button>
        </div>
    </form>
</div> <!-- End Form Section -->

</section>

<?php include 'footer.php' ?>
