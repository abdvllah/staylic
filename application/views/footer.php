
<!-- Footer -->
<footer>
    <div class="footer-above">
        <div class="container">
            <div class="row">
              
                <div class="footer-col col-md-6">
					<h3>Location</h3>
					<p>Doha - Qatar</p>
                </div>
                <div class="footer-col col-md-6">
                   <h3>Follow us on</h3>
                    <ul class="inline">
						<li>
                            <a target="_blank" href="https://www.twitter.com/staylic_com" class="btn-social"><img src="<?=base_url('img/social/twi.png');?>"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.facebook.com/staylic" class="btn-social"><img src="<?=base_url('img/social/fac.png');?>"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.instagram.com/staylic_com" class="btn-social"><img src="<?=base_url('img/social/ins.png');?>"></a>
                        </li>
                        <li>
                            <a target="_blank" href="https://www.snapchat.com/add/staylic_com" class="btn-social"><img src="<?=base_url('img/social/sna.png');?>"></a>
                        </li>
                    </ul>
                </div>
                
               
            </div>
        </div>
    </div>
    <div class="footer-below">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    Copyright &copy; Staylic - 2016
                </div>
            </div>
        </div>
    </div>
</footer>


<!-- jQuery -->
<script src="<?=base_url('js/jquery.js');?>"></script>


<script>
$(document).ready(function () {
    $(document.body).click (function () {
        $('#mob-nav .nav-item').fadeOut(200);
    });

    $('#mob-nav h4').click(function(e) {
        e.stopPropagation();
        $('#mob-nav .nav-item').slideToggle();
    });

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

      
});
</script>


<!-- Bootstrap Core JavaScript  -->
<script src="<?=base_url('js/bootstrap.min.js');?>"></script>

<!-- Plugin JavaScript 
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?=base_url('js/classie.js');?>"></script>
<script src="<?=base_url('js/cbpAnimatedHeader.js');?>"></script>

<!-- Contact Form JavaScript 
<script src="<?=base_url('js/jqBootstrapValidation.js');?> "></script>-->

<!-- Custom Theme JavaScript 
<script src="<?=base_url('js/freelancer.js');?>"></script>-->

</body>

</html>
