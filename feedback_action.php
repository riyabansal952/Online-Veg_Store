<?php
  session_start();
  include("connect.php");
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $email=$_POST['email'];
  $msg=$_POST['message'];
  
   $sql="insert into feedback (c_name,c_phone,c_email,c_msg) values ('$name','$phone','$email','$msg')"; 
   $res=mysqli_query($con,$sql);
   if($res>=1)
   {
	   $_SESSION['msg']='Thanks For Your valueable FeedBack';
	   header("location:feedback.php");
	   
	}
   else
   {
	   header("location:feedback.php");
	   }
   
?>