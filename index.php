<?php
include('includes/session.php');
?>

<html>
<head>
    <link rel="shortcut icon" href="assets/img/logowhite.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Magiting | Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/STYLES.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
</head>

<body style="color: rgb(255,255,255);">
<header class="home-header" style="margin-top: -10px;margin-bottom: -10px;"><img class="d-block float-left" src="assets/img/home header.jpg" style="width: 100%;" /></header>
    <nav class="navbar navbar-light navbar-expand-lg bg-white" id="mainNav" style="background-color: #ffffff;">
    <div class="container-fluid"><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mx-auto" style="margin: 0px;padding: 0px;">
                <li role="presentation" class="nav-item"><a href="#" class="nav-link cart" style="width: 35px;height: 35px;margin: 0px;background-image: url('assets/img/cart.png');padding-left: 8px;margin-right: 300px;"></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">HOME</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="ABOUTUS.PHP">ABOUT US</a></li>
                <li class="dropdown nav-item" style="margin-left: 0px;margin-right: 50px;"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link" style="margin-right: 65px;">PRODUCTS</a>
                    <div role="menu" class="dropdown-menu"><a role="presentation" href="PTEES.php" class="dropdown-item">Tees</a><a role="presentation" href="PHATS.php" class="dropdown-item">Hats</a></div>
                </li>
            </ul><a href="LOGIN.php" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="SIGNUP.php">Sign Up</a></div>
    </div>
    </nav>
</header>    


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css" />

<div style="padding-top: 5px;">
    <div class="d-inline-block swiper-container" style="width: 500px;height: 500px;margin-left: 5px;">
        <div class="swiper-wrapper" style="height: 1000px;">
            <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/1slide1.jpg" class="d-inline-block float-left" style="width: 500px;" /></div>
            <div class="swiper-slide" style="background-image: url('FB_IMG_1552958342682.jpg');"><img src="assets/img/1slide2.jpg" style="width: 500px;" /></div>
            <div class="swiper-slide" style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/1slide3.jpg" style="width: 500px;" /></div>
            <div class="swiper-slide" style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/1slide4.jpg" style="width: 500px;" /></div>
            <div class="swiper-slide" style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/1slide5.jpg" style="width: 500px;" /></div>
            <div class="swiper-slide" style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/1slide6.jpg" style="width: 500px;" /></div>
            <div class="swiper-slide" style="background-image: url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/1slide7.jpg" style="width: 500px;" /></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
    <div class="d-inline-block swiper-container" style="width: 835px;height: 500px;">
        <div class="swiper-wrapper">
            <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/2slide1.jpg" style="width: 840px;" /></div>
            <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/2slide2.jpg" style="width: 840px;" /></div>
            <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/2slide3.jpg" style="width: 840px;" /></div>
            <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/2slide4.jpg" style="width: 840px;" /></div>
            <div class="swiper-slide" style="background-image:url(https://placeholdit.imgix.net/~text?txtsize=68&amp;txt=Slideshow+Image&amp;w=1920&amp;h=500);"><img src="assets/img/2slide5.jpg" style="width: 840px;" /></div>
        </div>
        <div class="swiper-pagination"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </div>
</div>


<section class="text-center" style="margin-right: -15px;margin-left: -15px;padding-top: 50px;">
    <h1 style="margin-bottom: 30px;">New This Month</h1>
    <div class="row" style="margin-right: 100px;margin-left: 100px;background-color: #ffffff;color: #000000;font-size: 15px;margin-bottom: 100px;">
        <div class="col">
            <div class="table-responsive" style="padding-top: 25px;">
                <table class="table">
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 400px;"><center><img src="assets/img/Paraiso.jpg" style="width: 300px;height: 300px;"/></center>PARAISO / PARADISE</td>
                            <td style="width: 400px;"><center><img src="assets/img/Brave.jpg" style="width: 300px;"/></center></td>
                            <td style="width: 400px;"><center><img src="assets/img/Marahuyo.jpg" style="width: 300px;height: 300px;"/></center></td>
                        </tr>
                        <tr>
                            <td style="color: black"><center>PARAISO / PARADISE<center></td>
                            <td style="color: black"><center>MAGITING BRAVE</center></td>
                            <td style="color: black"><center>MARAHUYO / ENCHANTED<center></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>


<div class="footer-dark" style="padding-top: 40px;padding-bottom: 30px;background-color: #000000;">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 text-left item">
                    <h3>CUSTOMER SERVICE</h3>
                    <ul>
                        <li><a href="#">FAQ<br /></a></li>
                        <li><a href="#">Size Guide<br /></a></li>
                        <li><a href="#">Contact Us<br /></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 text-left item">
                    <h3>ABOUT US</h3>
                    <ul>
                        <li><a href="AboutUs.html">Mission Vision</a></li>
                        <li><a href="AboutUs.html">Owners</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-6 text-left item text">
                    <h3>MAGITING PH</h3>
                    <p>A Baybayin movement that aims to parttake in the co-creation <br />of a generation of Active Participation and Appreciation for the <br />Filipino Identity.<br /><br /></p>
                </div>
                <div class="col item social"><a href="https://www.facebook.com/MagitingPH" target="_blank"><img src="assets/img/icofb.png" style="width: 30px">
                <i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/Magitingph" target="_blank"><img src="assets/img/icotwit.png" style="width: 30px">
                <i class="icon ion-social-twitter"></i></a><a href="https://www.instagram.com/magitingph" target="_blank"><img src="assets/img/icoig.png" style="width: 30px">
                <i class="icon ion-social-instagram"></i></a></div>
            </div><img src="assets/img/logowhite.png" class="d-flex d-xl-flex justify-content-center mx-auto justify-content-xl-center" style="width: 50px;padding-top: 30px;" />
            <p class="copyright" style="padding-top: 10px;">Magiting PH © 2017</p>
        </div>
    </footer>
</div>

<script>
$(function(){
var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
});

});
</script>

</body>

</html>