<!DOCTYPE html>
<html>
<head>
    <title>Settings Page</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="settings.css">
</head>
<body>

        <div class="container" style="background-color: #eeeeee; width: 100%; color: #000000;">
            <div class="navbar-header">
            <img src="images/phone1.png" style="margin: 10px;">
                <a href="#" class="navbar-brand">The Mobile Store</a>
            </div>

            <div id="Contact us" style="float: right; padding-right: 20px; padding-top: 10px;">
                <a href="contact_us.php"><h5> <span class="glyphicon glyphicon-sort"></span> Contact us</h5></a>
            </div>

                <div id="About Us" style="float: right; padding-right: 20px; padding-top:10px;">
                    <a href="about_us.php"><h5> <span class="glyphicon glyphicon-list-alt"></span> About us</h5></a>
                </div>

            <div id="Login" style="float: right; padding-right: 20px; padding-top: 10px; text-decoration: none;">
                <!-- <a href="Login.php"><h5> <span class="glyphicon glyphicon-log-in"></span> Log in</h5></a> -->

         <a href="#" data-toggle="modal" data-target="#myModal"><h5> <span class="glyphicon glyphicon-log-in"></span> Login</h5></a>
      
        <div id="myModal" class="modal fade" role="dialog">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><strong>LOG IN</strong></h4>
              </div>
              <div class="panel-body">
                
                          <h5>Don't have an account? <a href="signup.php"><strong>Register</strong></a></h5>

                            <form method="Post" action="products.php">

                                <div class="form-group" >

                                    <input type="email" class="form-control"  placeholder="Email" name="Email" required = "true">

                                </div>

                                <div class="form-group">

                                    <input type="password" class="form-control" placeholder="Password" name="Password" required = "true">

                                </div>
                            </form>
                                    
                            <center>
                             <a href="login.php"><button type="submit" name="submit" class="btn btn-primary btn-lg active">Log in</button></a>
                            </center>

                </div>
              <div class="modal-footer">
                <h5><a href="settings.php">Forgot Password?</a></h5>                
              </div>
            </div>
            </div>
            </div>
         </div>

            <div id="SignUp" style="float: right; padding-right: 20px; padding-top: 10px;">
                <a href="SignUp.php"><h5> <span class="glyphicon glyphicon-user"></span> Sign Up</h5></a>
            </div>
         </div>



       <div class="container-fluid" style="margin-top: 100px;">

            <div class="row">

                    <div class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3">

                        <h2>Change Password</h2>
                        <br>

                        <form>

                            <div class="form-group">

                                <input type="password"  class="form-control" placeholder="Old Password" name="name"  required = "true">

                            </div>

                            <div class="form-group">

                                <input type="password" class="form-control"  placeholder="New Password"  name="e-mail" required = "true">

                            </div>

                            <div class="form-group">

                                <input type="password" class="form-control" placeholder="Re-type New Password" name="password" required = "true"><br><br>
                            </div>

                            <center>
                            <a href="products.php"><button type="submit" class="btn btn-primary btn-lg active">Submit</button></a>
                            </center>

                            </form>

                        </div>

                    </div>

             </div>
             

        <div class="container-fluid" id="foot" style="background-color: #282626; color: #ffffff; margin-top: 40px; height: 120px;">
		<center>
			<div class="col-md-3 col-sm-6" style="margin-right:50px; margin-left: 130px;">
				<h3>Information</h3>
						<a href="about_us.html" style="color: #ffffff;">About Us</a><br>
					    <a href="contact_us.html" style="color: #ffffff;">Contact Us</a>
			</div>

			<div class="col-md-3 col-sm-6" style="margin-right:50px; color: #ffffff;">
				<h3>My Account</h3>
					<a href="login.html" style="color: #ffffff;">Log in</a><br>
					<a href="signup.html" style="color: #ffffff;">Sign up</a>
				
			</div>

			<div class="col-md-3 col-sm-6" style="margin-right:50px; ">
				<h3>Follow</h3>
				<h5>Follow us on FACEBOOK</h5>
				<button type="button" class="btn btn-sm btn-primary" type="submit" value="FOLLOW" >FOLLOW</button>
			</div>
		</center>		
		</div>

		<div class="footer" style="background-color: #000000; color: #ffffff; height: 30px;">
	 	<center>
		 	<p>Copyright © The Mobile Store. All Rights Reserved | Contact Us: +91 90000 0000</p>
	 	</center>
	 		
	 	</div>	


	 </body>

    </html>
