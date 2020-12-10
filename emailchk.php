<?php
include('connect.php');
       $email=$_POST['mail'];
	   $code=md5(date('d'));
	   $qry=mysqli_query($con,"insert into mail_list (email_id,status,code) values ('$email',0,'".$code."')");
	  // echo $qry;exit;
	   $msg="<a href='verifyemail.php?email=$email & code=$code'>Click here</a> to verify your email";
	  // mail($email,'Registeration Succesfull',$msg);
	  header("location:index.php");
	  //echo "Successfully inserted!!";
	  
?>
