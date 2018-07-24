<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Success | Mobile Store</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="indexcss.css">
</head>
<body>

		 <?php
        include 'includes/header.php';
        $query = "delete from users_items where status='buy'";
        $qry = "update users set e_pay=\"Paid\" where email='$_SESSION[email]'";
                        $result = mysqli_query($con, $query)or die($mysqli_error($con));
                        $res = mysqli_query($con, $qry)or die($mysqli_error($con));
                        if (mysqli_affected_rows($con)>0) {
                          echo "Order successfully placed!hank you for ordering.<br>The order shall be delivered to you very shortly.<p>You will be redirected to Home Page";
                            header("Refresh :5;http://localhost/Bookworm/home.php");
                        }
                        
        ?>
<br><br>
     <div class="container" style="margin-top: 50px; width: 1000px;">
      <div class="jumbotron">
          <h3><strong> Order successfully placed!</strong></h3> 
          <p>Thank you for ordering from <strong>The Mobile Store</strong>.The order shall be delivered to you very shortly.</p> 
          <br>
          <p>Order some other Electronics.<a href="index.php">Buy Now!</a></p>
      </div>
     </div>


      <div class="container-fluid" id="foot" style="background-color: #282626; color: #ffffff; height: 120px; margin-top: 110px;">
    <center>
      <div class="col-md-3 col-sm-6" style="margin-right:50px; margin-left: 130px;">
        <h3>Information</h3>
            <a href="about_us.php" style="color: #ffffff;">About Us</a><br>
              <a href="contact_us.php" style="color: #ffffff;">Contact Us</a>
      </div>

      <div class="col-md-3 col-sm-6" style="margin-right:50px; color: #ffffff;">
        <h3>My Account</h3>
          <a href="login.php" style="color: #ffffff;">Log in</a><br>
          <a href="signup_page.php" style="color: #ffffff;">Sign up</a>
        
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
