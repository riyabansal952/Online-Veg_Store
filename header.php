
<?php
  ob_start();
  include("connect.php");
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
<title></title>
<script src="jquery library/jquery.min1.11.1.js" type="text/javascript"></script>
<script src="bootstrap-3.3.4-dist/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript" src="jquery library/Coin-slider/jquery/coin-slider.min.js"></script>
<script type="text/javascript" src="jquery library/lib/carouFredSel-6.2.0/jquery.carouFredSel-6.2.0.js"></script>
<script src="jquery library/jquery.fancybox.js" type="text/javascript"></script>
<script src="jquery library/jquery.prettyPhoto.js" type="text/javascript"></script>
<link  href="css/prettyphoto.css" type="text/css" rel="stylesheet"/>
<link href="css/animate.css" rel="stylesheet" type="text/css" />
<link  href="css/bootstrappage.css" type="text/css" rel="stylesheet"/>
<link href="css/bootstrap-responsive.min.css" type="text/css" rel="stylesheet" />
<link  href="jquery library/jquery.fancybox.css" type="text/css" rel="stylesheet"/>
<link href="bootstrap-3.3.4-dist/css/bootstrap-theme.min.css" type="text/javascript" />
<link href="css/index.css" type="text/css" rel="stylesheet" />
<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
<link href="css/fonts/font-awesome-4.3.0/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
<link href="css/style8.css" type="text/css" rel="stylesheet" />
<link href="css/style6.css" type="text/css" rel="stylesheet" />
<link  href="css/style_common.css" type="text/css" rel="stylesheet"/>
<link href="css/imagehover.css"  type="text/css" rel="stylesheet" media="all" />
<link href="jquery library/mohit/Css/main.css" rel="stylesheet" type="text/css" />
<script>
     var url = window.location.href; 
    //alert(location.href);
    $(".ho a").each(function() {
        if(url == (this.href)) { 
            $("#ho1").removeClass("active");
            $(this).closest(".ho").addClass("active");
        }else
        {
            $(this).closest("#ho1").addClass("active");
        }
    });
	(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&amp;appId=524672054267653";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'))
	


</script>

<script type="text/javascript">
   $(document).ready(function(e) {
     $("#loginModal").hide();
	 $("#RegisterModal").hide();
	 $("#mask").hide();
	 $(".login-link").click(function(){$("#loginModal").slideDown();$("#mask").show();$("#RegisterModal").hide();});
	 $(".close").click(function(){$("#loginModal").slideUp();$("#mask").hide();$("#RegisterModal").slideUp(); 
	 
	 location.reload();
	 });
	 $(".cancel").click(function(){$("#loginModal").slideup();$("#mask").hide();$("#RegisterModal").slideUp();
	 location.reload();
	 });
	 $(".register-link").click(function(){$("#RegisterModal").slideDown();$("#mask").show();$("#loginModal").hide();});
	
});
</script>
</head>

<body>
<div id="mask"></div>

       
          <nav class="navbar navbar-inverse" style="height:46px">
             <div class="container">
               <div id="navbar" class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                     <li><a href="https://web.whatsapp.com/"><img src="Admin/img/Icon/WhatsApp_Icon.png" class="img-circle" /> +91-9461686689</a></li>
                     <li><a href="https://mail.google.com"><img src="Admin/img/Icon/p_email.jpg" class="img-circle" height="30" width="30" /> akku_riya_meenu@gmail.com</a></li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                   
					  
					
					 <li><a class="register-link"><span class="glyphicon glyphicon-user"></span> Register</a></li>
                       <li class="dropdown">
                        <a href="#" class="dropdown-toggle fa fa-user" data-toggle="dropdown">Login<span class="fa fa-caret-down"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="Admin/login.php">Admin Panel</a></li>
                           <li class="divider"></li>
                           <li><a href="cus_login.php" >User Login</a></li>
                        </ul>
                     </li>
			  
                     
                     

                     
             </div>
            </div>
         </nav>
   <!-- Header Logo Section -->
    <div class="container-fluid">
         <div class="container">  
           <div class="row">
            <div class="col-md-8">
              <div class="row"> 
                 <div class="col-lg-4 logo">
                   <a><img src="Admin/img/Icon/logo4.png" class="img-rounded" /></a>
                 </div>
                 <div class="col-lg-8 logo-text">
                    <p>EAT HEALTHY <b>AND</b> LIVE HEALTHY </p>
                 </div>
              </div> 
                                     
            </div>
          
            <div class="col-md-4">
               <div class="row text-right">
                  <ul class="list-inline">
                    <li><a class="fa fa-sitemap" href="contact_us.php">Site Map</a></li>
                    <li><a class="fa fa-phone" href="contact_us.php"> Contact Us</a></li>
                    <li><a class="fa fa-support" href="services.php"> Help & Support</a></li>
                  </ul>
               </div>  
               <div class="row text-right">
                  <form class="form-inline" action="search.php" method="post">
                      <div class="col-md-12">

                            <input type="text" placeholder="Search Store" name="search" /><span><input type="submit" class="btn-info" value="Search"></span>
                      </div>             
                 </form>
               </div>
            </div>
         </div> 
       </div>
     </div>
     
  <!--=================== Menu Bar Section========================= -->
       
      
     <!-- Navigation -->
    <nav class="navbar navbar-default" style="background:#337AB7;" role="navigation">
        <div class="container"  >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- navbar-brand is hidden on larger screens, but visible when the menu is collapsed -->
               
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
                <ul class="nav navbar-nav navbar-nav-menu bmenu" >
                    <li>
                        <a href="index.php" class="fa fa-home">Home</a>
                    </li>
                    <?php
				      $r = mysqli_query($con, "SELECT * FROM categories");//SQL query selecting two columns from a db and order by a coulumn.
                     ?>
                 
					
				
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle fa fa-folder" data-toggle="dropdown">Categories<span class="fa fa-caret-down"></span></a>
                        <ul class="dropdown-menu">
                        <?php    
				          echo "<ul class='categories'>";
		           		  while($row = mysqli_fetch_array($r))
		 		         {
                        
                           echo"<li><a href='productmaster.php?id=".$row['cat_id']."'>".$row['cat_name']."</a></li>";
						 }
				         echo"</ul>";
				
                        ?>  
                           <!--<li class="divider"></li>
                           <li><a href="fruits.php">Fruits<span class="badge">20</span></a></li>-->
                        </ul>
                    </li>
                    
                    
                    <li>
                        <a href="services.php" class="dropdown-toggle fa fa-support">Services</span></a>
                         
                    </li>
                    <li>
                        <a href="About_us.php" class="fa fa-file-text">About</a>
                    </li>

                    <li>
                        <a href="contact_us.php" class="fa fa-phone">Contact</a>
                    </li>
                    <li>
                        <a href="feedback.php" class="fa fa-pencil">Feedback</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
          
 
   <!--======================Login modal====================--> 
			    
<div id="loginModal" class="modal " tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Login</h1>
      </div>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="cus_loginchk.php" method="post">
            <div class="form-group">
              <input type="email" class="form-control input-lg" placeholder="Email" name="email" required>
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="password" required>
            </div>
            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Sign In</button>
              <span class="pull-right"><a href="#" class="register-link">Register</a></span><span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true" >Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>

<!--======================login modal End====================-->
<!-- =====================Register Model===================== -->

 <div id="RegisterModal" class="modal" tabindex="-1" role="dialog" aria-hidden="false">
  <div class="modal-dialog">
  <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h1 class="text-center">Register</h1>
      </div>
      <script type="text/javascript">
	  
	     function uname_val(uname)
         {
				//var uname=document.frm_register.u_name.value;
				if(uname==""||uname.length<2||!(isNaN(uname)))
				{ 
				  document.getElementById("lblerror").innerHTML="Name Is Requierd";
				  document.frm_register.u_name.focus();
				  return true;
				}
				else
				{
			    document.getElementById("lblerror").innerHTML=""; 		
				document.frm_register.u_contact.focus();
				}
          }
		  
		  
		  function ucontact_val(mn,mx,phone)
			{
				//var phone=document.frm_register.u_contact.value;
				var phone_len=phone.length;
				if(isNaN(phone)||phone_len!=10)
				{
					document.getElementById("lblerror").innerHTML="Please Enter valid phone";
					document.frm_register.u_contact.focus();
					return true;
				}
				else
				{
					 document.getElementById("lblerror").innerHTML="";
					 document.frm_register.u_email.focus();
			    }
				
			}
	
          function email_val(mail)
		  {
		       var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
		  if(mail.value.match(mailformat))
		    {
		      document.getElementById("lblerror").innerHTML="Please Enter valid Email"; 		 
		      document.frm_register.u_email.focus();
		      return true;
		    }
		  else
		    {
		       document.getElementById("lblerror").innerHTML=""; 		 
		       document.frm_register.u_password.focus();
		       return false;
		     }
		  }
				   
	     function u_cpass(cpass)
		 {
			var pass=document.frm_register.u_password.value; 
			  if(pass==cpass)
			  {
				 document.frm_register.btn_register.focus();
				 return false;  
			  }
			  else
			  {
				 document.getElementById("lblerror").innerHTML="password Not Match";
				  document.frm_register.u_cpassword.focus();
				  return false; 
			  }
		  }  
		  		  /* password Length */

			  function passlength(pass)
				{
				  var passlen=pass.length;
				   if(passlen<6)
				   {
					  document.getElementById("lblerror").innerHTML="<p style='color:RED'>Too short</p>";
				   }
				   else if(passlen>8)
				   {
					  document.getElementById("lblerror").innerHTML="<p style='color:GREEN'>Strong</p>";
				   }
				}
				
			

      </script>
      <div class="modal-body">
          <form class="form col-md-12 center-block" action="register_check.php" method="post" name="frm_register">
            <div class="form-group">
               <label id="lblerror"></label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control input-lg" placeholder="Name" name="u_name" required onBlur="uname_val(this.value);">
            </div>
            <div class="form-group">
              <input type="text" class="form-control input-lg"  onBlur="ucontact_val(10,10,this.value);" maxlength="10" placeholder="Contact Number" name="u_contact" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control input-lg" placeholder="E-mail" name="u_email" required onblur="email_val(this.value);">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Password" name="u_password" required onBlur="passlength(this.value);">
            </div>
            <div class="form-group">
              <input type="password" class="form-control input-lg" placeholder="Confirm Password" name="u_cpassword" required onBlur="chk(this.value);">
              
            </div>


            <div class="form-group">
              <button class="btn btn-primary btn-lg btn-block" type="submit" name="btn_register">Register</button>
              <span class="pull-right"><a href="#" class="login-link">Login</a></span><span><a href="#">Need help?</a></span>
            </div>
          </form>
      </div>
      <div class="modal-footer">
          <div class="col-md-12">
          <button class="btn" data-dismiss="modal" aria-hidden="true" class="cancel">Cancel</button>
		  </div>	
      </div>
  </div>
  </div>
</div>



<!-- =====================Register Model End===================== -->        
