 
 <?php
   include("connect.php");
   include("header.php");
  
 ?>

    
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead"><strong>CATAGORIES</strong></p>
                <div class="list-group">
                    <a href="#" class="list-group-item">Vegetable</a>
                    <a href="#" class="list-group-item">Fruits</a>
                </div>
            </div>

            <div class="col-md-9">
                       
                       
           <!-- Row Vegetable Section -->
             
              <div class="row">
                <div class="col-md-12">
                  <h3 class="page-header">Vegetables</h3>
                  <div class="portfolio-items">
                                          <?php
                                             if(isset($_GET["id"]))
												{
											     $id=$_GET["id"];
											     $res=mysql_query("select * from products where c_id='$id'");
												while($fetch_pro=mysql_fetch_array($res))
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
                                                        <a class="preview" href="" rel="prettyPhoto"><i class="fa fa-cart-arrow-down"></i>Add To Cart</a>
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
              
              </div>
           
       <!--Row Vegetable Section End --> 

       
                
                
                   

                    
                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
     
       <?php
	      include("footer.php");
	   ?>
   
    <!-- /.container -->

    
</body>

</html>
