<?php
	session_start();	
	    include("connect.php");  
	    $un=$_REQUEST['username'];
		$pw=$_REQUEST['password']; 
		
		$sql="select * from admin_login where username='".$un."' and password='".$pw."' ";
		$res=mysql_query($sql);
		 if($row=mysql_fetch_array($res))
		 {
			 
			  $_SESSION['username']=$un;
			  header('location:Dashboard.php');
	     } 
		 else
		 {
			 $_SESSION['msg']='Invalid Username And Password';
			 header('location:login.php');
			 
	     }
   ?>
