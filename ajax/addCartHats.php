

<?php

include("../includes/indexdb.php");
include("../includes/session.php");

include "../PHATS.php";



        
    try {
       
                   $prodID = $_GET['q'];
                   $prodColor = $_GET['prodColor'];
                   $prodSize = 'Universal Fit';
                   $prodQty = $_GET['prodQty'];
                   $prodIndexCtr = $_GET['indexNum'];

                   $totalPrice = $prodPriceArr[$prodIndexCtr] * $prodQty;

                  $userid = $_SESSION['login_user'];

                   $currentStk = getStk($prodID);
                   $remainingStk = $currentStk - $prodQty;
              


                $conn = new mysqli($servername, $username, $password, $dbname);
         
        
                 $sql = "INSERT INTO tblcart (prodID, userId, prodName, prodQty, prodSize, prodColor,prodPrice) VALUES ('$prodID', '$userid','$prodNameArr[$prodIndexCtr]', '$prodQty','$prodSize','$prodColor','$totalPrice')";
      

          

                  if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                       $sql = "UPDATE tblproducts SET prodStk='$remainingStk' WHERE prodID='$prodID'"; 
                       
                   if($conn->query($sql) === TRUE) {
                          
                            echo "Item Added";
                     }
                     else{

                     }
                     
                  }

                  else{
                       
                    echo "Item not Added";
                       
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
  

   


  
?>

