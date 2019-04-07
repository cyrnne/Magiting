<?php
include('includes/session.php');
include('includes/indexdb.php');
    

    $totalPrice = 0;
    $totalCount = 0;

      $conn = new mysqli($servername, $username, $password, $dbname);

      $sql = "SELECT sum(prodPrice) as total, count(prodPrice) as totalCount FROM tblcart where userId like '".$_SESSION['login_user']."'";
      $result = $conn->query($sql);
       
     if ($result->num_rows > 0) {
    // output data of each r1ow
    
    
  
        while($row = $result->fetch_assoc()) {
              $totalPrice = $row["total"]; 
              $totalCount = $row["totalCount"];
        
           
    }  

}



?>

<html>
<head>
    <link rel="shortcut icon" href="assets/img/logowhite.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Magiting | Checkout</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/STYLES.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


    
</head>

<body style="color: rgb(255,255,255);">
<header class="home-header" style="margin-top: -10px;margin-bottom: -10px;"><img class="d-block float-left" src="assets/img/HEADERS/checkout header.jpg" style="width: 100%;" /></header>
    <nav class="navbar navbar-light navbar-expand-lg bg-white" id="mainNav" style="background-color: #ffffff; padding-left: 1in;">
    <div class="container-fluid"><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mx-auto" style="margin: 0px;padding: 0px;">
                
                <li role="presentation" class="nav-item" style="display: <?php echo $cartView; ?>;"><a href="#" class="nav-link cart" style="width: 35px;height: 35px;margin: 0px;background-image: url('assets/img/cart.png');padding-left: 8px;margin-right: 300px;" data-toggle="modal" data-target="#myModal"></a></li>
                <!--CART MODAL-->
                <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                        <div class="modal-content">
      
                <!-- Modal Header -->

                    <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Cart</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                <!-- Modal body -->
                    <div class="modal-body" style="color: black;">
                   
                    <div class="table-responsive"> 
                <table class="table table-striped table-hover" id="prodTbl">
                    <thead class="thead-dark" style="color: black; text-align: center;">                            
                       <tr>
                         <td>Product ID</td>
                         <td>Name</td>
                         <td>Quantity</td>
                         <td>Size</td>
                         <td>Color</td>
                         <td>Price</td>
                       </tr>
                    </thead>                            
                
                    <?php
                       include("includes/indexdb.php");
                       include('includes/session.php');
                      $conn = new mysqli($servername, $username, $password, $dbname);
                       $sql = "SELECT * FROM tblcart where userID like '".$_SESSION['login_user']."'";
                       $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                       while($row = $result->fetch_assoc()) {
                    ?>
                    
                     <tr style="text-align: center; color: black;">
                         <td data-label="ID"><?php echo $row['prodID']?></td>
                         <td data-label="Name"><?php echo $row['prodName']?></td>
                         <td data-label="Quantity"><?php echo $row['prodQty']?></td>
                         <td data-label="Stock"><?php echo $row['prodSize']?></td>
                         <td data-label="Category"><?php echo $row['prodColor']?></td>
                         <td data-label="Price"><?php echo $row['prodPrice']?></td>
                         
                        
                    
                     </tr>
                  <?php
                        }
                       }
                    ?>
            
                                                
                                            
                </table>
                </div>
                    
                    </div>
        
                <!-- Modal footer -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                        </div>
                        </div>
                        </div>
                        </div>

                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">HOME</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="ABOUTUS.php">ABOUT US</a></li>
                <li class="dropdown nav-item" style="margin-left: 0px;margin-right: 50px;"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link" style="margin-right: 65px;">PRODUCTS</a>
                    <div role="menu" class="dropdown-menu"><a role="presentation" href="PTEES.php" class="dropdown-item">Tees</a><a role="presentation" href="PHATS.php" class="dropdown-item">Hats</a></div>
                </li>
            </ul><?php echo $menuBar; ?></div>
    </div>
</nav> 

  <form id="myform" name="myform" onsubmit="return false">
                   <!-- End of Table -->

                </div>
            </div>
        </div>
    </section>


