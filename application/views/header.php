<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Staylic - Beauty Salons In Qatar</title>

    <link href="<?= base_url('/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?= base_url('css/style.css'); ?>" rel="stylesheet">
    
     <!-- Google analytics script -->
    <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-89263454-1', 'auto');
  ga('send', 'pageview');
</script>
 <!-- end of google analytic script -->
</head>
<body>
    <div id="mob-nav">
        <a class="mob-logo" href="<?= base_url()?>"><img src="<?= base_url('img/staylic_logo.png'); ?>" alt="Staylic"></a>
        <h4>
            <span class="glyphicon glyphicon-menu-hamburger"></span>&nbsp;Menu
        </h4>
        <div class="nav-item">
            <ul>
                <li><a href="<?= base_url('')?>">Home</a></li>
               <li><a href="<?= base_url('/search/')?>">Search</a></li>
               <li><a href="<?= base_url('/discover_salons/')?>">Discover</a></li>
                <li><a href="<?= base_url('/salon_owner/')?>">Salon Owner?</a></li>
                <li><a href="<?= base_url('/contact_us/')?>">Contact Us</a></li>
            </ul>
        </div>
    </div> <!-- End Nav -->

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <a class="navbar-brand" href="<?= base_url()?>"><img src="<?= base_url('img/staylic_logo.png'); ?>" alt="Staylic logo"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-container">
                <ul class="nav navbar-nav">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a href="<?= base_url('')?>">Home</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/search/')?>">Find Salons</a>
                    </li>
                    <li>
                        <a href="<?= base_url('/discover_salons/')?>">Discover Salons</a>
                    </li>
                    <li>
                        <a class="special" href="<?= base_url('/salon_owner')?>">Salon Owner?</a>
                    </li>

                    <li>
                        <a href="<?= base_url('/contact_us')?>">Contact Us</a>
                    </li>
                    
                </ul>
               

            </div>
            <!-- /.navbar-collapse -->
    </nav>


