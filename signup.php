<?php
require("includes/common.php");
if (isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html>
<head>
    <title> BookWorm | Signup Page    </title>

        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="indexcss.css">
    
</head>
<body>

      <?php
        include 'includes/header.php';
      ?>

 

       <div class="container-fluid" style="margin-top: 50px; margin-bottom: 50px;">
          <div class=" col-md-6 ">
                    <img src="images/signup.jpg" style="margin-top: 120px; margin-left: 120px;">
          </div>
            <div class="row">
                

                    <div class="col-md-6">

                        <h2>SIGN UP</h2>

                        <form action="signup_script.php" method="POST">

                            <div class="form-group">

                                <input class="form-control" placeholder="Name" name="name"  required = "true" style="width: 500px;">

                            </div>

                            <div class="form-group">

                                <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" style="width: 500px;" >

                            </div>

                            <div class="form-group">

                                <input type="password" class="form-control" placeholder="Password" name="password" pattern=".{6,}" required = "true" style="width: 500px;">

                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control"  placeholder="Contact" name="contact" required = "true" style="width: 500px;">

                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control"  placeholder="City" name="city" required = "true" style="width: 500px;">

                            </div>

                            <div class="form-group">

                                <input type="text" class="form-control"  placeholder="State" name="address" required = "true" style="width: 500px;">

                            </div>

                            <button type="submit" class="btn btn-primary btn-lg active">Submit</button></a>
                            <input type="hidden" name="f" value="0">

                            </form>

                        </div>

                    </div>

             </div>


    <div class="container-fluid" id="foot" style="background-color: #282626; color: #ffffff;">
      <center>
      <div class="col-md-2 col-sm-6" style="margin-right:50px; margin-left: 130px;">
        <h3>About Us</h3>
        <h5>We have a large collection of books over a wide variety which you can choose from!</h5>
      </div>

      <div class="col-md-2 col-sm-6" style="margin-right:50px;">
        <h3>Free Support</h3>
        <h5>Do you need any help with any of our products? <br>Just visit our support forum.<br>
                     If you are interested in how we work visit our blog to get some quality reads.</h5>
      </div>

      <div class="col-md-2 col-sm-6" style="margin-right:50px;">
        <h3>Newsletter</h3>
        <h5>Get the Newsletter. Subscribe Here.</h5>

        <button type="button" class="btn btn-sm btn-info" type="submit" value="FOLLOW" >Subscribe</button>

      </div>

      <div class="col-md-2 col-sm-6" style="margin-right:50px; ">
        <h3>Follow</h3>
        <h5>Follow us on FACEBOOK</h5>
        <button type="button" class="btn btn-sm btn-primary" type="submit" value="FOLLOW" >FOLLOW</button>
      </div>
      </center>   
    </div>

    <div class="footer" style="background-color: #000000; color: #ffffff; height: 30px;">
    <center>
      <p>Copyright @ BookWorm. All Rights Reserved | Contact Us: +91 90000 0000</p>
    </center>
      
    </div>

         </body>

    </html>