<?php 

include("connect.php");


function getcategory()
{
$query=mysql_query("select * from  categories");
$str="";

$str.="<option>select</option>";
while($data= mysql_fetch_array($query))
{
$str.= "<option value='".$data['cat_id']."'>".$data["cat_name"]."</option>";
}
return $str;

}

?>