<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
  <title>BookWorm | Science Fiction</title>

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
    
     <div class="panel panel-success" style="margin-bottom: 0px; margin-top: 45px;">
      <div class="panel-heading">
         <a href="#"><h4 style="color: #000000"><strong>SCIENCE FICTION</strong></h4></a>
      </div>
     <div class="container" style="margin-bottom: 50px; margin-top: 40px;">
      <div class="row">
      <div class="col-md-3 col-sm-6" style="margin-right: 80px; margin-left: 60px;" >
       <a href="#" class="thumbnail" style="height: 300px;"><img src="images/science/world.jpg" alt="Responsive Image">
        </a>
        <p><a href="book.php?id=54" role="button" class="btn btn-primary btn-block">Read Now</a></p>
      </div>

        <div class="col-md-3 col-sm-6" style="margin-right: 80px;">
        <a href="#" class="thumbnail" style="height: 300px;" ><img src="images/science/big.jpg" alt="Responsive Image">
            </a>
            <p><a href="book.php?id=55" role="button" class="btn btn-primary btn-block">Read Now</a></p>
        </div>

        <div class="col-md-3 col-sm-6">
        <a href="#" class="thumbnail" style="height: 300px;"><img src="images/science/earth.jpg" alt="Responsive Image">
        </a>
               <p><a href="book.php?id=56" role="button" class="btn btn-primary btn-block">Read Now</a></p>
        </div> 

        </div>
        </div>





 



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
      <p>Copyright © BookWorm. All Rights Reserved | Contact Us: +91 90000 0000</p>
    </center>
      
    </div>  
  </body>
</html>