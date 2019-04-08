<?php
include('includes/session.php');
?>

<html>

<head>
    <link rel="shortcut icon" href="assets/img/logowhite.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Magiting | Tees</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/STYLES.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

</head>

<body style="color: rgb(255,255,255);">
<header class="home-header" style="margin-top: -10px;margin-bottom: -10px;"><img class="d-block float-left" src="assets/img/HEADERS/prod header.jpg" style="width: 100%;" /></header>
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
                         <td data-label="Price"><?php echo $row['prodQty']?></td>
                         <td data-label="Stock"><?php echo $row['prodSize']?></td>
                         <td data-label="Color"><?php echo $row['prodColor']?></td>
                         <td data-label="Price"><?php echo $row['prodPrice']?></td>
                          <td data-label="Category">
                            <button type="button" class="btn btn-light action-button" id="<?php echo $row['prodID']?>" onclick="delCartItem(this.id)" style=" float: right;">Delete</button>
                         </td>
                         
                        
                    
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
                         <button type="button" class="btn btn-light action-button" onclick="checkoutAction();" data-dismiss="modal">Checkout</button>
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

             <input type="text" name="loginCheck" id="loginCheck" value="<?php echo $_SESSION['login_user']; ?>" style="display: none;">
    </div>
</nav>
        
<!-- CONTENT-->
<section class="page-section about-heading">
    <div class="about-heading-content">
        <div class="row">

            <div class="col-9 text-center mx-auto" style="background-color: #ffffff;color: rgb(0,0,0);opacity: 1;margin-top: 50px;margin-bottom: 50px;">
                <h1 class="prod-heading" style="margin-top: 25px;margin-bottom: 25px;">TEES</h1>
                <a href="#" data-toggle="modal" data-target="#myModalsize" style="color: red;">Size Guide<br /></a>
                        <!--SIZE GUIDE MODAL-->
                        <!-- The Modal -->
                        <div class="modal" id="myModalsize">
                        <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->

                        <div class="modal-header">
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

                        <a href="#" data-toggle="modal" data-target="#myModalchart" style="color: red;">Color Chart<br /></a>
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

                <div class="row product-list dev">

    <?php
                       include("includes/indexdb.php");
                      $conn = new mysqli($servername, $username, $password, $dbname);
                       $sql = "SELECT * FROM tblproducts where prodCat like 'Tees' group by prodName";
                       $result = $conn->query($sql);

                       $ctr = 0;

                        if ($result->num_rows > 0) {
                        // output data of each row
                       while($row = $result->fetch_assoc()) {
    ?>

    <div class="col-sm-6 col-md-4 product-item animation-element slide-top-left">
        <div class="product-container">
            <div class="row">
                <div class="col-md-12"><a href="#" class="product-image"><img src="<?php echo $row['prodImg']?>" /></a></div>
            </div>
            <div class="row">

                <?php $idofProd = $row['prodID'];?> 

               <?php $prodNameArr[$ctr] = $row['prodName']; ?>
               <?php $prodPriceArr[$ctr] = $row['prodPrice']; ?>
               <?php $checkqty = $row['prodStk']; 
               
               $disableStat = "false";
               $displaySet = "block";
             
              if($checkqty < 1){
                $disableStat = "true";
                $displaySet = "none";
               }
               ?>

                <div class="col text-center" style="height: 30px; font-size: 20px; font-family: sans-serif; font-weight: bolder; color: black;"><?php echo $row['prodName']; ?></div>
                <div class="col-12">
                    <p class="product-description" style="height: 60px;"><br /><?php echo $row['prodDesc']; $price = $row['prodPrice']; ?><br /><br /></p>

              <?php 
                    if($disableStat == "false"){
              ?>
                    <input type="number" min="1" max="<?php echo $row['prodStk']?>" name="quantity" placeholder="Qty:" id="qty" onchange="getQty(this.value)" class="text-center product-quantity"  style="width: 60px;height: 30px;" />
              <?php
                    }else{
              ?> 
                    <input type="number" min="1" max="<?php echo $row['prodStk']?>" name="quantity" placeholder="Qty:" id="qty" onchange="getQty(this.value)" class="text-center product-quantity"  style="width: 60px;height: 30px;" 
                    disabled />
              <?php      
                    }
              ?>
                    <p class="text-center product-stocks"style="padding-bottom: 0px;"><br>Only <?php echo $row['prodStk']?> stocks left</p>

                     <center><select style="margin-bottom: 15px;" id="prodSize" onchange="getSize(this.value);" \>
                        <option value="" disabled selected style="display: none;">Size</option>
                                 <option value="XS">XS</option>
                                <option value="S">S</option>
                                <option value="M">M</option>
                                <option value="L">L</option>
                                <option value="XL">XL</option>
                                <option value="2XL">2XL</option>
                                
                        </select>

              <select style="margin-bottom: 15px;" id="prodColor" onchange="getColor(this.value);">
                        <option value="" disabled selected style="display: none;">Color</option>
                                 <option value="Navy Blue">Navy Blue</option>
                                <option value="Red">Red</option>
                                <option value="Royal Blue">Royal Blue</option>
                                <option value="Black">Black</option>
                                <option value="Yellow">Yellow</option>
                                <option value="Violet">Violet</option>
                                <option value="Sky Blue">Sky Blue</option>
                                <option value="Dark Grey">Dark Grey</option>
                                <option value="White">white</option>
                                <option value="Light Green">Light Green</option>
                                <option value="Pink">Pink</option>
                                <option value="Plum">Plum</option>
                                <option value="Light Grey">Light Grey</option>
                                <option value="Orange">Orange</option>
                                <option value="Dark Green">Dark Green</option>
                        </select></center>
                

                    <div class="row">
                        <div class="col-6">

                            <?php 
                                if($disableStat == "false"){
                                 ?>
                                  <button class='btn btn-light' type='button' onclick='getProdId(this.id,this.name)' id='<?php echo $idofProd; ?>' name='<?php echo $ctr;?>'  >Buy Now!</button>   
                                <?php 
                            }
                                else{
                                    ?>
                                     <button class='btn btn-light' type='button' onclick='getProdId(this.id,this.name)' id='<?php echo $idofProd; ?>' name='<?php echo $ctr;?>' disabled  >Buy Now!</button> 
                                     <?php 
                                }
                            ?>

                          

                        </div>

                        <div class="col-6">
                            <p class="product-price">₱ <?php echo $price; ?><br /></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <?php

            $ctr = $ctr + 1;
                        }
                       }
                    ?>

    
            </div>


        </div>
    </div>
