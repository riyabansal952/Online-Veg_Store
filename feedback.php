<?php /*?><?php session_start(); ?><?php */?>
  <!-- header-->
    <?php
	        include("header.php");
			
	?>
 
  <!-- header End-->
       
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Feedback
                    <small>Green Veg.</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Feedback</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

       

        <!-- Contact Form -->
        <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
        <div class="row">
            <div class="col-md-8">
                <h3>Send us a Message</h3>
                <form  action="feedback_action.php" method="post" novalidate id="feedback">
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" maxlength="10" required data-validation-required-message="Please enter your phone number.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" name="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"><label style="color:#0C0">
					<?php /*?><?php
					 if(isset($_SESSION['msg']))
					 {
					    echo $_SESSION['msg']; 
					 }
				      ?><?php */?>
                      
                     </label></div>
                    <!-- For success/fail messages -->
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
            
            
            <div class="col-md-4">
               <div class="row">
                   <img  src="Admin/img/Icon/Austin-Realtor-Feedback.jpg" class="img-responsive"  />
               </div>
            </div>
            
            
            
          <?php /*?><!-- Row -->
            <div class="col-md-4">
                   <div class="row">
                          <div class="col-lg-12">
                              <div class="panel-group">
                                  <div class="panel panel-primary">
                                      <div class="panel-heading">
                                          <h4 class="panel-title text-center">
                                              Feedback Dashboard
                                          </h4>
                                      </div>
                                  </div>
                               </div>
                              <!--  panel-group --> 
                              <div class="panel-group" id="accordion">
                                  <div class="panel panel-default">
                                      <div class="panel-heading">
                                          <h4 class="panel-title">
                                              <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">How To Order?</a>
                                          </h4>
                                      </div>
                                      <div id="collapseOne" class="panel-collapse collapse">
                                          <div class="panel-body">
                                              Visit www.GreenVeg.com
                                          </div>
                                      </div>
                                  </div>
                               </div>
                               <!--  panel-group --> 
                          </div>
                          <!--  col-lg-12 --> 
                     </div>
                    /.row 
            </div>
          <!-- row  end--><?php */?>

        </div>
        <!-- /.row -->
                <hr />

      
               </div>
    <!-- /.container -->
     <?php
              include("footer.php");    
     ?>


 </div>   
</body>
</html>
