<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->
<head>
     <meta charset="UTF-8" />
    <title> Admin Dashboard | Login Page</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
      <!-- PAGE LEVEL SCRIPTS -->
      <script src="jquery library/jquery.min1.11.1.js"></script>
      <script src="jquery library/bootstrap.js"></script>
      <script src="jquery library/login.js"></script>
      <!--END PAGE LEVEL SCRIPTS -->
    <!-- GLOBAL STYLES -->
     <!-- PAGE LEVEL STYLES -->
     <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/login.css" />
    <link rel="stylesheet" href="css/plugins/magic/magic.css" />
     <!-- END PAGE LEVEL STYLES -->
  
</head>
    <!-- END HEAD -->

    <!-- BEGIN BODY -->
<body >






   <!-- PAGE CONTENT --> 
    <div class="container">
    <div class="text-center">
        <h1> Admin Dashboard
        </h1>
    </div>
    <div class="tab-content">
        <div id="login" class="tab-pane active">
            <form action="chklogin.php" method="post" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">
                    Enter your username and password
                </p>
                <input type="text" placeholder="Username" class="form-control"  name="username" />
                <label>
				<?php 
				 session_start(); 
				if(isset($_SESSION['msg']))
				  
				{
					
					echo $_SESSION['msg'];
				}
				?>
                </label>
                <input type="password" placeholder="Password" class="form-control"  name="password"/>
                <button class="btn text-muted text-center btn-danger" type="submit">Sign in</button>
            </form>
        </div>
        <div id="forgot" class="tab-pane">
            <form action="" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Enter your valid e-mail</p>
                <input type="email"  required="required" placeholder="Your E-mail"  class="form-control"  name="email"/>
                <br />
                <button class="btn text-muted text-center btn-success" type="submit">Recover Password</button>
            </form>
        </div>
        <div id="signup" class="tab-pane">
            <form action="" class="form-signin">
                <p class="text-muted text-center btn-block btn btn-primary btn-rect">Please Fill Details To Register</p>
                 <input type="text" placeholder="First Name" class="form-control" name="fname" />
                 <input type="text" placeholder="Last Name" class="form-control" name="lname" />
                <input type="text" placeholder="Username" class="form-control"  name="username"/>
                <input type="email" placeholder="Your E-mail" class="form-control"  name="email"/>
                <input type="password" placeholder="password" class="form-control"  name="password"/>
                <input type="password" placeholder="Re type password" class="form-control"  name="confpassword"/>
                <button class="btn text-muted text-center btn-success" type="submit">Register</button>
            </form>
        </div>
    </div>
    <div class="text-center">
        <ul class="list-inline">
            <li><a class="text-muted" href="#login" data-toggle="tab">Login</a></li>
            <li><a class="text-muted" href="#forgot" data-toggle="tab">Forgot Password</a></li>
            <li><a class="text-muted" href="#signup" data-toggle="tab">Signup</a></li>
        </ul>
    </div>


</div>

	  <!--END PAGE CONTENT -->     
	      
     

</body>
    <!-- END BODY -->
</html>
