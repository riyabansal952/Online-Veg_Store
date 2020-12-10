<?php
include('connect.php');
include('header.php');

$se=$_REQUEST['search'];

$sel=mysqli_query($con,"select * from products where `pr_name`='".$se."' or `pr_price`='".$se."' or `pr_sprice`='".$se."' ");
if($sel!= null)
{
	    echo"<form method='post'><table border='0' align='center'><tr>";
   $n=1;
    while($arr=mysqli_fetch_array($sel))
   {
   $i=$arr['pr_image'];
    if($n%4==0)
	{
	echo "<tr>";
	}
   echo "
   <td height='280' width='240' align='center'><img src='Admin/uploads/$i' height='200' width='200'><br/>
  
 <b>Product Name:</b>".$arr['pr_name'].
   "<br><b>Product Price:</b>Rs&nbsp;".$arr['pr_price'].
   "<br><b>Offer Price:</b>Rs&nbsp;".$arr['pr_sprice'].
   "<br><a href='shoppingcart.php?item=".$arr['pr_id']. "&price=".$arr['pr_sprice']."&q=1' class='btn btn-primary'><span class='fa fa-shopping-cart'>Add To Cart!</span></a></td>";
  $n++;

   }
   	  echo "</tr></table>
       </form>";
}
else
{
echo "Product Not Found";
}
		
		include('footer.php');
		   ?>