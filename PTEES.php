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
<header class="home-header" style="margin-top: -10px;margin-bottom: -10px;"><img class="d-block float-left" src="assets/img/prod header.jpg" style="width: 100%;" /></header>
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
        
        <section class="page-section about-heading">
    <div class="about-heading-content">
        <div class="row">
            <div class="col-9 text-center mx-auto" style="background-color: #ffffff;color: rgb(0,0,0);opacity: 1;height: 2000px;margin-top: 50px;margin-bottom: 50px;">
                <h1 class="prod-heading" style="margin-top: 25px;margin-bottom: 25px;">TEES</h1>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>

                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>

                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>

                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>

                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>

                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>

                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>

                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>

                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal">Add to cart</button>
                                </div></div></div></div></div>
                                </td>

                                <td>
                                <div class="Pcontainer">
                                <img src="assets/img/sample.jpg" class="img-thumbnail" width="250" height="250" data-toggle="modal" data-target="#myModal">
                                <div class="modal fade" id="myModal" role="dialog" style ="color: black;">
                                <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                <h4 class="modal-title">Name of Product</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                </div>
                                <div class="modal-body">
                                <img src="assets/img/sample.jpg" class="img" width="250" height="250" style = "padding-bottom: 1rem;">
                                <p>Digmaan (War) <br> a state of armed conflict between different nations or states or different groups within a nation or state.</p>
                                <p class="modal-price" style="color: red; font-size: 16px;">Php 350.00</p>
                                <p class="modal-stock" style="color: grey; font-size: 13px; font-family: arial narrow;">Only 4 stocks left.</p>
                                <p class="modal-quantity"style="font-family: arial narrow;">Quantity: &nbsp; 
                                    <input type="number" id="qty" name="quantity" min="1" max="4"> </p>
                                </div>
                                <div class="modal-footer">    
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: gray;">Add to cart</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Buy now</button>
                                </div></div></div></div></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
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