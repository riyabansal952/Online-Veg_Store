<?php session_start(); ?>
<?php 
ob_start();
	if($_SESSION["user"]==null)
	{
	header("location:cus_login.php");
	ob_flush();
	}

?>
<?php
   include("connect.php");
   include("header.php");
?>

        
    <!-- Page Content -->
       <!--============================== Banner Section===================================== --> 
         
    <div class="container-fluid">    
       <div class="container">
      <!-- Product Heading -->          
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Product Detail</li>
                </ol>
            </div>
        </div>
        <!-- Product Heading End-->          
   
          
         <!--      Column 1  -->   
           <div class="col-md-2">
             
              <div class="row" style="border:1px #999999">
               
                 
                   <ul class="nav nav-pills nav-stacked">
                      <li class="text-head active"><a><span class="fa fa-list">Catagories</span></a></li>
                      
                      <li class="bg-info"><a>Vegetable</a></li>
                      <li class="bg-info"><a>Fruits</a></li>
                   </ul>
             
            </div>
             <div class="row">
                 <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Advertisment</h3></div>
                   <div class="panel-body">
                      <img class="img-responsive img-rounded" src="Admin/img/combo/1_combo.png">
                   </div> 
                  </div>                  
             </div>  
                  
              <?php /*?><div class="row">
                 <ul class="list-inline">
                    <li>
                       <h4 class="text-muted fa fa-globe">FOLLOW AND CONNECT</h4>
                        <ul class="list-inline list-social-icons">
                            <li><i class="fa fa-facebook-square fa-2x"></i></li>
                            <li><i class="fa fa-linkedin-square fa-2x"></i></li>
                            <li><i class="fa fa-google-plus-square fa-2x"></i></li>
                        </ul>  
                    </li> 
                 </ul> 
              </div> 
             
             <div class="row">
                <ul class="list-inline">
                   <li>
                      <form action="emailchk.php" method="post">
                        <h4 class="text-muted fa fa-envelope">JOIN OUR MAILING LIST</h4>
                         <div class="form-group">
                             <input type="text" placeholder="Enter Email Here.." name="mail"  required="required" />
                             <button class="btn-info" type="submit">Send</button>
                         </div>
                      </form>
                   </li>
                </ul> 
             </div>    
<?php */?>            
           </div>  
				<?php
            
            if(isset($_GET["pid"]))
            {
            
            $pid=$_GET["pid"];
            
            $p=mysqli_query($con,"select * from products where pr_id='$pid'");
            
            if(mysqli_num_rows($p)>0)
            {
            
            
            $product=mysqli_fetch_array($p);
            ?>
         
     <!--   Column 2  Image Slider Middle -->     
      <div class="col-md-7">
            <!-- Row Product Section -->
            <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Product Details</h3></div></div>
              <div class="row"> 
             <div class="col-md-6">
                <img class="img-responsive img-rounded img-thumbnail" src="Admin/uploads/<?php echo $product['pr_image'] ?>" alt="<?php echo $product['pr_name'] ?>">
             </div>
                  
            <div class="col-md-6">
                  <div class="panel panel-primary text-center">
                    <div class="panel-heading">
                        <h3 class="panel-title">Plus <span class="label label-success">Best Value</span></h3>
                    </div>
                    <div class="panel-body bg-info">
                        <span class="price">Special Offer<strong><?php echo $product['pr_sprice'] ?></strong></span>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Product Name <strong><?php echo $product['pr_name'] ?></strong></li>
                        <li class="list-group-item">Product Price<strong><?php echo $product['pr_price'] ?></strong></li>
                        <li class="list-group-item"><a href="shoppingcart.php?item=<?php echo $product["pr_id"];?>&price=<?php echo $product["pr_sprice"];?>&q=1" class="btn btn-primary"><span class="fa fa-shopping-cart">Add To Cart!</span></a>
                        </li>
                    </ul>
                </div>
                <h3>Product Description</h3>
                <p>Description About Product....</p>
                
<?php
 }}
