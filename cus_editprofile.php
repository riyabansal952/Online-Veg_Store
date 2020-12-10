<?php ob_start(); 

?>

<?php include("cust_head.php"); ?>
<?php include 'connect.php' ?>


            <?php 
          $data=array();
            
          if(isset($_POST["update"]))
          {
                
                $custid=$_SESSION["id"];
				$name=$_POST["cname"];
				$email=$_POST["cemail"];
				$mobile=$_POST["cmobile"];
				$password=$_POST["cpassword"];
				$address=$_POST["caddress"];
				$city=$_POST["ccity"];

            mysql_query("update registeration set name='$name',email='$email',contact='$mobile',password='$password',city='$city',address='$address' where id='$custid'");

           header("location:viewprofile.php");
           ob_flush();
            }else{
            
           
               if(isset($_SESSION["user"]))
               {
                   
                   $custid=$_SESSION["user"];
                    
                    $result=mysql_query("select * from registeration where id='$custid'");
                    
                    $data= mysql_fetch_array($result);
                    
                    
               }
                
            
            
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
                        <form method="post" action="cus_editprofile.php">
                          <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                           
                              <td>Name</td>
                              <td><input type="text" class="input" name="cname" value="<?php echo $data["name"];?>"></td>
                            </tr>
                            <tr>
                              <td>Email</td>
                              <td><input type="text" class="input" name="cemail" value="<?php echo $data["email"];?>"></td>
                            </tr>
                            <tr>
                              <td>Mobile</td>
                              <td><input type="text" class="input" name="cmobile" value="<?php echo $data["contact"];?>"></td>
                            </tr>
                            <tr>
                              <td>Password</td>
                              <td><input type="password" class="input" name="cpassword" value="<?php echo $data["password"];?>"></td>
                            </tr>
                            <tr>
                              <td>Address</td>
                              <td><input type="text" class="input" name="caddress" value="<?php echo $data["Address"];?>"></td>
                            </tr> 
                              <tr>
                              <td>City</td>
                              <td><input type="text" class="input" name="ccity" value="<?php echo $data["city"];?>"></td>
                            </tr>
                            
                             
                           
                             <tr>
                              <td><button type="reset" value="cancel" class="btn-danger fa fa-remove">Cancel</button></td>
                              <td><button type="submit" class="btn-success fa fa-pencil" name="update" value="Save">Save</button></td>
                            </tr>
                          </table>
                      </form>
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