<!---Checkout--->
<section class="page-section about-heading">
    <div class="about-heading-content">
        <div class="row">

            <div class="col-9 text-center mx-auto" style="background-color: #ffffff;color: rgb(0,0,0);opacity: 1;margin-top: 50px;margin-bottom: 50px;">
                <h1 class="prod-heading" style="margin-top: 25px;margin-bottom: 25px;">CHECKOUT</h1>

                <div class="row .payment-dialog-row" style="padding-bottom: 42px;">
    <div class="col">
        <div class="card mx-auto credit-card-box" style="width: 500px;">
            <div class="card-header">
                <h3 style="background-color: #dcdcdc;"><span class="panel-title-text">Payment Details </span><img src="assets/img/cod.png" class="img-fluid panel-title-image" style="width: 280px;" /></h3>
            </div>
            <div class="card-body">
                <h5 class="text-center order" style="font-size: 20px;width: 458px;">ORDER SUMMARY</h5>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-left subtotal-lbl" style="color: rgb(0,0,0);"><strong>Subtotal (<?php echo $totalCount; ?>
 Item/s):</strong><br /></td>
                                <td class="text-right subtotal" style="color: rgb(0,0,0);">₱ <?php echo $totalPrice; ?></td>
                            </tr>
                                                   
                            <tr>
                                <td class="text-left ship-lbl" style="color: rgb(0,0,0);"><strong>Shipping fee:</strong></td>
                                <td class="text-right shipfee" style="color: rgb(0,0,0);">+₱50<br /></td>
                            </tr>
                            <tr>
                                <td class="text-right total-lbl" style="color: rgb(0,0,0);"><strong>TOTAL:</strong></td>
                                <td class="text-right total" style="font-size: 20px;color: rgb(255,0,0);"><strong>₱ <?php echo $totalPrice + 50; ?></strong><br /></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <form id="payment-form" style="margin-top: -10px;">
                    <div class="form-row">
                        <div class="col-12"><input type="text" id="name" onchange="getName(this.value)" placeholder="Name" class="form-control name-input" style="margin-bottom: 10px;" /></div>
                    </div>
                    <div class="form-row">
                        <div class="col-12"><input type="text" id="address" onchange="getAddress(this.value)" placeholder="Address" class="form-control address-input" style="margin-bottom: 20px;margin-top: 10px;" /></div>
                    </div>
                    <div class="form-row">
                        <div class="col-12"><button class="btn btn-light action-button" type="submit" onclick="confirmOrder();" style="font-size: 14px;padding-left: 2in;padding-right: 2in;">Place Order</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
        </div>
    </div>
</div>
               
</section>

</body>
</header>    

        <!--FOOTER-->
<div class="footer-dark" style="padding-top: 40px;padding-bottom: 30px;background-color: #000000;">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 text-left item">
                    <h3>CUSTOMER SERVICE</h3>
                    <ul>

                        <li><a href="#" data-toggle="modal" data-target="#myModalsize">Size Guide<br /></a></li>
                        <!--SIZE GUIDE MODAL-->
                        <!-- The Modal -->
                        <div class="modal" id="myModalsize">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->

                        <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Size Guide</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                        <!-- Modal body -->
                        <div class="sizemodal-body" style="color: black;">
                        <p style="color: black; text-align: justify;"> 
                        <center><img class="size-guide" src="assets/img/size chart.jpg" style="width: 400px;"/></center>
                        </p>
                    
                        </div>
                        </div>
                        </div>
                        </div>


                        <li><a href="#" data-toggle="modal" data-target="#myModalchart">Color Chart<br /></a></li>
                        <!--COLOR CHART MODAL-->
                        <!-- The Modal -->
                        <div class="modal" id="myModalchart">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->

                        <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Color Chart</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                        <!-- Modal body -->
                        <div class="chartmodal-body" style="color: black;">
                        <p style="color: black; text-align: justify;"> 
                        <center><img class="chart-guide" src="assets/img/color.jpg" style="width: 400px;"/></center>
                        </p>
                    
                        </div>
                        </div>
                        </div>
                        </div>

                        <li><a href="#" data-toggle="modal" data-target="#myModalcontact">Contact Us<br /></a></li>
                        <!--CONTACT MODAL-->
                        <!-- The Modal -->
                        <div class="modal" id="myModalcontact">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->

                        <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Contact Us</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                        <!-- Modal body -->
                        <div class="contactmodal-body" style="color: black; font-family: century gothic; margin-top:80px; font-size:15px;">
                        <div class="row text-center m-auto icon-features" style="width: 380px;">
                            <div class="col-4 icon-feature"><i class="fa fa-map-marker"></i>
                            <p><b>Location</b></p>
                            <p>Bazaars are To Be Announced</p>
                            </div>
                            <div class="col-4 icon-feature"><i class="fa fa-phone"></i>
                            <p><b>Call Us</b></p>
                            <p>+63 956 153 8775<br /></p>
                            </div>
                            <div class="col-4 icon-feature"><i class="fa fa-envelope"></i>
                            <p><b>Email Us</b></p>
                            <p>magitingph @gmail.com<br /></p>
                        </div>
                        </div>
                    
                        </div>
                        </div>
                        </div>
                        </div>
                 
                </div>

                <div class="col-sm-6 col-md-3 text-left item">
                    <h3>ABOUT US</h3>
                    <ul>
                        <li><a href="ABOUTUS.php">Mission Vision</a></li>
                        <li><a href="ABOUTUS.php">Owners</a></li>
                        <li></li>
                    </ul>
                </div>
                <div class="col-md-6 text-left item text">
                    <h3>MAGITING PH</h3>
                    <p>A Baybayin movement that aims to parttake in the co-creation <br />of a generation of Active Participation and Appreciation for the <br />Filipino Identity.<br /><br /></p>
                </div>
                <div class="col item social"><p style="color: grey; padding-bottom: 5px;">CHECK US OUT ON<br></p><a href="https://www.facebook.com/MagitingPH" target="_blank"><img src="assets/img/icofb.png" style="width: 30px">
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

               </select>
            
                      

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

    var getname = "";
    var getaddress = "";

    function getName(str){
        getname = str;
    }
    function getAddress(str){
        getaddress = str;
    }

     function confirmOrder(){

   
     var msg = confirm("Confirm Order?");
    if (msg == true) {
        var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                alert(this.responseText);
                location.reload();

           }
          };
           xmlhttp.open("GET","includes/delCart.php?name=" + getname + "&address=" + getaddress,true);
          xmlhttp.send();
    } else {

    }
  }


    </script>



</body>

</html>