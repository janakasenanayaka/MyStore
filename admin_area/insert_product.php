
<?php include("includes/hedder.php"); ?>

<?php 

if (!isset($_SESSION['admin_email'])) {
    echo "<script>window.open('login.php','_self')</script>";
}else{

 ?>


<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <ol class="breadcrumb"><!-- breadcrumb Begin -->
            
            <li class="active"><!-- breadcrumb Begin -->
                
                <i class="fa fa-dashboard"></i> Dashboard / Insert Products
                
            </li><!-- breadcrumb Finish -->
            
        </ol><!-- breadcrumb Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->
       
<div class="row"><!-- row Begin -->
    
    <div class="col-lg-12"><!-- col-lg-12 Begin -->
        
        <div class="panel panel-default"><!-- panel panel-default Begin -->
            
           <div class="panel-heading"><!-- panel panel-default Begin -->
               
               <h3 class="panel-title"><!-- panel-title Begin -->
                   
                   <i class="fa fa-money fa-fw"></i> Insert Product 
                   
               </h3><!-- panel-title Finish -->
               
           </div> <!-- canel panel-default Finish -->
           
           <div class="panel-body"><!-- panel-body Begin -->
               
               <form method="post" class="form-horizontal" enctype="multipart/form-data"><!-- form-horizontal Begin -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Title </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_title" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Category </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="product_cat" class="form-control"><!-- form-control Begin -->
                              
                              <option> Select a Category Product </option>
                              
                              <?php 
                              
                              $get_p_cats = "select * from product_categories";
                              $run_p_cats = mysqli_query($con,$get_p_cats);
                              
                              while ($row_p_cats=mysqli_fetch_array($run_p_cats)){
                                  
                                  $p_cat_id = $row_p_cats['p_cat_id'];
                                  $p_cat_title = $row_p_cats['p_cat_title'];
                                  
                                  echo "
                                  
                                  <option value='$p_cat_id'> $p_cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Category </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <select name="cat" class="form-control"><!-- form-control Begin -->
                              
                              <option> Select a Category </option>
                              
                              <?php 
                              
                              $get_cat = "select * from categories";
                              $run_cat = mysqli_query($con,$get_cat);
                              
                              while ($row_cat=mysqli_fetch_array($run_cat)){
                                  
                                  $cat_id = $row_cat['cat_id'];
                                  $cat_title = $row_cat['cat_title'];
                                  
                                  echo "
                                  
                                  <option value='$cat_id'> $cat_title </option>
                                  
                                  ";
                                  
                              }
                              
                              ?>
                              
                          </select><!-- form-control Finish -->
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Image 1 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img1" type="file" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->


                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Image 2 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img2" type="file" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->


                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Image 3 </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_img3" type="file" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->



                   
                   


                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Price </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_price" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Keywords </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="product_keywords" type="text" class="form-control" required>
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->



                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"> Product Description
                       </label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                        <ul class="nav nav-tabs">
                         <li>
                           <a data-toggle="tab" href="#description" class="tab_link">Product Description</a>
                         </li>

                         <li>
                           <a data-toggle="tab" href="#features" class="tab_link">Product Features</a>
                         </li>

                         <li>
                            <a data-toggle="tab" href="#video" class="tab_link">Product Video</a>
                          </li>
                      </ul>


                      <div class="tab-content">

                      <div class="tab-pane fade in active" id="description">
                        <textarea name="product_desc" id="description"  class="form-control"></textarea>   
                      </div>

                      <div class="tab-pane fade in " id="features">
                        <textarea name="product_features" id="features"  class="form-control"></textarea>
                      </div>

                      <div class="tab-pane fade in" id="video">
                        <textarea name="product_video" id="video" class="form-control"></textarea>
                      </div>

                      </div>

                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->


                  

                   
                   <div class="form-group"><!-- form-group Begin -->
                       
                      <label class="col-md-3 control-label"></label> 
                      
                      <div class="col-md-6"><!-- col-md-6 Begin -->
                          
                          <input name="submit" value="Insert Product" type="submit" class="btn btn-primary form-control">
                          
                      </div><!-- col-md-6 Finish -->
                       
                   </div><!-- form-group Finish -->
                   
               </form><!-- form-horizontal Finish -->
               
           </div><!-- panel-body Finish -->
            
        </div><!-- canel panel-default Finish -->
        
    </div><!-- col-lg-12 Finish -->
    
</div><!-- row Finish -->


<?php include("includes/footer.php"); ?>


<?php 

if (isset($_POST['submit'])) {

	$product_title = $_POST['product_title'];
	$p_cat_id = $_POST['product_cat'];
	$cat_id = $_POST['cat'];
	$product_price = $_POST['product_price'];
	$product_keywords = $_POST['product_keywords'];
	$product_desc = $_POST['product_desc'];

  $product_features = $_POST['product_features'];
  $product_video = $_POST['product_video'];

    /// Getting the image from the field

        $product_image1 = $_FILES['product_img1']['name'];
        $product_image2 = $_FILES['product_img2']['name'];
        $product_image3 = $_FILES['product_img3']['name'];



        $product_image_tmp1 = $_FILES['product_img1']['tmp_name'];
        $product_image_tmp2 = $_FILES['product_img2']['tmp_name'];
        $product_image_tmp3 = $_FILES['product_img3']['tmp_name'];


        move_uploaded_file($product_image_tmp1,"product_images/$product_image1");
        move_uploaded_file($product_image_tmp2,"product_images/$product_image2");
        move_uploaded_file($product_image_tmp3,"product_images/$product_image3");
    

	$Insert_product = "insert into product (p_cat_id,cat_id,date,product_title,product_img1, product_img2,product_img3,product_price,product_keywords,product_desc,product_features,product_videos) values('$p_cat_id','$cat_id','NOW()', '$product_title',   
	   '$product_image1','$product_image2', '$product_image3', '$product_price', '$product_keywords', '$product_desc','$product_features','$product_video')";

	$run_product = mysqli_query($con,$Insert_product);

	if ($run_product) {
		 echo "<script>alert('Product has been inserted!')</script>";
		echo "<script>window.open('index.php?view_products', '_self')</script>";
	}
}



 ?>
<?php } ?>



