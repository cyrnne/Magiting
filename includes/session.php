<?php

session_start();

include('indexdb.php');
error_reporting(E_ALL ^ E_NOTICE);


$user_check = $_SESSION['login_user'];
$userStat = $_SESSION['login_userStat'];


//output data of each rlow

if(!isset($_SESSION['login_user'])){
   
    $menuBar = "

    </ul><a href='LOGIN.php' class='login'>Log In</a><a class='btn btn-light action-button' role='button' href='SIGNUP.php'>Sign Up</a></div>

   	";

   	$cartView = "none";

   	$buyNowButton = "<button class='btn btn-light' type='button' onclick='getProdId(this.id,this.name)' id='<?php echo $idofProd; ?>' name='<?php echo $ctr;?>' disabled  >Buy Now!</button>";
}
else{
	$menuBar = "

    </ul><span style='color: black;'>Welcome, ". $user_check ."</span><&nbsp><a class='btn btn-light action-button' role='button' href='includes/logout.php'>Logout</a></div>

   	";

   	$cartView = "inline-block";


   		$buyNowButton = "<button class='btn btn-light' type='button' onclick='getProdId(this.id,this.name)' id='<?php echo $idofProd; ?>' name='<?php echo $ctr;?>' >Buy Now!</button>";
}

?>