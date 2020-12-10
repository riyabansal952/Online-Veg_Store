<html>
<head>
<title>Admin Dashboard</title>
<link href="css/admin_style.css" rel="stylesheet" type="text/css">
<link type="text/css" rel="stylesheet" href="css/fonts/font-awesome-4.3.0/css/font-awesome.min.css">
<script src="css/jquery.js" type="text/javascript" ></script>
<script src="css/script.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
  $("#New_joining_letter").click(function(){
  
    $("#naveFrame").attr('src','New_joining_letter.html');
  });
  $("#new_registration").click(function(){

    $("#naveFrame").attr('src','new_registration.html');
  });
   $("#reciepts_fees").click(function(){
    $("#naveFrame").attr('src','new_reciepts_fees.html');
  });
   $("#search_by_reg").click(function(){
    $("#naveFrame").attr('src','search_by_reg.html');
  });
   $("#search_by_name").click(function(){
    $("#naveFrame").attr('src','search_by_name.html');
  });
});


</script>
</head>
<div class="wrapper">
  <div class="header">
    <div class="logo">
     <a href="Dashboard.html"> <h2 style="color:#333;">Admin Dashboard<span style="color:rgb(233, 79, 49);">Panel</span></h2></a>
    </div>
    <div class="search"></div>
    <div class="clear"></div>
  </div>
  
  <!--header close-->
  <div class="container">
    <div class="container1">
      <div id='cssmenu'>
        <ul>
          <li class='active'><a href='Dashboard.html'><span>Dashboard</span></a></li>
          <li class='has-sub'><a href='#' ><span>Condidate Info</span></a>
            <ul>
              <li><a href='#' id="new_registration"><span>New Registration</span></a></li>
              <li><a href='#'><span>Registrater Condidates</span></a></li>
              <li class='last'><a href='#'><span>Today Joining Date</span></a></li>
            </ul>
          </li>
          <li class='has-sub'><a href='#'><span>Consultant Fees</span></a>
            <ul>
              <li class='last'><a href='#' id="reciepts_fees"><span>New Reg. Fee Reciepts</span></a></li>
              <li class='last'><a href='#'><span>Search Fee Reciepts</span></a></li>
              <li class='last'><a href='#'><span>New Service Fee Reciepts</span></a></li>
              <li><a href='#'><span>Search Service Fee Reciepts</span></a></li>
            </ul>
          </li>
          <li class='has-sub'><a href='#'><span>Joining Desk</span></a>
            <ul>
              <li><a href='#' id="New_joining_letter"><span>New Joining Letter</span></a></li>
              <li class='last'><a href='#'><span>Search Joining Letter</span></a></li>
            </ul>
          </li>
          <li class='has-sub'><a href='#'><span>Refund</span></a>
            <ul>
              <li><a href='#'><span>Refund Summary</span></a></li>
              <li class='last'><a href='#' id="search_by_name"><span>Search by Name</span></a></li>
              <li class='last'><a href='#' id="search_by_reg"><span>Search by Reg. No.</span></a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
    <div class="container2">
    <iframe id="naveFrame" src="nav_dashbord.html" width="100%" height="1200" frameborder="no" scrolling="no"> </iframe>
    </div>
    <div class="clear"></div>
  </div>
  <!--container close-->
  <div class="footer">
    <div class="footer_left"></div>
    <div class="footer_right">
      <p id="jay">Admin Panel</p>
    </div>
    <div class="clear"></div>
  </div>
</div>
<!--wrapper close-->
<body>
</body>
</html>
