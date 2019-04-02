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
<header class="home-header" style="margin-top: -10px;margin-bottom: -10px;"><img class="d-block float-left" src="assets/img/home header.png" style="width: 100%;" /></header>
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

<div class="d-inline-block" style="width: 1400px;height: 500px; margin-top: 5px;">
    <div class="d-inline-block mx-auto carousel slide" id="Div_Promo_Carousel" data-ride="carousel" style="width: 500px;height: 500px;">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img src="assets/img/1slide1.jpg" style="width: 500px;" /></div>
            <div class="carousel-item"><img src="assets/img/1slide2.jpg" style="width: 500px;height: 500px;" /></div>
            <div class="carousel-item"><img src="assets/img/1slide3.jpg" style="width: 500px;height: 500px;" /></div>
            <div class="carousel-item"><img src="assets/img/1slide4.jpg" style="width: 500px;height: 500px;" /></div>
            <div class="carousel-item"><img src="assets/img/1slide5.jpg" style="width: 500px;height: 500px;" /></div>
            <div class="carousel-item"><img src="assets/img/1slide6.jpg" style="width: 500px;height: 500px;" /></div>
            <div class="carousel-item"><img src="assets/img/1slide7.jpg" style="width: 500px;height: 500px;" /></div>
        </div>
        <div><a href="#Div_Promo_Carousel" class="carousel-control-prev" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Prev </span></a><a href="#Div_Promo_Carousel" class="carousel-control-next"
                role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next </span></a></div>
        <ul class="carousel-indicators" role>
            <li class="active" data-slide-to="0" data-target="#Div_Promo_Carousel">Item 1</li>
            <li data-slide-to="1" data-target="#Div_Promo_Carousel">Item 1</li>
            <li data-slide-to="2" data-target="#Div_Promo_Carousel">Item 1</li>
        </ul>
    </div>
    <div data-ride="carousel" class="carousel slide d-inline-block" id="carousel-1" style="width: 843px;height: 500px;">
        <div role="listbox" class="carousel-inner">
    <div class="carousel-item active"><img src="assets/img/2slide1.jpg" alt="Slide Image" class="w-100 d-block" style="width: 839px;height: 500px;"/></div>
            <div class="carousel-item"><img src="assets/img/2slide2.jpg" alt="Slide Image" class="w-100 d-block" style="width: 839px;height: 500px;"/></div>
            <div class="carousel-item"><img src="assets/img/2slide3.jpg" alt="Slide Image" class="w-100 d-block" style="width: 839px;height: 500px;"/></div>
            <div class="carousel-item"><img src="assets/img/2slide4.jpg" alt="Slide Image" class="w-100 d-block" style="width: 839px;height: 500px;" /></div>
            <div class="carousel-item"><img src="assets/img/2slide5.jpg" alt="Slide Image" class="w-100 d-block" style="width: 839px;height: 500px;"/></div>
        </div>
        <div><a href="#carousel-1" role="button" data-slide="prev" class="carousel-control-prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a href="#carousel-1" role="button" data-slide="next" class="carousel-control-next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
            <li data-target="#carousel-1" data-slide-to="4"></li>
            </ol>
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
                        <li><a href="ABOUTUS.php">Mission Vision</a></li>
                        <li><a href="ABOUTUS.php">Owners</a></li>
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