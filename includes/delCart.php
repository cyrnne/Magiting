

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
       
                  

                $transID = rand(1000,10000);
                $userid = $_SESSION['login_user'];
                $name = $_GET['name'];
                $address = $_GET['address'];
                $totalAmount = total();
              


                $conn = new mysqli($servername, $username, $password, $dbname);

                $sql = "INSERT INTO tbltransactions (transactionId,userId, totalAmount, customerName, customerAddress) VALUES ('$transID','$userid', '$totalAmount' ,'$name','$address')";

              

                     // $sql = "DELETE from tblcart where userId like '".$userid."'";
                        if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                                  $sql = "SELECT * FROM tblcart where userId like '".$_SESSION['login_user']."'";
                                   $result = $conn->query($sql);
       
                                    if ($result->num_rows > 0) {
                                     // output data of each r1ow
    
                              
  
                                     while($row = $result->fetch_assoc()) {

                                      $idprod = $row['prodID'];
                                      $prodname = $row['prodName'];
                                      $sizeprod = $row['prodSize'];
                                      $colorprod = $row['prodColor'];
                                      $priceprod = $row['prodPrice'];
                                    
                                       $sql = "INSERT INTO tblTransProd (transactionId, prodID, prodName, prodColor, prodSize, prodPrice) VALUES ('$transID' ,'$idprod' ,'$prodname','$sizeprod','$colorprod','$priceprod')";

                                       if($conn->query($sql) === TRUE){
                                      
                                       }else{
                                        echo "error";
                                       }
        
           
                                    }
                        
                               $sql = "DELETE from tblcart where userId like '".$userid."'";
                               if($conn->query($sql) === TRUE) {
                                   echo "Order Succesful";
                               }
                               else{
                                echo "Order Failed";
                               }

                           
                     
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

