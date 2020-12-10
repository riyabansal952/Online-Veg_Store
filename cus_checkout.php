<?php include ('cust_head.php');?>
<?php include ('connect.php');?>

<?php

if($_SESSION["user"]==null)
{	
header("location:cus_login.php");
ob_flush();
}else{

$id=$_SESSION["username"];
}
?>


<?php
if(isset($_SESSION["grandtotal"]))
{
  $grand= $_SESSION["grandtotal"];
  echo "<font size='+2' color='green'>Shopping Amount: Rs.".$grand."</font>";
}
?>

<?php

if(isset($_POST["Save"]))
{
$sname=$_POST["sname"];
$semail=$_POST["semail"];
$smobile=$_POST["smobile"];
$saddress=$_POST["saddress"];
$scity=$_POST["scity"];
$state=$_POST["state"];

mysqli_query($con,"insert into shippingdetails (sname,semail,smobile,saddress,scity) values('$sname','$semail','$smobile','$saddress','$scity')");

header("location:cus_payment.php");
ob_flush();
}else{

$custId=mysqli_query($con,"select * from registeration where id='$id'");
$customer=mysqli_fetch_array($custId);
}

?>

 <div class="container-fluid">    
       <div class="container">
          
         <!--      Column 1  -->   
             <?php include("cust_sidenav.php"); ?>
              
     <!-- ==========================  Column 2============================= -->     
      <div class="col-md-7">
      
              <div class="row">
                  <div class="col-md-12">
                        <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Customer Chechout</h3></div></div>
                       <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
                          <h2>Shipping Information</h2>
                              <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                              <tr>
                              <td>Name:</td><td>
                              <input type="text" name="sname" class="input" value="<?php echo $customer['name'];?>"></td>
                              </tr>
                              <tr>
                              <td>Email:</td><td><input type="text" class="input" name="semail" value="<?php echo $customer['email'];?>"></td>
                              </tr>
                              <tr>
                              <td>Mobile No:</td><td><input type="text" class="input" name="smobile" value="<?php echo $customer['contact'];?>"></td>
                              </tr>
                              <tr>
                              <td>Shipping Address:</td><td><textarea name="saddress" row="4" cols="5" class="input"><?php echo $customer['address'];?></textarea></td>
                              </tr>
                              <tr>
                              <td>City:</td><td><input type="text" name="scity" class="input" value="<?php echo $customer['city'];?>"></td>
                              </tr>
                              
                              <tr>
                              <td colspan="2"><input type="submit" name="Save" value="Save details" class="submit-btn"></td>
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

<?php include ('footer.php');?>