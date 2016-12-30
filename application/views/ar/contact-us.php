<?php include 'header.php' ?>
        
<!-- Contact Section -->
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="page-title">
                <h2>اتصل بنا</h2>
            </div>
        </div>
        <div class="row" >
            <div class="col-lg-8 col-lg-offset-2">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" novalidate>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>الاسم</label>
                            <input type="text" class="form-control" placeholder="الاسم" id="name" required data-validation-required-message="يُرجى إدخال الاسم">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>البريد الالكتروني</label>
                            <input type="email" class="form-control" placeholder="البريد الالكتروني" id="email" required data-validation-required-message="يُرجى إدخال البريد الالكتروني">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>رقم الهاتف</label>
                            <input type="tel" class="form-control" placeholder="رقم الهاتف" id="phone" required data-validation-required-message="يُرجى إدخال رقم الهاتف">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>الرسالة</label>
                            <textarea rows="5" class="form-control" placeholder="الرسالة" id="message" required data-validation-required-message="يُرجى إدخال الرسالة"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-lg">أرسل</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php' ?>