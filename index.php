<?php
include('includes/session.php');
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
<header class="home-header" style="margin-top: -10px;margin-bottom: -10px;"><img class="d-block float-left" src="assets/img/HEADERS/home header.png" style="width: 100%;" /></header>
    <nav class="navbar navbar-light navbar-expand-lg bg-white" id="mainNav" style="background-color: #ffffff; padding-left: 1in;">
    
    <div class="container-fluid"><button data-toggle="collapse" data-target="#navcol-1" class="navbar-toggler"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navcol-1">
            <ul class="nav navbar-nav mx-auto" style="margin: 0px;padding: 0px;">
  

                <li role="presentation" class="nav-item" style="display: <?php echo $cartView; ?>;"><a href="#" class="nav-link cart" style="width: 35px;height: 35px;margin: 0px;background-image: url('assets/img/cart.png');" data-toggle="modal" data-target="#myModal"></a></li>

                <button id="recentTrans" name="recentTrans" data-toggle="modal" data-target="#myModalTransItemized" style="display: none;">Click me</button>

                <li role="presentation" class="nav-item" style="display: <?php echo $cartView; ?>;"><a href="#" class="nav-link cart" style="width: 35px;height: 35px;margin: 0px;background-image: url('assets/img/history.png');padding-left: 8px;margin-right: 300px;" data-toggle="modal" data-target="#myModalTrans"></a></li>
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
                        <button type="button" class="btn btn-light action-button" onclick="checkoutAction();" data-dismiss="modal">Checkout</button>
                        </div>
                        </div>
                        </div>
                        </div>

                <!-- Transaction History --> 
                
                 <!--CART MODAL-->
                <!-- The Modal -->
                    <div class="modal" id="myModalTrans">
                        <div class="modal-dialog">
                        <div class="modal-content">
      
                <!-- Modal Header -->

                    <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Transaction</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                <!-- Modal body -->
                    <div class="modal-body" style="color: black;">
                    
                     <div class="table-responsive"> 
                <table class="table table-striped table-hover" id="transTbl">
                    <thead class="thead-dark" style="color: black; text-align: center;">                            
                       <tr>
                         <td>Transaction ID</td>
                         <td>Date</td>
                         <td>Total Amount</td>
                       </tr>
                    </thead>                            
                
                    <?php
                       include("includes/indexdb.php");
                       include('includes/session.php');
                      $conn = new mysqli($servername, $username, $password, $dbname);
                       $sql = "SELECT * FROM tbltransactions where userID like '".$_SESSION['login_user']."'";
                       $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                       while($row = $result->fetch_assoc()) {
                    ?>
                    
                     <tr style="text-align: center; color: black;">
                         <td data-label="Trans ID"><?php echo $row['transactionId']?></td>
                         <td data-label="Date"><?php echo $row['date']?></td>
                         <td data-label="Amount"><?php echo $row['totalAmount']?></td>
                        
                         
                        
                    
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
                        
                        </div>
                        </div>
                        </div>
                        </div>

                <!-- End -->    

                <!-- Transaction Itemized --> 
                
                 <!--CART MODAL-->
                <!-- The Modal -->
                    <div class="modal" id="myModalTransItemized">
                        <div class="modal-dialog">
                        <div class="modal-content">
      
                <!-- Modal Header -->

                    <div class="modal-header" style="color: black;">
                        <h4 class="modal-title">Transaction History</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
        
                <!-- Modal body -->
                    <div class="modal-body" style="color: black;">
                    
                     <div class="table-responsive"> 
                <table class="table table-striped table-hover" id="transTblItemized">
                    <thead class="thead-dark" style="color: black; text-align: center;">                            
                       <tr>
                         <td>Transaction ID</td>
                         <td>ID</td>
                         <td>Name</td>
                         <td>Color</td>
                         <td>Size</td>
                         <td>Price</td>
                       </tr>
                    </thead>                            
                
                    <?php
                       include("includes/indexdb.php");
                       include('includes/session.php');
                      $conn = new mysqli($servername, $username, $password, $dbname);
                       $sql = "SELECT * FROM tblTransProd where userID like '".$_SESSION['login_user']."'";
                       $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                       while($row = $result->fetch_assoc()) {
                    ?>
                    
                     <tr style="text-align: center; color: black;">
                         <td data-label="Trans ID"><?php echo $row['transactionId']?></td>
                         <td data-label="Date"><?php echo $row['prodID']?></td>
                         <td data-label="Amount"><?php echo $row['prodName']?></td>
                         <td data-label="Amount"><?php echo $row['prodColor']?></td>
                         <td data-label="Amount"><?php echo $row['prodSize']?></td>
                         <td data-label="Amount"><?php echo $row['prodPrice']?></td>
                        
                         
                        
                    
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
                       
                        </div>
                        </div>
                        </div>
                        </div>

                <!-- End -->          
  
                <li class="nav-item" role="presentation"><a class="nav-link" href="index.php">HOME</a></li>
                <li class="nav-item" role="presentation"><a class="nav-link" href="ABOUTUS.php">ABOUT US</a></li>
                <li class="dropdown nav-item" style="margin-left: 0px;margin-right: 50px;"><a data-toggle="dropdown" aria-expanded="false" href="#" class="dropdown-toggle nav-link" style="margin-right: 65px;">PRODUCTS</a>
                    <div role="menu" class="dropdown-menu"><a role="presentation" href="PTEES.php" class="dropdown-item">Tees</a><a role="presentation" href="PHATS.php" class="dropdown-item">Hats</a></div>
                </li>
            </ul><?php echo $menuBar; ?></div>
    </div>
    </nav>
</header>    


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/css/swiper.min.css" />

<div class="d-inline-block" style="width: 1400px;height: 500px; margin-top: 5px;">
    <div class="d-inline-block mx-auto carousel slide" id="Div_Promo_Carousel" data-ride="carousel" style="width: 500px;height: 500px;">

        <div class="carousel-inner" role="listbox">
        <div class="carousel-item active"><img src="assets/img/SLIDE1/1slide1.jpg" style="width: 500px;" /></div>
        <div class="carousel-item"><img src="assets/img/SLIDE1/1slide2.jpg" style="width: 500px;height: 500px;" /></div>
        <div class="carousel-item"><img src="assets/img/SLIDE1/1slide3.jpg" style="width: 500px;height: 500px;" /></div>
        <div class="carousel-item"><img src="assets/img/SLIDE1/1slide4.jpg" style="width: 500px;height: 500px;" /></div>
        <div class="carousel-item"><img src="assets/img/SLIDE1/1slide5.jpg" style="width: 500px;height: 500px;" /></div>
        <div class="carousel-item"><img src="assets/img/SLIDE1/1slide6.jpg" style="width: 500px;height: 500px;" /></div>
        <div class="carousel-item"><img src="assets/img/SLIDE1/1slide7.jpg" style="width: 500px;height: 500px;" /></div>
        </div>

        <div><a href="#Div_Promo_Carousel" class="carousel-control-prev" role="button" data-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Prev </span></a><a href="#Div_Promo_Carousel" class="carousel-control-next"
                role="button" data-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next </span></a></div>
        <ul class="carousel-indicators" role>
            <li class="active" data-slide-to="0" data-target="#Div_Promo_Carousel">Item 1</li>
            <li data-slide-to="1" data-target="#Div_Promo_Carousel">Item 1</li>
            <li data-slide-to="2" data-target="#Div_Promo_Carousel">Item 1</li>
        </ul>
    </div>

    
    <div data-ride="carousel" class="carousel slide d-inline-block" id="carousel-1" style="width: 843px;height: 500px;">
        <div role="listbox" class="carousel-inner">
    <div class="carousel-item active"><img src="assets/img/SLIDE2/2slide1.jpg" alt="Slide Image" class="w-100 d-block" style="width: 839px;height: 500px;"/></div>
        <div class="carousel-item"><img src="assets/img/SLIDE2/2slide2.jpg" alt="Slide Image" class="w-100 d-block" style="width: 839px;height: 500px;"/></div>
        <div class="carousel-item"><img src="assets/img/SLIDE2/2slide3.jpg" alt="Slide Image" class="w-100 d-block" style="width: 839px;height: 500px;"/></div>
        <div class="carousel-item"><img src="assets/img/SLIDE2/2slide4.jpg" alt="Slide Image" class="w-100 d-block" style="width: 839px;height: 500px;" /></div>
        <div class="carousel-item"><img src="assets/img/SLIDE2/2slide5.jpg" alt="Slide Image" class="w-100 d-block" style="width: 839px;height: 500px;"/></div>
        </div>

        <div><a href="#carousel-1" role="button" data-slide="prev" class="carousel-control-prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a href="#carousel-1" role="button" data-slide="next" class="carousel-control-next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            <li data-target="#carousel-1" data-slide-to="3"></li>
            <li data-target="#carousel-1" data-slide-to="4"></li>
            </ol>
    </div>
</div>


<section class="text-center" style="margin-right: -15px;margin-left: -15px;padding-top: 50px;">
    <h1 style="margin-bottom: 30px;">New This Month</h1>
    <div class="row" style="margin-right: 100px;margin-left: 100px;background-color: #ffffff;color: #000000;font-size: 15px;margin-bottom: 100px;">
        <div class="col">
            <div class="table-responsive" style="padding-top: 25px;">
                <table class="table">
                    <thead>
                        <tr></tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td style="width: 400px;"><center><img src="assets/img/FEATURED/Paraiso.jpg" style="width: 300px;height: 300px;"/></center>PARAISO / PARADISE</td>
                            <td style="width: 400px;"><center><img src="assets/img/FEATURED/Brave.jpg" style="width: 300px;"/></center></td>
                            <td style="width: 400px;"><center><img src="assets/img/FEATURED/Marahuyo.jpg" style="width: 300px;height: 300px;"/></center></td>
                        </tr>
                        <tr>
                            <td style="color: black"><center>PARAISO / PARADISE<center></td>
                            <td style="color: black"><center>MAGITING BRAVE</center></td>
                            <td style="color: black"><center>MARAHUYO / ENCHANTED<center></td>
                        </tr>
                    </tbody>
                </table>
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




<script>
$(function(){
var mySwiper = new Swiper ('.swiper-container', {
    loop: true,
    pagination: '.swiper-pagination',
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev'
});

});
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
                
                alert("Item Removed");
                location.reload();

           }
          };
           xmlhttp.open("GET","ajax/delCartItem.php?q=" + id,true);
          xmlhttp.send();
    } else {

    }
  }

</script>

<script>
    
      var table = document.getElementById('transTbl');
      
      for(var i = 1; i < table.rows.length; i++)
      {
          table.rows[i].onclick = function()
          {
               //rIndex = this.rowIndex;
              
                var addBtn = document.getElementById('recentTrans');
                addBtn.click();

                
               
     };
      }
    </script>

</body>

</html>