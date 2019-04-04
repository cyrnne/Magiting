<?php
 try {

                  include('includes/indexdb.php');

                  $prodID = rand(500,10000);
                  $prodName = $_POST['prodName'];
                  $prodDesc = $_POST['prodDesc'];
                  $prodPrice = $_POST['prodPrice'];
                  $prodStk = $_POST['prodStk'];
         

        
                 $sql = "INSERT INTO tblproducts (prodID,prodName ,prodDesc, prodPrice, prodStk, prodCat, prodImg) VALUES ('$prodID', '$prodName' ,'$prodDesc','$prodPrice','$prodStk','Tees','products/blankTshirt.png')";
      

          

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