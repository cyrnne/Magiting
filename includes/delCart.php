

<?php

include("../includes/indexdb.php");
include("../includes/session.php");

        
    try {
       
                  

                  $userid = $_SESSION['login_user'];
              


                $conn = new mysqli($servername, $username, $password, $dbname);
         
        
                 $sql = "DELETE from tblcart where userId like '".$userid."'";
      

          

                  if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                      
                    echo "Order Successful";
                     
                  }

                  else{
                       
                    echo "Order Failed";
                       
                      }



          }//catch exception
        catch(Exception $e) {
      
        echo 'Message: ' .$e->getMessage();
                  
        }

    
   
  

   


  
?>

