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
    <h1 class="home-heading" style="color: rgb(255,255,255);"><span class="text-center home-heading-upper" style="color: rgb(116,116,116);font-size: 30px;">A Baybayin Movement</span><span class="text-center home-heading-lower" style="font-size: 120px;">MAGITING</span></h1>
    <nav class="navbar navbar-light navbar-expand-lg bg-white"
        id="mainNav" style="background-color: #ffffff;">
        <div class="container-fluid"><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1"><a href="#" class="blank">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a><a href="#" class="blank">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a><a href="#" class="blank">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</a>
                <ul
                    class="nav navbar-nav mx-auto" style="margin: 0px;padding: 0px;">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">HOME</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="ABOUTUS.PHP">ABOUT US</a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">PRODUCTS</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="PTees.php">Tees</a><a class="dropdown-item" role="presentation" href="PHats.php">Hats</a><a class="dropdown-item" role="presentation" href="PStick.php">Stickers</a></div>
                    </li>
                    </ul><?php echo $menuBar; ?></div>
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
                                <button type="button" class="btn btn-default" data-dismiss="modal" style="background-color: blue;">Add to cart</button>
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
                                <button type="button" class="btn btn-default" data-dismiss="modal">Add to cart</button>
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
                                <button type="button" class="btn btn-default" data-dismiss="modal">Add to cart</button>
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
                                <button type="button" class="btn btn-default" data-dismiss="modal">Add to cart</button>
                                </div></div></div></div></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
    </body>

</html>