
<?php include ('cust_head.php');?>
<?php include ('connect.php');?>


<?php

if(isset($_POST["payment"]))
{
$paymentmode=$_POST["paymentmode"];
$bank=$_POST["bank"];
$cardtype=$_POST["cardtype"];
$cardnumber=$_POST["cardnumber"];
$cvv=$_POST["cvv"];

$grand= $_SESSION["grandtotal"];
$customer_id=$_SESSION["user"];
$paymentdate=date('Y-m-d');
$deliverydate=date('Y-m-d', strtotime("+1 days"));

$product=$_SESSION["product"];

$shipproduct=implode(",", $product);

mysqli_query($con,"insert into orderdetails (PaymentMode,Bank,Cardtype,Cardnumber,Products,TotalAmount,Paymentdate,Deliverydate,c_id,status) values('$paymentmode','$bank','$cardtype','$cardnumber','$shipproduct','$grand','$paymentdate','$deliverydate','$customer_id','pending')");

$id = mysqli_insert_id();

header("location:cus_confirm.php?orderid=".$id);
}


?>

  <div class="container-fluid">    
       <div class="container">
          
         <!-- ===============     Column 1 ======================= -->   
             <?php include("cust_sidenav.php"); ?>
          <!-- ===============     Column 1 End ======================= -->     
     <!-- ==========================  Column 2============================= -->     
      <div class="col-md-7">
      
              <div class="row">
                  <div class="col-md-12">
                        <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Customer Payment</h3></div></div>
                       <form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
                          <h2>Payment Information</h2>
                              <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                              <tr>
                              <td>Payment Mode:</td><td>
                              <select name="paymentmode" class="input"><option>Credit Card</option><option>Debit Card</option></select></td>
                              </tr>
                              <tr>
                              <td>Choose Your Bank:</td><td><select name="bank" class="input"><option>STATE BANK OF INDIA</option><option>HDFC BANK</option><option>ICICI BANK</option><option>CITY BANK</option></select></td>
                              </tr>
                              <tr>
                              <td>Card Type:</td><td><select name="cardtype" class="input"><option>Master Card</option><option>Visa Card</option><option>Mastero Card</option></select></td>
                              </tr>
                              <tr>
                              <td>Card Number:</td><td><input type="text" class="input" name="cardnumber"></td>
                              </tr>
                              <tr>
                              <td>CCV:</td><td><input type="password" class="input" name="cvv"></td>
                              </tr>
                              
                              <tr>
                              <td colspan="2"><button type="SUBMIT" name="payment" value="Make Payment" class="btn-success"><span class="fa fa-rupee"> Make Payment</span></button></td>
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

<?php include 'footer.php';?>