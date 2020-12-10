<?php
ob_start();
session_start();
?>

<?php include("header.php");?>
<?php include("connect.php");?>

<?php
$message="";
if(isset($_POST["login"]))
{

$email=$_POST["emailId"];
$password=$_POST["password"];

$query=mysqli_query($con,"select * from registeration where email='$email' and password='$password'");

if(mysqli_num_rows($query)>0)
{
$result=mysqli_fetch_array($query);

$_SESSION['user']=$result['email'];
$_SESSION['username']=$result['name'];

header("location:custm_home.php");
ob_flush();
}else{

$message="Could not log in. <br>Email or password is worng <br>";

}
}

?>


<div class="container-fluid">    
       <div class="container">
          
         <!--      Column 1  -->   
            <div class="col-md-2">
            </div>
              
     <!-- ==========================  Column 2============================= -->     
      <div class="col-md-7">
      
              <div class="row">
                  <div class="col-md-12">
                        <div class="panel panel-primary"><div class="panel-heading"><h3 class="panel-title">Customer Login!!</h3></div></div>
                       <form method="post" action="cus_login.php">
                          <h2>Login</h2>
                              <table class="table table-striped table-bordered bootstrap-datatable datatable responsive">
                              
                              <tr>
                              <td>Email:</td><td><input type="text" name="emailId" class="input"></td>
                              </tr>
                              <tr>
                              <td>Password:</td><td><input type="password" name="password" class="input"></td>
                              </tr>
                                                            
                              <tr>
                              <td colspan="2"><font color="red"><?php echo $message;?></font>
					             <input type="submit" value="Log In" class="submit-btn" name="login"></td>
                              </tr>
                              </table>
                          
                          </form>                  
                      </div>
               </div>   
                 
             
             
     <!-- =====================  Column 2  End==========================-->        
      </div> 
  
  
  
  
        <!--  =====================    Column 3 ======================= -->      
           <div class="col-md-3">
             
            </div>                             
     </div>
    </div> 
     <!-- Row --> 
     
     <!--============== Column End ==================== --> 
     <!-- ================Image Categories========== -->
              

     <!-- ================Image Categories End========== --> 

<?php include("footer.php"); ?>