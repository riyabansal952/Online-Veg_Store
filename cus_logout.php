<?php
ob_start();
session_start();

if(isset($_SESSION["user"]))
{

session_destroy();

header("location:index.php");
ob_flush();

}else{
header("location:index.php");
ob_flush();
}

?>