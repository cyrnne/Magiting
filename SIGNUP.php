<html>

<head>
        <link rel="shortcut icon" href="assets/img/logowhite.png" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Magiting | Sign Up</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/STYLES.css">

        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="js/saveSignup.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body style="color: rgb(255,255,255);">
    <header class="home-header" style="margin-top: -10px;margin-bottom: -10px;"><img class="d-block float-left" src="assets/img/HEADERS/signup header.jpg" style="width: 100%;" /></header>
    <nav class="navbar navbar-light navbar-expand-lg bg-white" id="mainNav" style="background-color: #ffffff; padding-left: 1in;">
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

        <div class="register-photo" style="background-color: rgba(0,0,0,0.1);">

        <div class="form-container" style="background-image: url('assets/img/cover.jpg');">
            <form id="myform" name="myform" onsubmit="return false">

                    <img src="assets/img/cover.jpg" height="500px" width="350px" class="img-responsive" style = "margin-bottom: 0.7cm;">
               
                <div class="col-md-6" style="float: right;">
                <form method="post">
                    <h4 class="text-center newcustomer-heading" style="margin-top: -15px;margin-bottom: 20px;">NEW CUSTOMER</h4>
                    <div class="text-center illustration"><img src="assets/img/signup.png" alt="test" style="width: 128px;margin-bottom: 25px;" /></div>
                    <div class="form-group"><input type="text" id="username" placeholder="Username" class="form-control" /></div>
                    <div class="form-group"><input type="password" id="password" placeholder="Password" class="form-control" /></div>
                    <div class="form-group"><input type="password" id="password-repeat" placeholder="Repeat password" class="form-control" /></div>

                    <div class="form-group">
                        <div class="form-check"><label class="form-check-label">By clicking "Sign Up", you agree to <a href="#" style = "color: brown;" data-toggle="modal" data-target="#myModal">MAGITING PH Terms & Conditions.</a></label></div>

                <!--LICENSE TERMS MODAL-->
                <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                        <div class="modal-content">
                <!-- Modal Header -->

                    <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Terms & Conditions</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                <!-- Modal body -->
                    <div class="modal-body" style="color: black;">
                    <p style="color: black; text-align: justify; padding: 30px;"> 
                    Welcome to Magiting PH! <br><br>
                    These terms and conditions outline the rules and regulations for the use of Magiting PH Website. <br><br>
                    The Magiting Ph is an online shopping website which allows customers to directly buy items from the 
                    seller over the Internet using a web browser.
                    </p>
                    
                        </div>
                        </div>
                        </div>
                        </div>
                    
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="action" id="signup">Sign Up</button></div><a href="LOGIN.php" class="already">You already have an account? Login here.</a>
                </form>
                </div>
        </div>
        </div>

    <!--FOOTER-->
<div class="footer-dark" style="padding-top: 40px;padding-bottom: 30px;background-color: #000000;">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 text-left item">
                    <h3>CUSTOMER SERVICE</h3>
                    <ul>

                        <li><a href="#" data-toggle="modal" data-target="#myModalsize">Size Guide<br /></a></li>
                        <!--SIZE GUIDE MODAL-->
                        <!-- The Modal -->
                        <div class="modal" id="myModalsize">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->

                        <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Size Guide</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                        <!-- Modal body -->
                        <div class="sizemodal-body" style="color: black;">
                        <p style="color: black; text-align: justify;"> 
                        <center><img class="size-guide" src="assets/img/size chart.jpg" style="width: 400px;"/></center>
                        </p>
                    
                        </div>
                        </div>
                        </div>
                        </div>


                        <li><a href="#" data-toggle="modal" data-target="#myModalchart">Color Chart<br /></a></li>
                        <!--COLOR CHART MODAL-->
                        <!-- The Modal -->
                        <div class="modal" id="myModalchart">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->

                        <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Color Chart</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                        <!-- Modal body -->
                        <div class="chartmodal-body" style="color: black;">
                        <p style="color: black; text-align: justify;"> 
                        <center><img class="chart-guide" src="assets/img/color.jpg" style="width: 400px;"/></center>
                        </p>
                    
                        </div>
                        </div>
                        </div>
                        </div>

                        <li><a href="#" data-toggle="modal" data-target="#myModalcontact">Contact Us<br /></a></li>
                        <!--CONTACT MODAL-->
                        <!-- The Modal -->
                        <div class="modal" id="myModalcontact">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->

                        <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Contact Us</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                        <!-- Modal body -->
                        <div class="contactmodal-body" style="color: black; font-family: century gothic; margin-top:80px; font-size:15px;">
                        <div class="row text-center m-auto icon-features" style="width: 380px;">
                            <div class="col-4 icon-feature"><i class="fa fa-map-marker"></i>
                            <p><b>Location</b></p>
                            <p>Bazaars are To Be Announced</p>
                            </div>
                            <div class="col-4 icon-feature"><i class="fa fa-phone"></i>
                            <p><b>Call Us</b></p>
                            <p>+63 956 153 8775<br /></p>
                            </div>
                            <div class="col-4 icon-feature"><i class="fa fa-envelope"></i>
                            <p><b>Email Us</b></p>
                            <p>magitingph @gmail.com<br /></p>
                        </div>
                        </div>
                    
                        </div>
                        </div>
                        </div>
                        </div>
                 
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
                <div class="col item social"><p style="color: grey; padding-bottom: 5px;">CHECK US OUT ON<br></p><a href="https://www.facebook.com/MagitingPH" target="_blank"><img src="assets/img/icofb.png" style="width: 30px">
                <i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/Magitingph" target="_blank"><img src="assets/img/icotwit.png" style="width: 30px">
                <i class="icon ion-social-twitter"></i></a><a href="https://www.instagram.com/magitingph" target="_blank"><img src="assets/img/icoig.png" style="width: 30px">
                <i class="icon ion-social-instagram"></i></a></div>
            </div><img src="assets/img/logowhite.png" class="d-flex d-xl-flex justify-content-center mx-auto justify-content-xl-center" style="width: 50px;padding-top: 30px;" />
            <p class="copyright" style="padding-top: 10px;">Magiting PH © 2017</p>
        </div>
    </footer>
</div>

    </body>

</html>