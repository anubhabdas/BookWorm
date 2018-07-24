<?php
require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title> BookWorm | Home Page	</title>

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
                    <img src="images/rsz_home.jpg" style="margin-top: 120px; margin-left: 120px;">
          </div>
            <div class="row">
                

                    <div class="col-md-6" style="background-color: #edf4ff; width: 550px; margin-top: 100px;"> 
                        <h2><b>Welcome to a Wondeful Journey!<b></h2>
                        <h3><i>
                            <p>We have a huge collection of books across all genres! Fell free to look around!</p>
                           <center> <p> Happy Reading! :) </p> </i> </center>
                        </h3>


                    </div>

            </div>

        </div>



        <div class="btn-group" style="margin-left: 220px;">
            <a href="#Biography"><button type="button" class="btn btn-info">Biography</button></a>
            <a href="#Crime"><button type="button" class="btn btn-info">Crime Ficton and Thriller</button></a>
            <a href="#Drama"><button type="button" class="btn btn-info">Drama and Romance</button></a>
            <a href="#Fantasy"><button type="button" class="btn btn-info">Fantasy Fiction</button></a>
            <a href="#History"><button type="button" class="btn btn-info">Historical Fiction</button></a>
            <a href="#Mystery"><button type="button" class="btn btn-info">Mystery and Thriller</button></a>
            <a href="#Science"><button type="button" class="btn btn-info">Science Fiction</button></a>
        </div>





        <div id="Biography" class="panel panel-success" id="science_fiction" style="margin-bottom: 0px; margin-top: 45px;">
      <div class="panel-heading">

      <?php if (!isset($_SESSION['email'])) { ?>
         <a href="login.php">  <h4 style="color: #000000"><strong>BIOGRAPHY</strong></h4>  
            <?php
                 } else {
                ?>
            <a href="biography.php">  <h4 style="color: #000000"><strong>BIOGRAPHY</strong></h4>
         <?php
             }
            
          ?>            
      </div>
     <div class="container" style="margin-bottom: 50px; margin-top: 40px;">
      <div class="row">
      <div class="col-md-3 col-sm-6" style="margin-right: 80px; margin-left: 60px;" >
       <a href="#" class="thumbnail" style="height: 300px;"><img src="images/Biography/hitler.jpg" alt="Responsive Image">
        </a>
        <center>
          <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
        </center>
      </div>

        <div class="col-md-3 col-sm-6" style="margin-right: 80px;">
        <a href="#" class="thumbnail" style="height: 300px;" ><img src="images/Biography/clinton.jpg" alt="Responsive Image">
        </a>


          <center>
              <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
          </center>
        </div>

        <div class="col-md-3 col-sm-6">
    <a href="#" class="thumbnail" style="height: 300px;"><img src="images/Biography/dhiru.jpg" alt="Responsive Image">
    </a>
      <center>
        <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
      </center>
    </div>      
    </div>
    </div>  
    </div>




  <div id="Crime" class="panel panel-success" style="margin-bottom: 0px; margin-top: 45px;" >
      <div class="panel-heading">
      <?php if (!isset($_SESSION['email'])) { ?>
         <a href="login.php"><h4 style="color: #000000"><strong>CRIME FICTION AND THRILLER</strong></h4></a>
             <?php
                 } else {
                ?>

        <a href="crime.php">  <h4 style="color: #000000"><strong>CRIME FICTION AND THRILLER</strong></h4>
         <?php
             }
            
          ?> 
      </div>
     <div class="container" style="margin-bottom: 50px; margin-top: 40px;">
      <div class="row">
      <div class="col-md-3 col-sm-6" style="margin-right: 80px; margin-left: 60px;" >
       <a href="#" class="thumbnail" style="height: 300px;"><img src="images/Crime/puzo1.jpg" alt="Responsive Image">
        </a>
        <center>
          <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
        </center>
      </div>

        <div class="col-md-3 col-sm-6" style="margin-right: 80px;">
        <a href="#" class="thumbnail" style="height: 300px;" ><img src="images/Crime/puzo2.jpg" alt="Responsive Image">
        </a>
         <center>
          <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
        </center>

        </div>

        <div class="col-md-3 col-sm-6">
    <a href="#" class="thumbnail" style="height: 300px;"><img src="images/Crime/sidney1.jpg" alt="Responsive Image">
    </a>
      <center>
        <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
      </center>
    </div> 

    </div>
    </div>  
    </div>




      <div id="Drama" class="panel panel-success" style="margin-bottom: 0px; margin-top: 45px;">
      <div class="panel-heading">

      <?php if (!isset($_SESSION['email'])) { ?>
         <a href="login.php"><h4 style="color: #000000"><strong>DRAMA AND ROMANCE</strong></h4></a>
          <?php
                 } else {
                ?>

        <a href="drama.php">  <h4 style="color: #000000"><strong>DRAMA AND ROMANCE</strong></h4>
         <?php
             }
            
          ?> 

      </div>
     <div class="container" style="margin-bottom: 50px; margin-top: 40px;">
      <div class="row">
      <div class="col-md-3 col-sm-6" style="margin-right: 80px; margin-left: 60px;" >
       <a href="#" class="thumbnail" style="height: 300px;"><img src="images/Drama/darker.jpg" alt="Responsive Image">
        </a>
        <center>
          <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
        </center>
      </div>

        <div class="col-md-3 col-sm-6" style="margin-right: 80px;">
        <a href="#" class="thumbnail" style="height: 300px;" ><img src="images/Drama/mistakes.jpg" alt="Responsive Image">
        </a>
            <center>
              <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
            </center>
        </div>

        <div class="col-md-3 col-sm-6">
            <a href="#" class="thumbnail" style="height: 300px;"><img src="images/Drama/mind.jpg" alt="Responsive Image">
            </a>
              <center>
                <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
              </center>
        </div>      
    </div>
    </div>  
    </div>




      <div id="Fantasy" class="panel panel-success" style="margin-bottom: 0px; margin-top: 45px;">
      <div class="panel-heading">
      <?php if (!isset($_SESSION['email'])) { ?>
         <a href="login.php"><h4 style="color: #000000"><strong>FANTASY FICTION</strong></h4></a>

                  <?php
                 } else {
                ?>

        <a href="fantasy.php">  <h4 style="color: #000000"><strong>FANTASY FICTION</strong></h4>
         <?php
             }
            
          ?> 
      </div>
     <div class="container" style="margin-bottom: 50px; margin-top: 40px;">
      <div class="row">
      <div class="col-md-3 col-sm-6" style="margin-right: 80px; margin-left: 60px;" >
       <a href="#" class="thumbnail" style="height: 300px;"><img src="images/fantasy/harry1.jpg" alt="Responsive Image">
        </a>
        <center>
          <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
        </center>
      </div>

        <div class="col-md-3 col-sm-6" style="margin-right: 80px;">
        <a href="#" class="thumbnail" style="height: 300px;" ><img src="images/fantasy/harry2.jpg" alt="Responsive Image">
        </a>
          <center>
              <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
          </center>
        </div>

        <div class="col-md-3 col-sm-6">
    <a href="#" class="thumbnail" style="height: 300px;"><img src="images/fantasy/twilight1.jpg" alt="Responsive Image">
    </a>
      <center>
        <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
      </center>
    </div>      
    </div>
    </div>  
    </div>




      <div id="History" class="panel panel-success" style="margin-bottom: 0px; margin-top: 45px;">
      <div class="panel-heading">
      <?php if (!isset($_SESSION['email'])) { ?>
         <a href="login.php"><h4 style="color: #000000"><strong>HISTORICAL FICTION</strong></h4></a>

                <?php
                 } else {
                ?>

        <a href="history.php">  <h4 style="color: #000000"><strong>HISTORICAL FICTION</strong></h4>
         <?php
             }
            
          ?> 
      </div>
     <div class="container" style="margin-bottom: 50px; margin-top: 40px;">
      <div class="row">
      <div class="col-md-3 col-sm-6" style="margin-right: 80px; margin-left: 60px;" >
       <a href="#" class="thumbnail" style="height: 300px;"><img src="images/history/war.jpg" alt="Responsive Image">
        </a>
        <center>
          <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
        </center>
      </div>

        <div class="col-md-3 col-sm-6" style="margin-right: 80px;">
        <a href="#" class="thumbnail" style="height: 300px;" ><img src="images/history/catch.jpg" alt="Responsive Image">
        </a>
          <center>
              <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
          </center>
        </div>

        <div class="col-md-3 col-sm-6">
    <a href="#" class="thumbnail" style="height: 300px;"><img src="images/history/gone.jpg" alt="Responsive Image">
    </a>
      <center>
        <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
      </center>
    </div>      
    </div>
    </div>  
    </div>



      <div id="Mystery" class="panel panel-success" style="margin-bottom: 0px; margin-top: 45px;">
      <div class="panel-heading">
           <?php if (!isset($_SESSION['email'])) { ?>
         <a href="login.php"><h4 style="color: #000000"><strong>MYSTERY AND THRILLER</strong></h4></a>

                <?php
                 } else {
                ?>

        <a href="mystery.php">  <h4 style="color: #000000"><strong>MYSTERY AND THRILLER</strong></h4>
         <?php
             }
            
          ?> 
      </div>
     <div class="container" style="margin-bottom: 50px; margin-top: 40px;">
      <div class="row">
            <div class="col-md-3 col-sm-6" style="margin-right: 80px; margin-left: 60px;" >
             <a href="#" class="thumbnail" style="height: 300px;"><img src="images/mystery/code.jpg" alt="Responsive Image">
              </a>
              <center>
                <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
              </center>
            </div>

              <div class="col-md-3 col-sm-6" style="margin-right: 80px;">
              <a href="#" class="thumbnail" style="height: 300px;" ><img src="images/mystery/dan1.jpg" alt="Responsive Image">
              </a>
                <center>
                    <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
                </center>
              </div>

              <div class="col-md-3 col-sm-6">
                <a href="#" class="thumbnail" style="height: 300px;"><img src="images/mystery/lock1.jpg" alt="Responsive Image">
                </a>
                  <center>
                    <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
                  </center>
               </div>      
        </div>
    </div>  
    </div>


      <div id="Science" class="panel panel-success" style="margin-bottom: 0px; margin-top: 45px;">
      <div class="panel-heading">
      <?php if (!isset($_SESSION['email'])) { ?>
         <a href="login.php"><h4 style="color: #000000"><strong>SCIENCE FICTION</strong></h4></a>

                <?php
                 } else {
                ?>

        <a href="science.php">  <h4 style="color: #000000"><strong>SCIENCE FICTION</strong></h4>
         <?php
             }
            
          ?> 
      </div>
     <div class="container" style="margin-bottom: 50px; margin-top: 40px;">
      <div class="row">
      <div class="col-md-3 col-sm-6" style="margin-right: 80px; margin-left: 60px;" >
       <a href="#" class="thumbnail" style="height: 300px;"><img src="images/science/big.jpg" alt="Responsive Image">
        </a>
        <center>
          <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
        </center>
      </div>

        <div class="col-md-3 col-sm-6" style="margin-right: 80px;">
        <a href="#" class="thumbnail" style="height: 300px;" ><img src="images/science/earth.jpg" alt="Responsive Image">
        </a>
          <center>
              <a href="#"><button type="submit" class="btn btn-primary btn-lg active">Order Now!</button></a>
          </center>
        </div>

        <div class="col-md-3 col-sm-6">
    <a href="#" class="thumbnail" style="height: 300px;"><img src="images/science/world.jpg" alt="Responsive Image">
    </a>
      <center>
        <a href="#"><button type="submit" class="btn btn-primary btn-lg active">MYSTERY</button></a>
      </center>
    </div>      
    </div>
    </div>  
    </div>



    <div class="footer" style="background-color: #000000; color: #ffffff; height: 30px;">
    <center>
      <p>Copyright @ BookWorm. All Rights Reserved | Contact Us: +91 90000 0000</p>
    </center>
      
    </div>



</body>
</html>