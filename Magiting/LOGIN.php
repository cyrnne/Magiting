<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    if ($_POST['action'] == 'Login') {
        
       
           loginCheck();
        
    
    }
    
}

 function loginCheck(){
  $verify = "";
    include("includes/indexdb.php");
      
      $getid = $_POST["username"];
      $getpass = $_POST["pass"];
    

      $encryptedPass = md5($getpass);


   
      $conn = new mysqli($servername, $username, $password, $dbname);
      $sql = "SELECT * FROM tbllogin where username like '".$getid."' and password like '".$encryptedPass."'";
      $result = $conn->query($sql);
       
     if ($result->num_rows > 0) {
    // output data of each r1ow
    
    
  
        while($row = $result->fetch_assoc()) {
              $role = $row["role"]; 
        
             if($role == "user"){
                  

                       $_SESSION['login_user'] = $getid;
                       $_SESSION['login_userStat'] = $role;
                       $_SESSION['login_pass'] = $encryptedPass;
                       
                       header("location: index.php");
           
                          }else {
               
                       $_SESSION['login_user'] = $getid;
                       $_SESSION['login_userStat'] = $role;
                       $_SESSION['login_pass'] = $encryptedPass;
                       
                         header("location: admin.php");          
             
                    
                    }
    }  

}else{
    echo "<script>alert('Wrong Password')</script>";
}

    
     
        
                    
}
        
   

?>

<html>

<head>
    <link rel="shortcut icon" href="assets/img/logowhite.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Magiting | Login</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/STYLES.css">

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
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#">ABOUT US</a></li>
                    <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">PRODUCTS</a>
                        <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="PTees.php">Tees</a><a class="dropdown-item" role="presentation" href="PHats.php">Hats</a><a class="dropdown-item" role="presentation" href="PStick.php">Stickers</a></div>
                    </li>
                    </ul><a href="LOGIN.php" class="login">Log In</a><a class="btn btn-light action-button" role="button" href="SIGNUP.php">Sign Up</a></div>
        </div>
        </nav>
        <div class="login-clean" style="background-color: rgba(0,0,0,0.1);">
             <form class="login100-form validate-form" method="post" class="well">
                <h2 class="sr-only">Login Form</h2>
                <h4 class="text-center login-heading" style="margin-top: -15px;margin-bottom: 15px;">RETURNING CUSTOMER</h4>
                <div class="illustration"><img src="assets/img/login.png" alt="test" style="margin-bottom: 8px;" /></div>
                <div class="form-group"><input type="text" id="username" name="username" placeholder="Email" class="form-control" /></div>
                <div class="form-group"><input type="password" id="pass" name="pass" placeholder="Password" class="form-control" /></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit" name="action" id="but" value="Login" style="background-color: #000000;">Log In</button></div><a href="#" class="forgot">Forgot your email or password?</a>
            </form>
        </div>
    </body>

</html>