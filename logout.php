
<?php
session_start();
unset($_SESSION['username']);
header('location:login.php');
$_SESSION['msg']="Sucessfully Logout";
?>
