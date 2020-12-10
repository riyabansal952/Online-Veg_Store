<?php 
ob_start();
session_start();
include("connect.php"); 
?>

<?php
                  $message="";
               if(isset($_POST["login"]))
                  {
                  
                  $emailid=$_POST["email"];
                  $password=$_POST["password"];
                  
                  $query=mysql_query("select * from registeration where email='$emailid' and password='$password'");
                  
                  if(mysql_num_rows($query)>0)
                  {
                  $result=mysql_fetch_array($query);
                  $_SESSION["user"]=$result["id"];
				  $_SESSION["username"]=$result["name"];
                  
				      header("location:custm_home.php");
                  ob_flush();
				  
                  }else{
                  
                  $message="Could not log in. <br>Email or password is worng <br>";
				  
				  header("location:index.php");
                  
                  }
                  }
                  
?>
