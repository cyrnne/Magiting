

<?php

include("../includes/indexdb.php");
include("../includes/session.php");


        
    try {
       
                  

                $userid = $_SESSION['login_user'];
                $id = $_GET['q'];
                $currentStk = getStk($id);
                $cartQty = getCartItem($id);
                $remainingStk = $currentStk + $cartQty;


                $conn = new mysqli($servername, $username, $password, $dbname);

               

                      $sql = "DELETE from tblcart where userId like '".$userid."' and prodId like '".$id."'";
      

          
 
                       if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                       $sql = "UPDATE tblproducts SET prodStk='$remainingStk' WHERE prodID='$id'"; 

                        if($conn->query($sql) === TRUE) {
                            echo "Item Removed";
                        }
                        else{
                          echo "Item Qty not updated";
                        }

             
                     
                  }

                  else{
                       
                    echo "Item not Removed";
                       
                      }

                  
                  
         
        
               



          }//catch exception
        catch(Exception $e) {
      
        echo 'Message: ' .$e->getMessage();
                  
        }

    
   function getStk($id){

      include("../includes/indexdb.php");
      include("../includes/session.php");

      $stkCount = 0;

      $conn = new mysqli($servername, $username, $password, $dbname);

      $sql = "SELECT * FROM tblproducts where prodID like '".$id."'";
     
      $result = $conn->query($sql);
       
     if ($result->num_rows > 0) {
    // output data of each r1ow
    
    
  
        while($row = $result->fetch_assoc()) {
              $stkCount = $row["prodStk"]; 
        
        }  



    }

    return $stkCount;
}

 function getCartItem($cartid){

      include("../includes/indexdb.php");
      include("../includes/session.php");

      $cartQty = 0;

      $conn = new mysqli($servername, $username, $password, $dbname);

      $sql = "SELECT * FROM tblcart where prodID like '".$cartid."'";
     
      $result = $conn->query($sql);
       
     if ($result->num_rows > 0) {
    // output data of each r1ow
    
    
  
        while($row = $result->fetch_assoc()) {
              $cartQty = $row["prodQty"]; 
        
        }  



    }

    return $cartQty;
}
  

   


  
?>

