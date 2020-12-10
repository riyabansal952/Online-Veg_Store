 
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
                    <a href="#" class="list-group-item">Combo Pack</a>
                </div>
            </div>

            <div class="col-md-9">

                
                 <!-- Row Vegetable Section -->
             
              <div class="row">
                <div class="col-md-12">
                  <h3 class="page-header">Fruits</h3>
                  <div class="portfolio-items">
                                          <?php
										   $sql="Select * from products";
										   $res=mysqli_query($con,$sql);
										 ?>
                                         <?php
										   while($fetch_pro=mysqli_fetch_array($res))
										   { 
										 ?>
                                        <div class="portfolio-item  Event3 col-xs-12 col-sm-4 col-md-3">
                                        
                                            <div class="recent-work-wrap fa-border">
                                                <img class="img-responsive img-rounded" src="Admin/uploads/<?php echo $fetch_pro['pr_image'] ?>" style="height:190px;width:285px" alt="WP_20150412_002.jpg">
                                                <div class="caption">
                                                   <h4 class="pull-right">Rs.<?php echo $fetch_pro['pr_price'] ?></h4>
                                                    <h4><a href="#"><?php echo $fetch_pro['pr_name'] ?></a>
                                                   </h4>
                                                   <p>Description</p>
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
                                                        <h3><a href="#">Rs.<?php echo $fetch_pro['pr_price'] ?></a></h3>
                                                        <p></p>
                                                        <a class="preview" href="/img/gallery/WP_20150412_002.jpg" rel="prettyPhoto"><i class="fa fa-eye"></i> View More</a>
                                                    </div>
                                                </div>
                                            </div>
                                         
                                        </div>
                                         <?php
										 
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
