<?php include("connect.php"); ?>

<?php

$name=$_FILES['myfile']['name'];
$path='img/Banner/';

if($_FILES['myfile']['error']==0)
{
	move_uploaded_file($_FILES['myfile']['tmp_name'],$path.$name);
    $qury="insert into banner_img (banner_img) values('$name')";
	mysql_query($qury);
}

?>