</div>
               
</section>

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
                        <div class="contactmodal-body" style="color: black; font-family: century gothic; margin-top:80px; font-size:15px; height:2.5in;">
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

</section>

<script>
    var $animation_elements = $('.animation-element');
var $window = $(window);

function check_if_in_view() {
  var window_height = $window.height();
  var window_top_position = $window.scrollTop();
  var window_bottom_position = (window_top_position + window_height);
 
  $.each($animation_elements, function() {
    var $element = $(this);
    var element_height = $element.outerHeight();
    var element_top_position = $element.offset().top;
    var element_bottom_position = (element_top_position + element_height);
 
    //check to see if this current container is within viewport
    if ((element_bottom_position >= window_top_position) &&
        (element_top_position <= window_bottom_position)) {
      $element.addClass('in-view');
    } else {
      $element.removeClass('in-view');
    }
  });
}

$window.on('scroll resize', check_if_in_view);
$window.trigger('scroll');
</script>

<script type="text/javascript">

  var colorValue = "";

  var sizeValue = "";

  var qtyValue = "";

  function getColor(str){
    colorValue = str;

  }
 
  function getSize(str){
   sizeValue = str;

  }
 

  function getQty(str){
    qtyValue = str;

  }
  function getProdId(id,indexNum){

    var prodQty = document.getElementById("qty").value;

    var getuser = document.getElementById("loginCheck").value;


    if(getuser == ""){
         alert("Please Login to buy product");
    }

    else{

    

    if(qtyValue == "" || sizeValue == "" || colorValue == ""){
        alert("Please complete the needed details");
    }
    else{

   
     var msg = confirm("Are you sure you want to add this item to your cart?");
    if (msg == true) {
        var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                alert("Item Added");
                location.reload();

           }
          };
           xmlhttp.open("GET","ajax/addCart.php?q=" + id + "&indexNum=" + indexNum + "&prodColor=" + colorValue + "&prodQty=" + qtyValue + "&prodSize=" + sizeValue,true);
          xmlhttp.send();
    } else {

    }
    }
    
    
  }

}
</script>

<script type="text/javascript">
   function checkoutAction(){

  var msg = confirm("Proceed to checkout?");
    if (msg == true) {
        window.location.href = "CHECKOUT.php";
    } else {
    
    }
   }
</script>

<script type="text/javascript">
  

    function delCartItem(id){
    
    
   
     var msg = confirm("Are you sure you want to delete this item?");
    if (msg == true) {
        var xmlhttp = new XMLHttpRequest();

            xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                
                alert(this.responseText);
                location.reload();

           }
          };
           xmlhttp.open("GET","ajax/delCartItem.php?q=" + id,true);
          xmlhttp.send();
    } else {

    }
  }

</script>

    </body>

</html>