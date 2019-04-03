<?php
include('includes/session.php');
?>

<html>

<head>
    <link rel="shortcut icon" href="assets/img/logowhite.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Magiting | Tees</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/STYLES.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body style="color: rgb(255,255,255);">
<header class="home-header" style="margin-top: -10px;margin-bottom: -10px;"><img class="d-block float-left" src="assets/img/HEADERS/prod header.jpg" style="width: 100%;" /></header>
    <nav class="navbar navbar-light navbar-expand-lg bg-white" id="mainNav" style="background-color: #ffffff;">
    <div class="container-fluid"><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mx-auto" style="margin: 0px;padding: 0px;">

                <li role="presentation" class="nav-item" style="display: <?php echo $cartView; ?>;"><a href="#" class="nav-link cart" style="width: 35px;height: 35px;margin: 0px;background-image: url('assets/img/cart.png');padding-left: 8px;margin-right: 300px;" data-toggle="modal" data-target="#myModal"></a></li>
                <!--CART MODAL-->
                <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                        <div class="modal-content">
      
                <!-- Modal Header -->

                    <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Cart</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                <!-- Modal body -->
                    <div class="modal-body" style="color: black;">
                    <div class="cart" ><img src="assets/img/TEES/Pagibig (Love).jpg" style="width: 250px;"/></div>
                    
                    
                    </div>
        
                <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>
                
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">HOME</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="ABOUTUS.PHP">ABOUT US</a></li>
                <li class="dropdown nav-item" style="margin-left: 0px;margin-right: 50px;"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link" style="margin-right: 65px;">PRODUCTS</a>
                    <div role="menu" class="dropdown-menu"><a role="presentation" href="PTEES.php" class="dropdown-item">Tees</a><a role="presentation" href="PHATS.php" class="dropdown-item">Hats</a></div>
                </li>
            </ul><?php echo $menuBar; ?></div>
    </div>
</nav>
        
<!-- CONTENT-->
<section class="page-section about-heading">
    <div class="about-heading-content">
        <div class="row">
            <div class="col-9 text-center mx-auto" style="background-color: #ffffff;color: rgb(0,0,0);opacity: 1;margin-top: 50px;margin-bottom: 50px;">
                <h1 class="prod-heading" style="margin-top: 25px;margin-bottom: 25px;">TEES</h1>
                <div class="row product-list dev">
    <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
        <div class="product-container">
            <div class="row">
                <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/TEES/Laban (Fight).jpg" /></a></div>
            </div>
            <div class="row">
                <div class="col text-center" style="height: 30px; font-size: 20px; font-family: sans-serif; font-weight: bolder; color: black;">Laban (Fight)</div>
                <div class="col-12">
                    <p class="product-description" style="height: 60px;"><br />A violent confrontation or struggle.<br /><br /></p>
                    <input type="number" min="1" max="10" name="quantity" placeholder="Qty:" id="qty" class="text-center product-quantity" style="width: 60px;height: 30px;" />
                    <p class="text-center product-stocks"style="padding-bottom: 15px;"><br>Only 4 stocks left</p>
                    <div class="row">
                        <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                        <div class="col-6">
                            <p class="product-price">₱299<br /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-clockwise">
        <div class="product-container">
            <div class="row">
                <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/TEES/Liwliwa (Inspiration).jpg" /></a></div>
                <div class="col text-center" style="height: 30px; font-size: 20px; font-family: sans-serif; font-weight: bolder; color: black;">Liwliwa (Inspiration)</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="product-description" style="height: 60px;margin-bottom: 20px;"><br />Inspiration is a feeling of enthusiasm you get from someone or something<br /><br /></p>
                    <input type="number" min="1" max="10" name="quantity" placeholder="Qty:" id="qty" class="text-center product-quantity" style="width: 60px;height: 30px;" />
                    <p class="text-center product-stocks"style="padding-bottom: 15px;"><br>Only 4 stocks left</p>
                    <div class="row">
                        <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                        <div class="col">
                            <p class="product-price">₱299<br /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 product-item animation-element slide-top-right">
        <div class="product-container">
            <div class="row">
                <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/TEES/Malaya (Free).jpg" /></a></div>
                <div class="col text-center" style="height: 30px; font-size: 20px; font-family: sans-serif; font-weight: bolder; color: black;">Malaya (Free)</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="product-description" style="height: 60px;"><br />Not under the control or in the power of another.<br /><br /></p>
                    <input type="number" min="1" max="10" name="quantity" placeholder="Qty:" id="qty" class="text-center product-quantity" style="width: 60px;height: 30px;" />
                    <p class="text-center product-stocks"style="padding-bottom: 15px;"><br>Only 4 stocks left</p>
                    <div class="row">
                        <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                        <div class="col">
                            <p class="product-price">₱299<br /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row product-list dev">
    <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
        <div class="product-container">
            <div class="row">
                <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/TEES/Alpas (To Break Free).png" /></a></div>
            </div>
            <div class="row">
            <div class="col text-center" style="height: 30px; font-size: 20px; font-family: sans-serif; font-weight: bolder; color: black;">Alpas (To break free)</div>
                <div class="col-12">
                    <p class="product-description" style="height: 60px;"><br />A violent confrontation or struggle.<br /><br /></p>
                    <input type="number" min="1" max="10" name="quantity" placeholder="Qty:" id="qty" class="text-center product-quantity" style="width: 60px;height: 30px;" />
                    <p class="text-center product-stocks"style="padding-bottom: 15px;"><br>Only 4 stocks left</p>
                    <div class="row">
                        <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                        <div class="col-6">
                            <p class="product-price">₱299<br /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 product-item animation-element slide-rotate-clockwise">
        <div class="product-container">
            <div class="row">
                <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/TEES/Kapayapaan (Peace).jpg" /></a></div>
                <div class="col text-center" style="height: 30px; font-size: 20px; font-family: sans-serif; font-weight: bolder; color: black;">Kapayapaan (Peace)</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="product-description" style="height: 60px;margin-bottom: 20px;"><br />A state or period in which there is no war or a war has ended.<br /><br /></p>
                    <input type="number" min="1" max="10" name="quantity" placeholder="Qty:" id="qty" class="text-center product-quantity" style="width: 60px;height: 30px;" />
                    <p class="text-center product-stocks"style="padding-bottom: 15px;"><br>Only 4 stocks left</p>
                    <div class="row">
                        <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                        <div class="col">
                            <p class="product-price">₱299<br /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-4 product-item animation-element slide-top-right">
        <div class="product-container">
            <div class="row">
                <div class="col-md-12"><a href="#" class="product-image"><img src="assets/img/TEES/Pagibig (Love).jpg" /></a></div>
                <div class="col text-center" style="height: 30px; font-size: 20px; font-family: sans-serif; font-weight: bolder; color: black;">Pag-ibig (Love)</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="product-description" style="height: 60px;"><br />A great interest and pleasure in something.<br /><br /></p>
                    <input type="number" min="1" max="10" name="quantity" placeholder="Qty:" id="qty" class="text-center product-quantity" style="width: 60px;height: 30px;" />
                    <p class="text-center product-stocks"style="padding-bottom: 15px;"><br>Only 4 stocks left</p>
                    <div class="row">
                        <div class="col-6"><button class="btn btn-light" type="button">Buy Now!</button></div>
                        <div class="col">
                            <p class="product-price">₱299<br /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--FOOTER-->
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

<script>
    var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
</script>

    </body>

</html>