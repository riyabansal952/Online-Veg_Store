
<?php
    $email=$_GET['email'];
	$code=$_GET['code'];
	$sql="update registration set status='true' where email='".$email."' & code='".$code."'";
	mysql_query($sql);
?>