<?php
include('includes/session.php');

if($_REQUEST['action']=="Add")

{

    try {

                  include('includes/indexdb.php');

               
                  $username = $_POST['username'];
                  $getpass = $_POST['password'];
                  $password = md5($getpass);
                  $role = $_POST['role'];

             

                 
       
            $sql = "INSERT INTO tbllogin (username, password ,role) VALUES ('$username','$password','$role')";
      

          

                  if($conn->query($sql) === TRUE) {

                   // echo "Evaluation Submitted";
                    
                   echo "<script>alert('Account added')</script>";
                     
                  }

                  else{
                       
                    echo "<script>alert('Account not added')</script>";
                       
                      }

    


          }//catch exception
        catch(Exception $e) {
      
        echo 'Message: ' .$e->getMessage();
                  
        }

}
else if ($_REQUEST['action']=="Save"){

  include('includes/indexdb.php');

      $username = $_POST['username'];
       $getpass = $_POST['password'];
       $password = md5($getpass);
                


                      
 $sql = "UPDATE tbllogin SET password='$password' WHERE username='$username'"; 
        
  if($conn->query($sql) === TRUE) {
        
          echo "<script>alert('Account Updated')</script>";
    }
    else{
            echo "<script>alert('Account not Updated')</script>";
    }
}

else if ($_REQUEST['action']=="Delete"){
  
 $username = $_POST['username'];

    $sql = "Delete From tbllogin where username ='$username'"; 
        
  if($conn->query($sql) === TRUE) {
        
          echo "<script>alert('Account Deleted')</script>";
    }
    else{
            echo "<script>alert('Account not Deleted')</script>";
    }

}

?>

<html>
<head>
    <link rel="shortcut icon" href="assets/img/logowhite.png" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Magiting | Admin</title>
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
                    <li role="presentation" class="nav-item" style="margin-left: 0px;"><a href="ADMIN.php" class="nav-link">MANAGE PRODUCTS</a></li>
                    <li role="presentation" class="nav-item"><a href="accounts.php" class="nav-link">ACCOUNTS</a></li>
                </ul><?php echo $menuBar; ?></div>
        </div>
    </nav>
    <section class="page-section about-heading">
        <div class="about-heading-content">
            <div class="row" style="margin-right: 0px;margin-left: 0px;">
                <div class="col-9 text-center mx-auto" style="background-color: #ffffff;color: rgb(0,0,0);opacity: 1;padding-bottom:20px; margin-top: 50px;margin-bottom: 50px;">
                    <h1 class="admin-heading" style="margin-top: 25px;margin-bottom: 25px;">MANAGE ACCOUNTS</h1>
                    <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" style="margin-right: 0px;">Transactions</button>
                        <div role="menu" class="dropdown-menu"><a role="presentation" href="accounts.php" class="dropdown-item">Accounts</a><a role="presentation" href="transactions.php" class="dropdown-item">Transactions</a></div>
                    </div>

                   <!-- Table Dynamic -->
 <div class="col-md-12" style="padding-left: 80px;padding-right: 80px;padding-top:30px;">
            <!-- Website Overview-->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Transactions</h3>
              
              </div>
              <div class="panel-body">
                
                <br>
                <div class="table-responsive"> 
                <table class="table table-striped table-hover" id="prodTbl">
                    <thead class="thead-dark" style="color: black; text-align: center;">                            
                       <tr>
                         <td>Transaction ID</td>
                         <td>userId</td>
                         <td>Date</td>
                         <td>Amount</td>
                         <td>Customer Name</td>
                         <td>Customer Address</td>
                       </tr>
                    </thead>                            
                
                    <?php
                       include("includes/indexdb.php");
                      $conn = new mysqli($servername, $username, $password, $dbname);
                       $sql = "SELECT * FROM tbltransactions";
                       $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                        // output data of each row
                       while($row = $result->fetch_assoc()) {
                    ?>
                    
                     <tr style="text-align: center; color: black;">
                         <td data-label="ID"><?php echo $row['transactionId']?></td>
                         <td data-label="Name"><?php echo $row['userId']?></td>
                         <td data-label="Description"><?php echo $row['date']?></td>
                         <td data-label="Description"><?php echo $row['totalAmount']?></td>
                         <td data-label="Description"><?php echo $row['customerName']?></td>
                         <td data-label="Description"><?php echo $row['customerAddress']?></td>
                        
                    
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

<!-- Modals -->
    
    <!-- Add Page -->
    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content" style="color: black; text-align: center;">


            <form name="myform" id="myform" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" enctype="multipart/form-data">

          <div class="modal-header">
              <h4 class="modal-title" id="myModalLabel">Transactions</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close" onclick="clearText();"><span aria-hidden="true">&times;</span></button>
          
          </div>
          <div class="modal-body">

            <div class="form-group">
                <label>Username</label>
                <input type="text" id="username" name="username" class="form-control" form="myform" readonly>
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="text" id="password" name="password" class="form-control" form="myform" required>
            </div>
        
                  

            <div class="form-group">

             <label>Role</label>
                <input type="text" id="role" name="role" class="form-control" form="myform" value="user" readonly>
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