?>
            </div>
              <!-- Row product Section End -->      
              <!-- Row Related Section -->
             
              <div class="row">
                <div class="col-md-12">
				                    <h3 class="page-header">Related Product</h3>
                  <div class="portfolio-items">
                                         <?php
										   $sql="Select * from products";
										   $res=mysqli_query($con,$sql);
										 ?>
                                         <?php
										   while($row=mysqli_fetch_array($res))
										   { 
										 ?>
                                        <div class="portfolio-item  Event3 col-xs-12 col-sm-4 col-md-3">


                                            <div class="recent-work-wrap fa-border">
                                                <img class="img-responsive img-rounded" src="Admin/uploads/<?php echo $row['pr_image'] ?>" style="height:190px;width:285px" alt="WP_20150412_002.jpg">
                                                <div class="overlay">
                                                    <div class="recent-work-inner">
                                                        <h3><a href="#">Special Offer<?php echo $row['pr_sprice'] ?></a></h3>
                                                        <p></p>
                                                        <a class="preview" href="product.php?pid=<?php echo $row['pr_id']; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i>View Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                        </div>
                                         <?php
										 
										   }
										  ?>
                                        <!--/.portfolio-item-->

                    </div>

                 </div>             
              
              </div>
           
      <!-- Row Related Section End -->
         
            

            
     
    </div>  
  </div> 
  
  
  
  
    <!--      Column 3  -->  
        
           <div class="col-md-3">
               <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Green Veg. Special</h3></div></div>
              <table class="table-responsive table-hover">
               <tr>
                   <td><img src="Admin/img/side icon/1426634511in_season.jpg" class="img-icon ch-item ch-img-1" /></td><td><h4 class="text-head">What's In Season?</h4><p class="text-dis">What's Seeking Now</p></td>
                </tr>
                <tr>
                   <td><img src="Admin/img/side icon/1418262003healthy_recipes.jpg" class="img-icon ch-item ch-img-2" /></td><td><h4 class="text-head">Quick Recipes</h4><p class="text-dis">30 Min Or Less</p></td>
                </tr>
                <tr>
                   <td><img src="Admin/img/side icon/1396478701fv_list.jpg" class="img-icon ch-item ch-img-3" /></td><td><h4 class="text-head">Fruits And Veggie List</h4><p class="text-dis">Nutrition,Storage,selction</p></td>
                </tr>
                <tr>
                   <td><img src="Admin/img/side icon/1426636685plate.jpg" class="img-icon ch-item ch-img-4" /></td><td><h4 class="text-head">How Much?My Plate</h4><p class="text-dis">What's Serving:Fruits,Veggie</p></td>
                </tr>
         
                  
              </table>
          <!-- row -->      
            <div class="row" style="border:1px #999999;margin-top:50px;margin-left:20px">
                 <div class="col-md-12">
                    <div class="panel panel-primary">
                       <div class="panel-heading">
                            <h3 class="panel-title text-center"><span class="fa fa-newspaper-o"> In The News</span></h3>
                        </div>
                      <ul class="list-group nav nav-stacked">
                        <li class=""><a>Vegetarian Diets</a></li>
                        <li class=""><a>100% Fruits Juice or Whole Fruits?</a></li>
                        <li class=""><a>Veggie And Your Weight</a></li>
                        <li class=""><a>Mediterranean Diets</a></li>
                      </ul>
                   </div>
                </div>
            </div>
          <!-- row -->
              
            </div>  
         </div>     
           
       </div>                           
     </div>
    </div> 
     <!-- Row --> 
     
     <!-- End  --> 
     <!-- ================Image Categories========== -->
              

     <!-- ================Image Categories End========== -->
  
    
    <!-- Footer -->
         <?php
		    include("footer.php"); 
		 ?>
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

