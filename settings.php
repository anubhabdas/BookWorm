<?php
require_once("includes/common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Settings | Life Style Store</title>
            <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
            <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
            <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <br><br><br><br><br><br>
        <?php include 'includes/header.php'; ?>
        <div class="container-fluid" id="content">
            <div class="row">
                <div class="col-lg-4 col-lg-offset-4" id="settings-container">
                    <h4>Change Password</h4>
                    <form action="settings_submit.php" method="POST">
                        <div class="form-group">
                            <input type="password" class="form-control" name="old-password"  placeholder="Old Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="New Password" required = "true">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password1"  placeholder="Re-type New Password" required = "true">
                        </div>
                        <button type="submit" class="btn btn-primary">Change</button>

                    </form>
                </div>
            </div>
        </div>
        
<br><br><br><br><br><br>
         <div class="container-fluid" id="foot" style="background-color: #282626; color: #ffffff;">
          <center>
            <div class="col-md-2 col-sm-6" style="margin-right:50px; margin-left: 130px;">
                <h3>About Us</h3>
                <h5>We have a large collection of phones over a wide variety which you can choose from!</h5>
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
            <p>Copyright @ The Mobile Store. All Rights Reserved | Contact Us: +91 90000 0000</p>
        </center>
            
        </div>  





    </body>
</html>