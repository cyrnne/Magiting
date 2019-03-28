<?php

include("../includes/indexdb.php");


    try {
       
                 

        $user = $_POST['username1'];
        $password = $_POST["password1"];
        $encryptedPass = md5($password);
        $role = "user";


       
         
        
             $sql = "INSERT INTO tbllogin (username, password, role) VALUES ('$user', '$encryptedPass','$role')";
      

          

                  if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                      
                    echo "Success";
                     
                  }

                  else{
                       
                    echo "Failed";
                       
                      }



          }//catch exception
        catch(Exception $e) {
      
        echo 'Message: ' .$e->getMessage();
                  
        }

    
   
   

   


  
?>

