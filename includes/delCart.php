

<?php

include("../includes/indexdb.php");
include("../includes/session.php");

function total(){
  include("../includes/indexdb.php");
include("../includes/session.php");

  $totalPrice = 0;

      $conn = new mysqli($servername, $username, $password, $dbname);

      $sql = "SELECT sum(prodPrice) as total FROM tblcart where userId like '".$_SESSION['login_user']."'";
      $result = $conn->query($sql);
       
     if ($result->num_rows > 0) {
    // output data of each r1ow
    
    
  
        while($row = $result->fetch_assoc()) {
              $totalPrice = $row["total"]; 
        
           
    }

    return $totalPrice;
}
}
        
    try {
       
                  

                $userid = $_SESSION['login_user'];
                $name = $_GET['name'];
                $address = $_GET['address'];
                $totalAmount = total();
              


                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "INSERT INTO tbltransactions (userId, totalAmount, customerName, customerAddress) VALUES ('$userid', '$totalAmount' ,'$name','$address')";

                  if($conn->query($sql) === TRUE) {

                      $sql = "DELETE from tblcart where userId like '".$userid."'";
      

          

                  if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                      
                    echo "Order Successful";
                     
                  }

                  else{
                       
                    echo "Order Failed";
                       
                      }

                  }
                  else{

                  }
         
        
               



          }//catch exception
        catch(Exception $e) {
      
        echo 'Message: ' .$e->getMessage();
                  
        }

    
   
  

   


  
?>

