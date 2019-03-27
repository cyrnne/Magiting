<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "evaluationdb";

//create connection
$conn = mysqli($servername, $username, $password, $dbname);

//check connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

?>