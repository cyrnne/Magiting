

<?php

include("../includes/indexdb.php");
include("../includes/session.php");


        
    try {
       
                  

                $userid = $_SESSION['login_user'];
                $id = $_GET['q'];
              


                $conn = new mysqli($servername, $username, $password, $dbname);

               

                      $sql = "DELETE from tblcart where userId like '".$userid."' and prodId like '".$id."'";
      

          

                  if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                      
                    echo "Item Removed";
                     
                  }

                  else{
                       
                    echo "Item not Removed";
                       
                      }

                  
                  
         
        
               



          }//catch exception
        catch(Exception $e) {
      
        echo 'Message: ' .$e->getMessage();
                  
        }

    
   
  

   


  
?>

