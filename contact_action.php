<?php
  include("connect.php");
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $msg=$_POST['message'];
  
   $sql="insert into contact_us (c_name,c_phone,c_email,c_msg) values ('$name','$phone','$email','$msg')"; 
   $res=mysqli_query($con,$sql);
   if($res>=1)
   {
	   header("location:contact_us.php");
	   
	}
   else
   {
	   header("location:contact_us.php");
	   }
   
?>