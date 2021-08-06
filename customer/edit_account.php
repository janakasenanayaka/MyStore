
<?php 

$customer_session = $_SESSION['customer_email'];

$get_customer = "select * from customers where customers_email='$customer_session'";

$run_customer = mysqli_query($con,$get_customer);

$row_customer = mysqli_fetch_array($run_customer);

$customer_id = $row_customer['customers_id'];

$customer_name = $row_customer['customers_name'];

$customer_email = $row_customer['customers_email'];

$customer_country = $row_customer['customers_country'];

$customer_city = $row_customer['customers_city'];

$customer_contact = $row_customer['customers_contact'];

$customer_address = $row_customer['customers_address'];

$customer_image = $row_customer['customers_image'];

?>


<h1 align="center">Edit Your Account </h1>


  <form action="" method="post" enctype="multipart/form-data"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Costumer Name</label>
                               
                               <input type="text" class="form-control" name="c_name" value="<?php echo $customer_name; ?>" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Costumer Email</label>
                               
                               <input type="text" class="form-control" name="c_email" value="<?php echo $customer_email; ?>" required>
                               
                           </div><!-- form-group Finish -->
                           
                 
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Costumer Country</label>
                               
                               <input type="text" class="form-control" name="c_country" value="<?php echo $customer_country; ?>" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Costumer City</label>
                               
                               <input type="text" class="form-control" name="c_city" value="<?php echo $customer_city; ?>" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Costumer Contact</label>
                               
                               <input type="text" class="form-control" name="c_contact" value="<?php echo $customer_contact; ?>" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Costumer Address</label>
                               
                               <input type="text" class="form-control" name="c_address" value="<?php echo $customer_address; ?>" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group form"><!-- form-group Begin -->
                               
                               <label>Costumer Profile Picture</label>
                               
                               <input type="file" class="form-control form-height-custom" name="c_image">
                               <img class="img-responsive" src="customer_images/<?php echo $customer_image ?>" alt="">
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="update" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i> Update Now
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->


                       <?php 

if(isset($_POST['update'])){
    
    $update_id = $customer_id;
    
    $c_name = $_POST['c_name'];
    
    $c_email = $_POST['c_email'];
    
    $c_country = $_POST['c_country'];
    
    $c_city = $_POST['c_city'];
    
    $c_address = $_POST['c_address'];
    
    $c_contact = $_POST['c_contact'];
    
    $c_image = $_FILES['c_image']['name'];
    
    $c_image_tmp = $_FILES['c_image']['tmp_name'];
    
    move_uploaded_file ($c_image_tmp,"customer_images/$c_image");
    
    $update_customer = "update customers set customers_name='$c_name',customers_email='$c_email',customers_country='$c_country',customers_city='$c_city',customers_address='$c_address',customers_contact='$c_contact',customers_image='$c_image' where customers_id='$update_id' ";
    
    $run_customer = mysqli_query($con,$update_customer);
    
    if($run_customer){
        
        echo "<script>alert('Your account has been edited, to complete the process, please Relogin')</script>";
        
        echo "<script>window.open('logout.php','_self')</script>";
        
    }
    
}

?>