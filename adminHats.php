<?php
include('includes/session.php');

if($_REQUEST['action']=="Add")

{

    try {

                  include('includes/indexdb.php');

                  $prodID = rand(1000,10000);
                  $prodName = $_POST['prodName'];
                  $prodDesc = $_POST['prodDesc'];
                  $prodPrice = $_POST['prodPrice'];
                  $prodStk = $_POST['prodStk'];
                  $prodColor = $_POST['prodColor'];

       
            $sql = "INSERT INTO tblproducts (prodID, prodName ,prodDesc, prodPrice, prodStk, prodColor,prodCat, prodImg) VALUES ('$prodID','$prodName','$prodDesc','$prodPrice','$prodStk','$prodColor','Hats','products/blankHat.jpg')";
      

          

                  if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                    
                   echo "<script>alert('Product added')</script>";
                     
                  }

                  else{
                       
                    echo "<script>alert('Product not added')</script>";
                       
                      }



          }//catch exception
        catch(Exception $e) {
      
        echo 'Message: ' .$e->getMessage();
                  
        }

}
else if ($_REQUEST['action']=="Save"){

  include('includes/indexdb.php');

      $prodID = $_POST['prodID'];
      $prodName = $_POST['prodName'];
      $prodDesc = $_POST['prodDesc'];
      $prodPrice = $_POST['prodPrice'];
      $prodStk = $_POST['prodStk'];
      $prodColor = $_POST['prodColor'];


                      
 $sql = "UPDATE tblproducts SET prodName='$prodName',prodDesc='$prodDesc',prodPrice='$prodPrice',prodStk='$prodStk',prodColor='$prodColor' WHERE prodID='$prodID'"; 
        
  if($conn->query($sql) === TRUE) {
        
          echo "<script>alert('Item Updated')</script>";
    }
    else{
            echo "<script>alert('Item not Updated')</script>";
    }
}

else if ($_REQUEST['action']=="Delete"){
  
  $prodID = $_POST['prodID'];

    $sql = "Delete From tblproducts where prodID ='$prodID'"; 
        
  if($conn->query($sql) === TRUE) {
        
          echo "<script>alert('Item Deleted')</script>";
    }
    else{
            echo "<script>alert('Item not Deleted')</script>";
    }

}


?>

<html>
<head>
    <link rel="shortcut icon" href="assets/img/logowhite.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Magiting | Home</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/STYLES.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    
</head>

<body style="color: rgb(255,255,255);">
    <h1 class="home-heading" style="color: rgb(255,255,255);"><span class="text-center home-heading-upper" style="color: rgb(116,116,116);font-size: 30px;">A Baybayin Movement</span><span class="text-center home-heading-lower" style="font-size: 120px;">MAGITING</span></h1>
    <nav class="navbar navbar-light navbar-expand-lg bg-white"
        id="mainNav" style="background-color: #ffffff;">
        <div class="container-fluid"><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1" style="margin-left: 210px;">
                <ul class="nav navbar-nav mx-auto" style="margin: 0px;padding: 0px;margin-left: 210px;">
                    <li role="presentation" class="nav-item" style="margin-left: 0px;"><a href="Home.html" class="nav-link">MANAGE PRODUCTS</a></li>
                    <li role="presentation" class="nav-item"><a href="AboutUs.html" class="nav-link">ACCOUNTS</a></li>
                </ul><?php echo $menuBar; ?></div>
        </div>
    </nav>
    <section class="page-section about-heading">
        <div class="about-heading-content">
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div class="col-9 text-center mx-auto" style="background-color: #ffffff;color: rgb(0,0,0);opacity: 1;height: 2000px;margin-top: 50px;margin-bottom: 50px;">
                    <h1 class="admin-heading" style="margin-top: 25px;margin-bottom: 25px;">MANAGE PRODUCTS</h1>
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-right: 0px;">PRODUCTS</button>
                        <div role="menu" class="dropdown-menu"><a role="presentation" href="ADMIN.php" class="dropdown-item">Tees</a><a role="presentation" href="adminHats.php" class="dropdown-item">Hats</a></div>
                    </div>

                   <!-- Table Dynamic -->
 <div class="col-md-12" style="padding-left: 80px;padding-right: 80px;padding-top:30px;">
            <!-- Website Overview-->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Hats</h3>
                <button class="btn btn-light action-button" id="addBtn" style="color: white; background-color: black; border: none; float: left; margin-bottom: 10px;" data-toggle="modal" data-target="#addUser" onclick="showAddBtn();">Add Item</button>
              </div>
              <div class="panel-body">
                
                <br>
                <div class="table-responsive"> 
                <table class="table table-striped table-hover" id="prodTbl">
                    <thead class="thead-dark" style="color: black; text-align: center;">                            
                       <tr>
                         <td>Product ID</td>
                         <td>Name</td>
                         <td>Description</td>
                         <td>Price</td>
                         <td>Stock</td>
                         <td>Color</td>
                         <td>Category</td>
                         <td>Image</td>
                       </tr>
                    </thead>                            
                
                    <?php
                       include("includes/indexdb.php");
                      $conn = new mysqli($servername, $username, $password, $dbname);
                       $sql = "SELECT * FROM tblproducts where prodCat like 'Hats'";
                       $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                       while($row = $result->fetch_assoc()) {
                    ?>
                    
                     <tr style="text-align: center; color: black;">
                         <td data-label="ID"><?php echo $row['prodID']?></td>
                         <td data-label="Name"><?php echo $row['prodName']?></td>
                         <td data-label="Description"><?php echo $row['prodDesc']?></td>
                         <td data-label="Price"><?php echo $row['prodPrice']?></td>
                         <td data-label="Stock"><?php echo $row['prodStk']?></td>
                         <td data-label="Stock"><?php echo $row['prodColor']?></td>
                         <td data-label="Category"><?php echo $row['prodCat']?></td>
                         <td data-label="Image"><img src="<?php echo $row['prodImg']?>" style="height: 50px; width: 60px;"></td>
                        
                    
                     </tr>
                  <?php
                        }
                       }
                    ?>
            
                                                
                                            
                </table>
                </div>
                
               
              </div>
            </div>
              
                     
                  
          </div>
                   <!-- End of Table -->

                </div>
            </div>
        </div>
    </section>



    
