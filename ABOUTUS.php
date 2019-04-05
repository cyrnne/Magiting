<?php
include('includes/session.php');
?>

<html>

<head>
    <link rel="shortcut icon" href="assets/img/logowhite.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Magiting | About Us</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/STYLES.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body style="color: rgb(255,255,255);">
<header class="home-header" style="margin-top: -10px;margin-bottom: -10px;"><img class="d-block float-left" src="assets/img/HEADERS/aboutus header.jpg" style="width: 100%;" /></header>
    <nav class="navbar navbar-light navbar-expand-lg bg-white" id="mainNav" style="background-color: #ffffff;">
    <div class="container-fluid"><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mx-auto" style="margin: 0px;padding: 0px;">
                 <li role="presentation" class="nav-item" style="display: <?php echo $cartView; ?>;"><a href="#" class="nav-link cart" style="width: 35px;height: 35px;margin: 0px;background-image: url('assets/img/cart.png');padding-left: 8px;margin-right: 300px;"></a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">HOME</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="ABOUTUS.PHP">ABOUT US</a></li>
                <li class="dropdown nav-item" style="margin-left: 0px;margin-right: 50px;"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link" style="margin-right: 65px;">PRODUCTS</a>
                    <div role="menu" class="dropdown-menu"><a role="presentation" href="PTEES.php" class="dropdown-item">Tees</a><a role="presentation" href="PHATS.php" class="dropdown-item">Hats</a></div>
                </li>
            </ul><?php echo $menuBar; ?></div>
    </div>
</nav>

        <section class="page-section about-heading">
    <div class="about-heading-content">
        <div class="row">
            <div class="col-9 text-center mx-auto" style="background-color: #ffffff;color: rgb(0,0,0);opacity: 1;margin-top: 50px;margin-bottom: 50px;">
                <h1 class="prod-heading" style="margin-top: 25px;margin-bottom: 25px;">ABOUT US</h1>
                <p class="text-center"><br /><strong>Vision</strong><br /><br />Magiting Pilipinas, as a Baybayin movement, envisions a generation<br />that takes pride and actively participates in the Filipino culture as a<br />part of their modern lifestyle. Magiting Pilipinas
                    aims to be known as<br />the leading Baybaying Enterprise not only in the Philippines but also <br />to fellow Filipinos all over the world, within the first 3 years of Operations.<br /><br /><strong>Mission</strong><br /><br />Magiting
                    Pilipinas a Philippine-based movement that promotes the Filipino<br />identity, through creating a collaboration between its tradition and collaboration<br />customs visualized in the use of Baybayin (ancient Philippine alphabet) art.<br
                    />Magiting Pilipinas&#39; social responsibility to share the culture from the roots,<br />through the Art that is Baybayin, and to rally the youth and youth alike to<br />Actively participate in Culture as a part of Filipinos lifestyle,
                    beginning with the<br />Millennials who&#39;ve been captured by this beautiful art form. To forge a<br />generation of Active participation and appreciation for the Filipino identity.<br /><br /><br /><br /></p>
                <h1 class="prod-heading"
                    style="margin-top: 25px;margin-bottom: 25px;">OWNERS</h1>
                <section style="padding-top: 20px;padding-bottom: 50px;">
                <div class="owners">
                <div class="job"><img src="assets/img/OWNERS/job.jpg" class="rounded-circle img-fluid d-inline-block" style="width: 300px;height: 400px;margin-right: 0px;padding-right: 10px;padding-top: 10px;padding-bottom: 10px;padding-left: 10px;"/><h5><br>JOB ANGELO P. CORPUZ</h5></div>
                <div class="dana"><img src="assets/img/OWNERS/danaraye.jpg" class="rounded-circle img-fluid d-inline-block" style="width: 300px;height: 400px;padding-right: 10px;padding-left: 10px;padding-bottom: 10px;padding-top: 10px;" /><h5><br>DANARAYE C. TORRES</h5></div>
                </section> 
            </div>
            </div>
        </div>
    </div>

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

</section>
</body>

</html>