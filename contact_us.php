<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Contact Us | Mobile Store</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="settings.css">
</head>
<body>

        <?php
          include 'includes/header.php';
        ?>

     <h3 style="background-color: #a8c6f7; width: 100%; line-height: 40px; margin-top: 50px; "><strong>&nbsp &nbsp Live Support</strong></h3>
      <br>

     <div class="col-md-3 col-sm-6"  style="margin-left: 50px; width: 800px;">
      
      <h5><strong>24 hours|7 days a week|365 days a year Live Technical Support</strong></h5>
      <p><br>My name is Prabuddha Kumar Ghosh. Born and brought up in Kolkata, I have completed my schooling from South Point School. I had completed my school under my state board, West Bengal Board of Education. Currently, I am completing my bachelor of technology degree in Computer Science Engineering from KIIT University, Bhubaneshwar. I am a believer in free speech, equal rights for all, irrespective of caste, creed and religion.  </p> <br>


      <form action="contact_us_script.php" method="POST">
            <div class="form-group">
                <p><strong>Name</strong></p>
                <input class="form-control" placeholder="Name" name="name"  required = "true">
            </div>
                  <div class="form-group">
                  <p><strong>Email</strong></p>
                      <input type="email" class="form-control"  placeholder="Email"  name="email" required = "true">
                  </div>
                  <div class="form-group">
                  <p><strong>Message</strong></p>
                      <input class="form-control" placeholder="Write your message here..." name="message" required = "true" style="height: 100px;">
                  </div>
                   <a href="products.php"><button type="submit" class="btn btn-primary btn-lg active">Submit</button></a>
      </form>
     </div>

     <div class="col-md-3 col-sm-6"  style="margin-left: 50px; width: 400px;">
     <br>
     <br>
      <img src="images/rsz_help-desk.png" >
      <h2>Company Information:</h2>
      <h3><strong>Geocon</strong></h3>
      <br>
      <p>1A/5B, Surah Cross Lane</p>
      <p>Kolkata-700010</p>
      <br> 
      <p>Fax: 022-987408839</p>
      <br>
      <p>Phone : 91-7064266802</p>
      <br>
      <p>Email : prabuddha1708@gmail.com</p>

      
     </div>

        <div class="container-fluid" id="foot" style="background-color: #282626; color: #ffffff; margin-top: 550px; height: 120px;">
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
        <a href="https://www.facebook.com/"><button type="button" class="btn btn-sm btn-primary" type="submit" value="FOLLOW" >FOLLOW</button></a>
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