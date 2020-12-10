<?php
   include("connect.php");
   include("header.php");
   $pid=$_REQUEST['pid'];
   $sql="select * from products where pr_id='".$pid."'";
   $res=mysql_query($sql);
   $row=mysql_fetch_array($res);


?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Product
                    <small>Vegetable</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Product</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Portfolio Item Row -->
        <div class="row">

            <div class="col-md-8">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                                    <?php
									    $sql="select * from products";
										$res=mysql_query($sql);
								     ?>
                                     <?php
									 $i=0;
							          while($row=mysql_fetch_array($res))
									   { 
									 ?>
                        <div class="item  <?php echo ( $i==0? 'active':''); ?>">
                            <img class="img-responsive" src="Admin/uploads/<?php echo $row['pr_image']?>" alt="">
                        </div>
                                   <?php
									  $i++;
									   }
                                    ?> 
                        
                    </div>

                    <!-- Controls -->
                    <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left"></span>
                    </a>
                    <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right"></span>
                    </a>
                </div>
            </div>

            <div class="col-md-4">
                <h3>Project Description</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
                <h3>Product Details</h3>
                <ul>
                    <li><?php echo $row['pr_id']?></li>
                    <li><?php echo $row['pr_name']?></li>
                    <li><?php echo $row['pr_price']?></li>
                    <li><?php echo $row['pr_sprice']?></li>
                </ul>
            </div>

        </div>
        <!-- /.row -->

        <!-- Related Projects Row -->
        <div class="row">

            <div class="col-lg-12">
                <h3 class="page-header">Related Products</h3>
            </div>
				 <?php
                     $sql="Select * from products";
                     $res=mysql_query($sql);
                   ?>
                   <?php
                     while($fetch_pro=mysql_fetch_array($res))
                     { 
                   ?>

            <div class="col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive img-hover img-related" src="Admin/uploads/<?php echo $fetch_pro['pr_image'] ?>" alt="">
                </a>
            </div>

            <?php
		      }
	         ?>
        </div>
        <!-- /.row -->

        <hr>
  </div>
        <!-- Footer -->
         <?php
		    include("footer.php"); 
		 ?>
    
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>

<?php /*?><?php
include("header.php");
include("connect.php");

?>
<table width="200" border="1">
  <tr>
    <td>Product id</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>Product name</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>Product Price</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
  <tr>
    <td>Product Price</td>
    <td>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td>Product Image</td>
    <td>&nbsp;</td>
    <td><img src="" height="100px"/></td>
  </tr>
</table>

<?php
include("footer.php");
?><?php */?>