<?php ob_start();?>
<?php include("cust_head.php"); ?>


<?php   

$profile=array();
if(isset($_SESSION["user"]))
{

$userid=$_SESSION["user"];


$result=mysqli_query($con,"select * from registeration where email='$userid'");

$profile=mysqli_fetch_array($result);
}else{

header("location:index.php");
ob_flush();

}

?>

<!--============================== Banner Section===================================== --> 
         
    <div class="container-fluid">    
       <div class="container">
          
         <!--      Column 1  -->   
             <?php include("cust_sidenav.php"); ?>              
     <!-- ==========================  Column 2============================= -->     
      <div class="col-md-7">
      
              <div class="row">
                  <div class="col-md-12">
                        <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Customer Dashboard</h3></div></div>
                        <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                           <thead>
                             <tr>
                                <th width="200px" bgcolor="green">Name</th><td><?php echo $profile["name"]; ?></td>
                             </tr>
                              <tr>
                                <th>Email</th> <td><?php echo $profile["email"]; ?></td>
                              </tr>
                              <tr>
                                <th>Mobile</th><td><?php echo $profile["contact"]; ?></td>
                              </tr>
                              <tr>
                                <th>Address</th><td><?php echo $profile["address"]; ?></td>
                              </tr> 
                              <tr>
                                <th>City</th><td><?php echo $profile["city"]; ?></td>
                              </tr>
                              
                            </thead> 
                            
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

<?php include("footer.php"); ?>