</body>
</header>    







<div class="footer-dark" style="padding-top: 40px;padding-bottom: 30px;background-color: #000000;">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 text-left item">
                    <h3>CUSTOMER SERVICE</h3>
                    <ul>
                        <li><a href="#">FAQ<br /></a></li>
                        <li><a href="#">Size Guide<br /></a></li>
                        <li><a href="#">Contact Us<br /></a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 text-left item">
                    <h3>ABOUT US</h3>
                    <ul>
                        <li><a href="AboutUs.html">Mission Vision</a></li>
                        <li><a href="AboutUs.html">Owners</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-6 text-left item text">
                    <h3>MAGITING PH</h3>
                    <p>A Baybayin movement that aims to parttake in the co-creation <br />of a generation of Active Participation and Appreciation for the <br />Filipino Identity.<br /><br /></p>
                </div>
                <div class="col item social"><a href="https://www.facebook.com/MagitingPH" target="_blank"><img src="assets/img/icofb.png" style="width: 30px">
                <i class="icon ion-social-facebook"></i></a><a href="https://twitter.com/Magitingph" target="_blank"><img src="assets/img/icotwit.png" style="width: 30px">
                <i class="icon ion-social-twitter"></i></a><a href="https://www.instagram.com/magitingph" target="_blank"><img src="assets/img/icoig.png" style="width: 30px">
                <i class="icon ion-social-instagram"></i></a></div>
            </div><img src="assets/img/logowhite.png" class="d-flex d-xl-flex justify-content-center mx-auto justify-content-xl-center" style="width: 50px;padding-top: 30px;" />
            <p class="copyright" style="padding-top: 10px;">Magiting PH © 2017</p>
        </div>
    </footer>
</div>

<!-- Modals -->
    
    <!-- Add Page -->
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="color: black; text-align: center;">


            <form name="myform" id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Add Item</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearText();"><span aria-hidden="true">&times;</span></button>
          
          </div>
          <div class="modal-body">

            <div class="form-group">
                <label>Product ID</label>
                <input type="text" id="prodID" name="prodID" class="form-control" form="myform" readonly>
            </div>

            <div class="form-group">
                <label>Product Name</label>
                <input type="text" id="prodName" name="prodName" class="form-control" form="myform" required>
            </div>
           
            <div class="form-group">
                <label>Description</label>
                <input type="text" id="prodDesc" name="prodDesc" class="form-control" form="myform" required>
            </div>
            <div class="form-group">
                <label>Price</label>
                <input type="text" id="prodPrice" name="prodPrice" class="form-control" form="myform" required>
            </div>
            <div class="form-group">
                <label>Stock</label>
                <input type="text" id="prodStk" name="prodStk" class="form-control" form="myform" required>
                
            </div>

             <div class="form-group">
              
                 <select style="margin-bottom: 15px;" id="prodColor" name="prodColor">
                    <option value="" disabled selected style="display: none;">Color</option>
                                <option value="Navy Blue">Navy Blue</option>
                                <option value="Red">Red</option>
                                <option value="Royal Blue">Royal Blue</option>
                                <option value="Black">Black</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Violet">Violet</option>
                                <option value="Sky Blue">Sky Blue</option>
                                <option value="Dark Grey">Dark Grey</option>
                                <option value="white">white</option>
                                <option value="Light Green">Light Green</option>
                                <option value="Pink">Pink</option>
                                <option value="Plum">Plum</option>
                                <option value="Light Grey">Light Grey</option>
                                <option value="Orange">Orange</option>
                                <option value="Dark Green">Dark Green</option>
                        </select>
              </div>

            <div class="form-group">

             <label>Category</label>
                <input type="text" id="prodCat" name="prodCat" class="form-control" form="myform" value="Tees" readonly>
             </div>
           
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" id="closeBtn" onclick="clearText();" data-dismiss="modal" style=" float: right;" >Close</button>

             <button type="submit" class="btn btn-light action-button" value="Save" id="saveBtn" name="action" style=" float: right; margin-right: 5px; display: none;">Save changes</button>

             <button type="submit" class="btn btn-light action-button" value="Add" id="addbtn" name="action" style=" float: right; margin-right: 5px; display: none;">Add Item</button>

             <button type="button" class="btn btn-light action-button" id="delBtn" onclick="clickDel()" style=" float: right;">Delete</button>

             <p id="confirmationTag" style="margin-right: 5px; display: none; float: right;">Are you sure?</p>
             <button type="submit" class="btn btn-light action-button"  id="yesBtn" name="action" value="Delete" style="display: none; float: right; margin-right: 5px;">Yes</button>
             <button type="button" onclick="clickNo();" class="btn btn-light action-button"  id="noBtn" style="display: none; float: right; margin-right: 5px;">No</button>
             
             
         
              
           
          </div>
          </form>
          
        </div>
      </div>
    </div>

