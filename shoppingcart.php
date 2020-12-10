<?php session_start(); ?>
<?php 
ob_start();
	if($_SESSION["user"]==null)
	{
	header("location:cus_login.php");
	ob_flush();
	}

?>
<?php include("header.php"); ?>



<?php
                      
                      function reindex(&$the_array) { 
                      $temp = $the_array; 
                      $the_array = array(); 
                      foreach($temp as $value) { 
                      $the_array[] = $value;  
                      }  
                      }  
                      
                      
                      $product=array();
                      $price=array();
                      $quantity=array();
                      
                      
                      if(isset($_SESSION["product"]))
                      {
                      $product=$_SESSION["product"];
                      }
                      
                      if(isset($_SESSION["price"]))
                      {
                      $price=$_SESSION["price"];
                      }
                      
                      if(isset($_SESSION["quantity"]))
                      {
                      $quantity=$_SESSION["quantity"];
                      }
                      
                      // this code for check duplicate items in product array 
                      if(isset($_GET["item"]))
                      {
                      $flag=0;
                      
                      $p=$_GET["item"];
                      
                      for($i=0;$i<count($product);$i++)
                      {
                       if($product[$i]==$p)
                       {
                          $quantity[$i]+=1;
                          $flag=1;
                       }
                      
                      }
                      
                      
                      if($flag==0)
                      {
                      $product[]=$_GET["item"];
                      $price[]=$_GET["price"];
                      $quantity[]=$_GET["q"];
                      }
                      
                      }
                      
                      
                      //for update quantity 
                      if(isset($_POST["submit"]))
                      {
                      
                      for($j=0;$j<count($product);$j++)
                      {	
                      $quantity[$j]=$_POST["pro".$j];
                      }
                      
                      
                      }
                      
                      
                      if(isset($_REQUEST["removeid"]))
                      {
                      
                      $removeid=$_REQUEST["removeid"];
                      
                      for($i=count($product)-1;$i>=0;$i--)
                      {
                       if($product[$i]==$removeid)
                       {
                              unset($product[$i]);
                              unset($quantity[$i]);
                              unset($price[$i]);
                          
                       }
                      
                      }
                      
                      reindex($product);
                      reindex($quantity);
                      reindex($price);
                      
                      
                      }
                      
                      
                      
                      $_SESSION["product"]=$product;
                      $_SESSION["price"]=$price;
                      $_SESSION["quantity"]=$quantity;
   ?>


<!-- Page Content -->
       <!--============================== Banner Section===================================== --> 
         
    <div class="container-fluid">    
       <div class="container">
      <!-- Product Heading -->          
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Shopping 
                    <small class="fa fa-shopping-cart">Cart Detail</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Shopping Cart Detail</li>
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
              
     <!--   Column 2  Image Slider Middle -->     
      <div class="col-md-7">
            <!-- Row Product Section -->
            <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Shopping Cart Details</h3></div></div>
                                    <div id="main">
                      
                          <div id="inside">
                                            
                      <?php 
                      
                      if(count($product)>0)
                      {
                      
                      ?>
                      
                      <form method="post" action="shoppingcart.php">
                      <table class="table table-striped table-bordered bootstrap-datatable datatable responsive"><thead><tr><th>Product</th><th>Quantity</th><th>Price</th><th>Total</th><th>&nbsp;</th></tr></thead>
                      
                      <?php
                      $grand=0;
                      for($i=0;$i<count($product);$i++)
                      {
                      
                      ?>
                      <tbody>
                      <tr>
                      
                      <?php  
                      
                      $pro= mysqli_query($con,"select pr_name from products where pr_id='".$product[$i]."'");
                      
                      $productName= mysqli_fetch_assoc($pro);
                      
                      
                      ?>
                      
                      
                      <td><?php echo $productName['pr_name']; ?></td>
                      <td><input type="text" value='<?php echo $quantity[$i]; ?>' name="pro<?php echo $i;?>"></td>
                      <td>INR <?php echo $price[$i]; ?></td>
                      <td>INR <?php echo $quantity[$i]*$price[$i]; ?></td>
                      
                      <td><a class="btn btn-danger" href="shoppingcart.php?removeid=<?php echo $product[$i];?>"><i class="fa fa-trash icon-white"></i>
                         Remove
                        </a>
                      <?php   $grand+=$quantity[$i]*$price[$i]; ?>
                      </tr>
                      
                      <?php }?>
                      <tr>
                      <td><button class="btn btn-info" type="submit" name="submit" value="update"><i class="glyphicon glyphicon-pencil icon-white"></i>Update</button></td>
                      <td colspan="2" align="right">Grand Total</td>
                      <td>
                      INR <?php echo $grand;
                      
                      $_SESSION["grandtotal"]=$grand;
                      ?>
                      </td>
                      </tr>
                      </tbody>
                      </table>
                      </form>
                      
                      <div class="clear"></div>
                      <br>
                      <a class="btn btn-primary" href="index.php"><i class="fa fa-shopping-cart icon-white"></i>
                         Continue Shopping
                        </a>
                      
                      
                      <div style="float:right;"><a class="btn btn-primary" href="cus_checkout.php"><i class="fa fa-check icon-white"></i>
                         CheckOut
                        </a></div>
                      
                      
                      
                      
                      <?php } else{?>
                      <div style="padding:10px;">
                      
                          <span style="font-weight:bold; text-align:center;font-family:verdana;">There is no products in your Shopping cart. </span>
                      <div class="clear"></div>
                      <br>
                      <a href="index.php" class="submit-btn" style="text-decoration:none;">Add Product</a>
                      
                      
                      </div>
                      
                      <?php
                      
                      }
                      ?>
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
    </div> 
     <!-- Row --> 
     
     <!-- End  --> 
     <!-- ================Image Categories========== -->
              

     <!-- ================Image Categories End========== -->



<?php include("footer.php");?>