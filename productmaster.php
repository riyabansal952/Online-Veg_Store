 
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
                    <small>View</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">View Product</li>
                </ol>
            </div>
        </div>
        <!-- Product Heading End-->          
   
          
         <!--      Column 1  -->   
           <div class="col-md-2">
             
              <div class="row" style="border:1px #999999">
                   <ul class="nav nav-pills nav-stacked">
                      <li class="text-head text-center active"><a><span class="fa fa-list">Catagories</span></a></li>
                      
                      <li class="bg-info"><a>Vegetable</a></li>
                      <li class="bg-info"><a>Fruits</a></li>
                   </ul>
              </div> <!-- row -->
              <div class="row">
                 <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Advertisment</h3></div>
                   <div class="panel-body">
                      <img class="img-responsive img-rounded" src="Admin/img/combo/1_combo.png">
                   </div> 
                  </div>                  
             </div>  <!-- row -->
 
                  
         </div>  
              
     <!--   Column 2  Image Slider Middle -->     
      <div class="col-md-7">
            <!-- Row Product Section -->
              <div class="row">
                <div class="col-md-12">
                  <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Feature Product</h3></div></div>
                  <div class="portfolio-items">
                                          <?php
                                             if(isset($_GET["id"]))
												{
											     $id=$_GET["id"];
											     $res=mysqli_query($con,"select * from products where c_id='$id'");
												while($fetch_pro=mysqli_fetch_array($res))
												{
											?>

                                         <div class="portfolio-item  Event3 col-xs-12 col-sm-4 col-md-3">
                                        
                                            <div class="recent-work-wrap fa-border">
                                                <img class="img-responsive img-rounded" src="Admin/uploads/<?php echo $fetch_pro['pr_image'] ?>" style="height:190px;width:285px" alt="WP_20150412_002.jpg">
                                                <div class="caption">
                                                   <h5 class="pull-right"><i style="text-decoration:line-through">Rs.<?php echo $fetch_pro['pr_price'] ?></i></h5>
                                                    <h4><a href="#"><?php echo $fetch_pro['pr_name'] ?></a>
                                                   </h4>
                                                   <h4><p style="text-decoration:blink">Special offer:-<?php echo $fetch_pro['pr_sprice'] ?></p></h4>
                                                </div>
                                                <div class="ratings">
                                                  <p class="pull-right">15 reviews</p>
                                                    <p>
                                                     <span class="glyphicon glyphicon-star"></span>
                                                     <span class="glyphicon glyphicon-star"></span>
                                                     <span class="glyphicon glyphicon-star"></span>
                                                     <span class="glyphicon glyphicon-star"></span>
                                                     <span class="glyphicon glyphicon-star"></span>
                                                    </p>
                                                </div>
   
                                                <div class="overlay">
                                                    <div class="recent-work-inner">
                                                        <h3><a href="#">Rs.<?php echo $fetch_pro['pr_sprice'] ?></a></h3>
                                                        <p></p>
                                                        <a class="preview" href="product.php?pid=<?php echo $fetch_pro['pr_id']; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i>View Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        </div>
                                         <?php
										   }
										   }
										  ?>
                                       <!-- Portfolio -->
                                    </div>
                       </div>                         
              <!-- Row product Section End -->      
                       
            

            
     
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
     <!-- Row --> 
     
     <!-- End  --> 
     <!-- ================Image Categories========== -->
              

     <!-- ================Image Categories End========== -->

    
    <?php
  include("footer.php");
?>


  
