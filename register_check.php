<?php 
 
 include('connect.php');
 $name=$_POST['u_name'];
 $email=$_POST['u_email'];
 $password=$_POST['u_password'];
 $contact=$_POST['u_contact'];
 
 
 $sql="insert into registeration (name,email,password,contact) values ('$name','$email','$password','$contact')";  
 $res=mysqli_query($con,$sql);
	if($res>=1)
	   {?>
		  <script> alert("Registered Successfully!");
		  window.location = 'cus_login.php';
          </script>
		 <?php
		}
	else{?>
		  <script> alert("Could not Registed!");
		  window.location = 'contact_us.php';
          </script>
		 <?php
		}

?>