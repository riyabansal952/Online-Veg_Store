<?php include('connect.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Bootstrap Admin Template</title>
    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>


    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
   <style>
		  .srch{padding:0px;width:960px;margin:auto;height:30px;}
		  .tab{padding:0px;width:1024px;margin:auto;}
		  #frm{width:500px;height:28px;}
		  #but{height:28px;width:100px;text-align:center;padding-bottom:2px;}
		  td{text-align:center !important}
		  .header_search{width:960px;margin:auto;padding-top:10px;}
		  .logo_search{width:350px;float:left;}
		  .address{float:right;}
		  h1{text-align:center;}
		  .wrapper_search{width:960;margin:auto;}
		  .clear{clear:both;}
  </style>

    

</head>

<body style="background-color:#FFF">

   
   
        
        <div id="page-wrapper">

            <div class="container">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Admin
                            <small>Banner_slider</small>
                        </h1>
                        <ol class="list-unstyled">
                            

                         <li class="active">
                              <div id="signup" class="tab-pane">
                                <div class="srch">
                              </div>
                                     <br/>
                                    <div class="tab">
                                      <table width="960px" height="30px" cellpadding="0" cellspacing="0" border="1" align="center">
                                         <tr>
                                          <th>Images</th>
                                         </tr>
                                         
                                         <tr>
                                         
                                          <td>
                                          <form enctype="multipart/form-data" action="fileupload.php" method="post">
                                             <input type="file" name="myfile">
                                             <input type="submit" value="Upload">
                                          </form></td>
                                         </tr>
                                         
                                         
                                          </table>
                                          
                                       </div>
                                    </div>
                                          
                              </div>
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->


    
</body>

</html>
