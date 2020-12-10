
  
  <?php
     include("header.php");
  ?>        
  <?php
     include("connect.php");
  ?> 
  
   <!--============================== Banner Section===================================== --> 
         
    <div class="container-fluid">    
       <div class="container">
          
         <!--      Column 1  -->   
           <div class="col-md-2">
             
              <div class="row">
               <ul class="list-inline">
                 <li>
                  <h4 class="text-muted fa fa-book"> WHO WE ARE </h4>
                    <ul class="list-inline"><li class="text-lowercase">We can help you eat more fruits &amp; vegetables! Fruits &amp; Veggies–More Matters® is a health initiative focused on helping Indians increase fruit &amp; vegetable consumption for better health. <strong><a href="">More</a></strong></li></ul> 
                 </li>
               </ul>
              </div>
                  
              <div class="row">
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
             
             <div class="row">
                 <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title"><span class="fa fa-facebook-official"> Like Box</span></h3></div>
                     
                      <div class="fb-like-box" data-href="https://www.facebook.com/pages/Green-Veg/1573058496290567?ref=hl" data-width="240" data-height="225" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="false" data-show-border="true"></div>   
                       </div>
                  
                  </div>                  
             </div>
              
              
     <!--   Column 2  Image Slider Middle -->     
      <div class="col-md-7">
      
              <div class="row">
                  <div class="col-md-12">
                  
                    
                          <div class="box">
                              <div class="carousel slide" id="carousel-slide">
                                      <ul class="carousel-indicators">
                                         <li data-target="#carousel-slide" data-slide-to="0" class="active"></li>
                                         <li data-target="#carousel-slide" data-slide-to="1"></li>
                                         <li data-target="#carousel-slide" data-slide-to="2"></li>
                                      </ul>
                                   <ul class="list-group list-group-item">   
                                   <div class="carousel-inner">
                                     <?php
									    $sql="select * from slider";
										$res=mysqli_query($con,$sql);
								     ?>
                                     <?php
									 $i=0;
							          while($row=mysqli_fetch_array($res))
									   { 
									   ?>
                                      <li class="item <?php echo ( $i==0? 'active':''); ?>">
                                         <img src="Admin/slider/<?php echo $row['slider_img'] ?>" class="img-responsive" />
                                       </li>
                                      <?php
									  $i++;
									   }
                                      ?> 
                                   </div>
                                  </ul>  
                                   <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-slide" data-slide="prev">
                                       <span class="icon-prev"></span>
                                    </a> 
                                    <a class="right carousel-control" href="#carousel-slide" data-slide="next">
                                       <span class="icon-next"></span>
                                    </a>   
                              </div>
                         </div>
                    </div>
                    
    
         
       <!-- Row Vegetable Section -->
             
              <div class="row">
                <div class="col-md-12">
                  <h3 class="page-header">All Products</h3>
                  <div class="portfolio-items">
				                    <?php
                                        
                                        
                                                  
                                               $sql=("Select * from products");
											   $res=mysqli_query($con,$sql);
                                        while($fetch_pro=mysqli_fetch_array($res))
                                        {
                                        
                                        ?>
                                      <div class="portfolio-item  Event3 col-xs-12 col-sm-4 col-md-3">
                                       <div class="recent-work-wrap fa-border">
                                                <img class="img-responsive img-rounded" src="Admin/uploads/<?php echo $fetch_pro['pr_image'] ?>" style="height:190px;width:285px" alt="WP_20150412_002.jpg">
                                                <div class="overlay">
                                                    <div class="recent-work-inner">
                                                        <h3><a href="#">Special Offer<?php echo $fetch_pro['pr_sprice'] ?></a></h3>
                                                        <p></p>
                                                        <a class="preview" href="product.php?pid=<?php echo $fetch_pro['pr_id']; ?>" rel="prettyPhoto"><i class="fa fa-eye"></i>View Detail</a>
                                                    </div>
                                                </div>
                                            </div>
                                             
                                        </div>
                                         <?php
									
										   }
										  ?>
                                           <span class="pull-right"><a href="#">More<i class="fa fa-external-link"></i></a></span>
                                        <!--/.portfolio-item-->
                                        



                                        

                    </div>
                  </div>             
              
              </div>
           
       
                      
 <!-- Row --><hr /> <!-- Row end -->
      
      <!-- Row Feature Section -->
    <div class="well">  
      <h3 class="page-header">Features</h3>        
      <div class="row">
          <div class="col-md-4">
               <h4 class="text-head">Tip Of The Day</h4>
               <p>Order a Small Salad With Your Meal</p>
          </div>
          <div class="col-md-4">
               <h4 class="text-head">Recipes Of The Day</h4> 
               <div>
                 <img class="img-rounded" src="Admin/img/5460_Hero.jpg" height="80px" width="150px" />
                 <p></p>  
               </div>
          </div>
          <div class="col-md-4">
               <h4 class="text-head">Healthy BreakFast Idea</h4> 
               <ul class="nav nav-pills">
                 <li>#Bannaa Waldrop</li>
                 <li>#Bell Paper Omlet</li>
                 <li>#Museli</li>
                 <li>#BlueBerry</li>
                 <li>#Break Fast Smoothie</li>
               </ul>
          </div>
       </div>
     </div>  
     <!-- Row Feature Section End --> 
 
       <!-- Row --><hr /> <!-- Row end -->
        
     
    </div>  
  </div> 
  
  
  
  
 <!--      Column 3  -->      
           <div class="col-md-3">
             
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
     <!-- Row --> 
     
     <!-- End  --> 
     <!-- ================Image Categories========== -->
              

     <!-- ================Image Categories End========== -->
  
  
  <!-- footer Section -->
      <?php
	      include("footer.php");
	  ?>
  <!-- footer Section End -->
     



 

                     
</body>
</html>



