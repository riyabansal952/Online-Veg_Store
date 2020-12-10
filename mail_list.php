<?php
   include("connect.php");
   $email=$_POST['mail'];
   $sql="insert into mail_list (email_id) values ('$email')";
   $res=mysql_query($sql);
   if($res>=1)
   {
	   header("location:index.php");
   } 
   else
   {
	    header("location:index.php");
    }
?>