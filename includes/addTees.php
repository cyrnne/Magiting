<?php
 try {

                  include('includes/indexdb.php');

                  $prodName = $_POST['prodName'];
       
                  $conn = new mysqli($servername, $username, $password, $dbname);
         

        
                 $sql = "INSERT INTO tblproducts (prodID,prodName ,prodDesc, prodPrice, prodStk, prodCat, prodImg) VALUES ('1', 'sample name' ,'sample description','100','1','Tees','products/blankTshirt.png')";
      

          

                  if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                    
                    echo "Product Added";
                     
                  }

                  else{
                       
                    echo "<script>alert('Product not added')</script>";
                       
                      }



          }//catch exception
        catch(Exception $e) {
      
        echo 'Message: ' .$e->getMessage();
                  
        }
?>