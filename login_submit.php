<!DOCTYPE html>
<html>
<head>
  <title>Sign Up Error</title>

    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="indexcss.css">
</head>
<body>

<?php

require("includes/common.php");
include 'includes/header.php';

$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);

$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
//$password = MD5($password);

// Query checks if the email and password are present in the database.
$query = "SELECT id, email FROM users WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die(mysqli_error($con));
$num = mysqli_num_rows($result);
// If the email and password are not present in the database, the mysqli_num_rows returns 0, it is assigned to $num.
if ($num == 0) {

	    ?>

   <div class="container" style="margin-top: 100px;">
      <div class="jumbotron">
          <h3><strong> Invalid Email id and password!</strong></h3> 
          <br>
          <p>The email id and password do not match! Please verify and try again!</p> 
          <br>
          <a href="login.php"><button type="submit" name="submit" class="btn btn-primary">Login Again</button></a><br><br>
      </div>
     </div>


   <?php
  //$error = "<span class='red'>Please enter correct E-mail id and Password</span>";
 // echo "Enter correct email and password!";
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: index.php');
}

?>

<div class="container-fluid" id="foot" style="background-color: #282626; color: #ffffff; margin-top: 50px;">
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

