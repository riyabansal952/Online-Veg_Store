<?php include ('cust_head.php');?>
<?php include ('connect.php');?>

 <div class="container-fluid">    
       <div class="container">
          
         <!--      Column 1  -->   
             <?php include("cust_sidenav.php"); ?>
              
     <!-- ==========================  Column 2============================= -->     
      <div class="col-md-7">
      
              <div class="row">
                  <div class="col-md-12">
                        <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Order Confirmation!!</h3></div></div>
                          <h2>Confirmation!!</h2>
                              <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                              <tr>
                              <td colspan="2">
									  <?php  
                                      $orderid="";
                                      if(isset($_GET["orderid"]))
                                      {
                                      
                                      $orderid=$_GET["orderid"];
                                          
                                      
                                      unset($_SESSION["product"]);
                                      unset($_SESSION["price"]);
                                      unset($_SESSION["quantity"]);
                                      
                                      
                                      }
                                      
                                      ?>
                                  <h2><b>Thank you for Shopping with us.</b></h2>

                                  <p><h2>Your Order Id is <b><?php echo $orderid; ?> </b>. Your Order will be delivered within 2 working Hours.</h2></p>
    
                               </td>
                              </tr>
                                                            
                              
                              </table>                  
                      </div>
               </div>   
                 
             
             
     <!-- =====================  Column 2  End==========================-->        
      </div> 
  
  
  
  
        <!--  =====================    Column 3 ======================= -->      
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
            <div class="row" style="border:1px #999999;margin-top:50px;margin-left:20px">
                 <div class="col-md-12">
                 
                   <ul class="nav nav-pills nav-stacked well">
                      <li class="text-head text-center active"><a class="fa fa-newspaper-o"> IN THE NEWS</a></li>
                      
                      <li><a>Vegetarian Diets</a></li>
                      <li><a>100% Fruits Juice or Whole Fruits?</a></li>
                      <li><a>Veggie And Your Weight</a></li>
                      <li><a>Mediterranean Diets</a></li>
                   </ul>
                 </div>  
            </div>  
         </div>     
           
       </div>                           
     </div>
    </div> 
     <!-- Row --> 
     
     <!--============== Column End ==================== --> 
     <!-- ================Image Categories========== -->
              

     <!-- ================Image Categories End========== -->  

<?php include ('footer.php');?>