<script>

    $('#upload').on('click', function() {
    var file_data = $('#sortpicture').prop('files')[0];   
    var form_data = new FormData();                  
    form_data.append('file', file_data);
    alert(form_data);                             
    $.ajax({
        url: 'includes/upload.php', // point to server-side PHP script 
        dataType: 'text',  // what to expect back from the PHP script, if anything
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,                         
        type: 'post',
        success: function(php_script_response){
            alert(php_script_response); // display response from the PHP script, if any
        }
     });
});

</script>

  <script>

      function clickDel(){
        var delBtn = document.getElementById('delBtn');
        var saveBtn = document.getElementById('saveBtn');
        var clearBtn = document.getElementById('closeBtn');

        delBtn.style.display = "none";
        saveBtn.style.display = "none";
        clearBtn.style.display = "none";

        var yesBtn = document.getElementById('yesBtn');
        var noBtn = document.getElementById('noBtn');
        var confirmationTag = document.getElementById('confirmationTag');
        noBtn.style.display = "block";
        yesBtn.style.display = "block";
        confirmationTag.style.display = "block";

      }

      function clickNo(){
         var delBtn = document.getElementById('delBtn');
        var saveBtn = document.getElementById('saveBtn');
        var clearBtn = document.getElementById('closeBtn');
        delBtn.style.display = "block";
        saveBtn.style.display = "block";
        clearBtn.style.display = "block";
        delBtn.style.float = "right";
        saveBtn.style.float = "right";
        clearBtn.style.float = "right";

        var yesBtn = document.getElementById('yesBtn');
        var noBtn = document.getElementById('noBtn');
        var confirmationTag = document.getElementById('confirmationTag');
        noBtn.style.display = "none";
        yesBtn.style.display = "none";
        confirmationTag.style.display = "none";
      }

    </script> 

    <script>
    
      var table = document.getElementById('prodTbl');
      
      for(var i = 1; i < table.rows.length; i++)
      {
          table.rows[i].onclick = function()
          {
               //rIndex = this.rowIndex;
                var addBtn = document.getElementById('addBtn');
                addBtn.click();

                hideAddBtn();
                showSaveBtn();
              
               document.getElementById("prodID").value = this.cells[0].innerHTML;
               document.getElementById("prodName").value = this.cells[1].innerHTML;
               document.getElementById("prodDesc").value = this.cells[2].innerHTML;
               document.getElementById("prodPrice").value = this.cells[3].innerHTML;
               document.getElementById("prodStk").value = this.cells[4].innerHTML;
               
     };
      }
    </script>

     <script>
      function clearText(){
         document.getElementById("prodID").value = "";
         document.getElementById("prodName").value = "";
         document.getElementById("prodDesc").value = "";
         document.getElementById("prodPrice").value = "";
         document.getElementById("prodStk").value = "";
         clickNo();
      }
    </script>

    <script type="text/javascript">
    

    function showAddBtn(){

        hideSaveBtn();
     var x = document.getElementById("addbtn");
     x.style.display = "block";
    
    }
    function hideAddBtn(){
     var x = document.getElementById("addbtn");
     x.style.display = "none";
    
    }

    function showSaveBtn(){
     var x = document.getElementById("saveBtn");
         x.style.display = "block";
    
    }

    function hideSaveBtn(){
     var x = document.getElementById("saveBtn");
         x.style.display = "none";
    
    }


    </script>

</body>

</html>