<?php


 include('includes/indexdb.php');

 		$prodID = $_POST['prodName'];
		$prodName = $_POST['prodName'];
        $prodDesc = $_POST['prodDesc'];
        $prodPrice = $_POST['prodPrice'];
        $prodStk = $_POST['prodStk'];


                      
 $sql = "UPDATE tblproducts SET prodName='$prodName',prodDesc='$prodDesc',prodPrice='$prodPrice',prodStk='$prodStk' WHERE prodID='$prodID'"; 
        
  if($conn->query($sql) === TRUE) {
        
        	echo "<script>alert('Item Updated')</script>";
    }
    else{
            echo "<script>alert('Item not Updated')</script>";
    }
                      
?>