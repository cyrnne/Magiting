

<?php

include("../includes/indexdb.php");
include("../includes/session.php");

include "../PTEES.php";
        
    try {
       
                   $prodID = $_GET['q'];
                   $prodColor = $_GET['prodColor'];
                   $prodSize = $_GET['prodSize'];
                   $prodQty = $_GET['prodQty'];

                   $prodIndexCtr = $_GET['indexNum'];

                    $totalPrice = $prodPriceArr[$prodIndexCtr] * $prodQty;

                  $userid = $_SESSION['login_user'];
              


                $conn = new mysqli($servername, $username, $password, $dbname);
         
        
                 $sql = "INSERT INTO tblcart (prodID, userId, prodName, prodQty, prodSize, prodColor, prodPrice) VALUES ('$prodID', '$userid','$prodNameArr[$prodIndexCtr]', '$prodQty','$prodSize','$prodColor','$totalPrice')";
      

          

                  if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                      
                    echo "Item Added";
                     
                  }

                  else{
                       
                    echo "Item not Added";
                       
                      }



          }//catch exception
        catch(Exception $e) {
      
        echo 'Message: ' .$e->getMessage();
                  
        }

    
   
  

   


  
?>

