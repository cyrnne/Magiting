<?php

session_start();
include('indexDV.php')
error_reporting(E_ALL ^ E_NOTICE);

$user_check = $_SESSION['login_user'];
$userStat = $_SESSION['login_userStat'];

$conn = new mysqli($servername, $username, $password, $dbname);
$sql = "SELECT *FROM login_table where emp_id = '$user_check' ";
$result = $conn->query($sql);

if($result->num_rows > 0){

    $login_session = $row['emp_id'];
}

//output data of each rlow

if(!isset($_SESSION[login_user])){
    echo "<script>alert('Please Login');document.location='index.php'</script>";
}

?>