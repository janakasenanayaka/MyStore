<?php 

    $active='Account';
    include("includes/hedder.php");

?>
   
   <div id="content"><!-- #content Begin -->
       <div class="container"><!-- container Begin -->
           <div class="col-md-12"><!-- col-md-12 Begin -->
               
               <ul class="breadcrumb"><!-- breadcrumb Begin -->
                   <li>
                       <a href="index.php">Home</a>
                   </li>
                   <li>
                       Register
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div class="col-md-3"><!-- col-md-3 Begin -->
   
   <?php 
    
    include("includes/sidebar.php");
    
    ?>
               
           </div><!-- col-md-3 Finish -->

           
           <div class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Register a new account </h2>
                           
                       </center><!-- center Finish -->
                       
                       <form action="customer_register.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Name</label>
                               
                               <input type="text" class="form-control" name="c_name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Email</label>
                               
                               <input type="text" class="form-control" name="c_email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Password</label>
                               
                               <input type="password" class="form-control" id="password_confirm1" name="c_pass" required>
                               
                           </div><!-- form-group Finish -->


                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Confirm Password</label>
                               
                               <input type="password" class="form-control" id="password_confirm2" name="confirm_password" required>
                               <p id="status_for_confirm_password"></p>
                               
                           </div><!-- form-group Finish -->

                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Country</label>
                               
                               <input type="text" class="form-control" name="c_country" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your City</label>
                               
                               <input type="text" class="form-control" name="c_city" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Contact</label>
                               
                               <input type="text" class="form-control" name="c_contact" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Address</label>
                               
                               <input type="text" class="form-control" name="c_address" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Your Profile Picture</label>
                               
                               <input type="file" class="form-control form-height-custom" name="c_image" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="register" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Register
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>


<?php 

if(isset($_POST['register'])){

  if(!empty($_POST['c_email']) && !empty($_POST['c_pass']) && !empty($_POST['confirm_password']) && !empty($_POST['c_name'])){
    
    $c_name = $_POST['c_name'];
    
    $c_email = trim($_POST['c_email']);
    
    $c_pass = trim($_POST['c_pass']);

    $hash_password = md5($c_pass);

    $confirm_password = trim($_POST['confirm_password']);
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_address = $_POST['c_address'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    $c_ip = getRealIpUser();
    
    

    $check_exist = mysqli_query($con,"select * from customers where customers_email = '$c_email'");
   
    $email_count = mysqli_num_rows($check_exist);
   
    $row_register = mysqli_fetch_array($check_exist);

    if($email_count > 0){
   echo "<script>alert('Sorry, your email $email address already exist in our database !')</script>";
   
   }elseif($row_register['customers_email'] !=$c_email && $c_pass == $confirm_password ){
     move_uploaded_file($c_image_tmp,"customer/customer_images/$c_image");
  
    $insert_customer = "insert into customers (customers_name,customers_email,customers_pass,customers_country,customers_city,customers_contact,customers_address,customers_image,customers_ip) values ('$c_name','$c_email','$hash_password','$c_country','$c_city','$c_contact','$c_address','$c_image','$c_ip')";
    
    $run_customer = mysqli_query($con,$insert_customer);


  if($run_customer){
  $sel_customer = mysqli_query($con,"select * from customers where customers_email = '$c_email'");
  $row_customer = mysqli_fetch_array($sel_customer);
  
  $_SESSION['customer_email']=$c_email;
  }
    
    $sel_cart = "select * from cart where ip_add='$c_ip'";
    
    $run_cart = mysqli_query($con,$sel_cart);
    
    $check_cart = mysqli_num_rows($run_cart);
    
    if($check_cart>0){
        
        /// If register have items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('checkout.php','_self')</script>";
        
    }else{
        
        /// If register without items in cart ///
        
        $_SESSION['customer_email']=$c_email;
        
        echo "<script>alert('You have been Registered Sucessfully')</script>";
        
        echo "<script>window.open('index.php','_self')</script>";
        
    }
    }
  }   
}

?>

<?php include("includes/footer.php"); ?>

<script>
  $ (document).ready(function() {
   $("#password_confirm2").on('keyup', function() {

    var password_confirm1 = $("#password_confirm1").val();

    var password_confirm2 = $("#password_confirm2").val();

    //alert (password_confirm2);

    if (password_confirm1 == password_confirm2) {
         $("#status_for_confirm_password").html('<strong>password match</strong>');
    }else{
        $("#status_for_confirm_password").html('<strong>password do not match</strong>');
    }

   });
  });
</script>