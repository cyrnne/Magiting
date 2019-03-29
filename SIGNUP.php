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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="ABOUTUS.php">ABOUT US</a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">PRODUCTS</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="PTees.php">Tees</a><a class="dropdown-item" role="presentation" href="PHats.php">Hats</a><a class="dropdown-item" role="presentation" href="PStick.php">Stickers</a></div>
                    </li>
                    </ul><a href="LOGIN.php" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="SignUp.php">Sign Up</a></div>
        </div>
        </nav>
        <div class="register-photo" style="background-color: rgba(0,0,0,0.1);">

        <div class="form-container" style="background-image: url('assets/img/cover.jpg');">
            <form id="myform" name="myform" onsubmit="return false">

                    <img src="assets/img/cover.jpg" height="500px" width="350px" class="img-responsive" >
               
                <div class="col-md-6" style="float: right;">
                <form method="post">
                    <h4 class="text-center newcustomer-heading" style="margin-top: -15px;margin-bottom: 20px;">NEW CUSTOMER</h4>
                    <div class="text-center illustration"><img src="assets/img/signup.png" alt="test" style="width: 128px;margin-bottom: 25px;" /></div>
                    <div class="form-group"><input type="text" id="username" placeholder="Username" class="form-control" /></div>
                    <div class="form-group"><input type="password" id="password" placeholder="Password" class="form-control" /></div>
                    <div class="form-group"><input type="password" id="password-repeat" placeholder="Repeat password" class="form-control" /></div>
                    <div class="form-group">
                        <div class="form-check"><label class="form-check-label"><input type="checkbox" class="form-check-input" />I agree to the license terms.</label></div>
                    </div>
                    <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="action" id="signup">Sign Up</button></div><a href="LOGIN.php" class="already">You already have an account? Login here.</a>
                </form>
                </div>
        </div>
        </div>
    </body>

</html>