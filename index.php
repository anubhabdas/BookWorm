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


<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 50px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/1.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>A book is a dream that you hold in your hand.</h3>
        <p>–Neil Gaiman</p>
      </div>
    </div>

    <div class="item">
      <img src="images/2.jpg" alt="Chania">
      <div class="carousel-caption">
        <h3>Whenever you read a good book, somewhere in the world a door opens to allow in more light.</h3>
        <p>-Vera Nazarian</p>
      </div>
    </div>

    <div class="item">
      <img src="images/3.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Great books help you understand, and they help you feel understood.</h3>
        <p>-John Green</p>
      </div>
    </div>

    <div class="item">
      <img src="images/4.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>In a good book the best is between the lines.</h3>
        <p>–Swedish Proverb</p>
      </div>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <div style="margin: 40px 150px 80px 180px; background-color: #e5dede; padding: 10px 10px 10px 40px; border-radius: 25px;">
      <h3><i>I divide all readers into two classes; those who read to remember and those who read to forget.</i></h3>
      <center>
            <h3><i>~William Lyon Phelps</i></h3>
      </center>
    </div>


<div style="margin-left: 180px; ">
  <h2 style="text-decoration: underline;">Features:</h2>



<div class="panel-group" id="accordion" style="width: 800px; margin-left: 100px; margin-bottom: 70px;">

  <div class="panel panel-default" style="margin-top: 30px;">
    <div class="panel-heading" style="background-color: #afceff;">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1"><h4><b>E-Book</b> </h4></a>
      </h4>
    </div>
    <div id="collapse1" class="panel-collapse collapse in">
      <div class="panel-body" style="background-color: #d3e4ff">
      <h4>We have a wide collection of e-books available. You can select a particular book and read the synopsis of the book. If you want to continue reading, you can buy the e-book after which you will be able to download a .pdf file.</h4>
   </div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" style="background-color: #9cfc97">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2"><h4><b>Buy Book</b> </h4></a>
      </h4>
    </div>
    <div id="collapse2" class="panel-collapse collapse">
      <div class="panel-body" style="background-color: #c0f9bd">
      <h4>From our online library, you can select any book from our wide collection of books. You can pay the required amount of money on cash on delivery facility and receive the book within 7 days. Happy Reading!</h4>
    </div>
    </div>
  </div>


  <div class="panel panel-default">
    <div class="panel-heading" style="background-color: #f4ea9c">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3"><h4><b>Borrow Book</b> </h4></a>
      </h4>
    </div>
    <div id="collapse3" class="panel-collapse collapse">
      <div class="panel-body" style="background-color: #fcf6c4">
      <h4>If you want to borrow a book from our library for a certain period of time, you have that oppurtunity here! You can borrow a book for certain sums of money and then return it and get 10% of the amount you actually paid!</h4>

</div>
    </div>
  </div>

    <div class="panel panel-default">
    <div class="panel-heading" style="background-color: #fcabab">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4"><h4><b>Gift Book</b> </h4> </a>
      </h4>
    </div>
    <div id="collapse4" class="panel-collapse collapse">
      <div class="panel-body" style="background-color: #f7caca">
      <h4>This is the most innovative feature of our website! You can select a particular book, choose any wrapper from our site and send it to any address of your friend. You can pay online while you order the book.</h4>
    </div>
    </div>
  </div>

</div>

</div>



<div style="margin-bottom: 20px;">
<div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 30px; width: 179px; height: 282px; float: right; margin-right: 310px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/mystery/lock1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/mystery/dan1.jpg" alt="Chania">
    </div>

    <div class="item">
      <img src="images/fantasy/harry1.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="images/fantasy/twilight1.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="images/drama/darker.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="images/biography/hawking.jpg" alt="Flower">
    </div>

    <div class="item">
      <img src="images/Crime/sidney1.jpg" alt="Flower">
    </div>

  </div>



  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>

</div>


  <div style="margin-left: 330px; float: left; margin-top: 30px; margin-bottom: 25px; background-image: url(images/back.jpg); width: 500px; padding: 10px 15px 10px 15px; border-radius: 25px;">
    <h3><b>Men do not understand books until they have a certain amount of life, or at any rate no man understands a deep book, until he has seen and lived at least part of its contents.</b></h3>
    <h3><i>~Ezra Pound</i></h3>
  </div>
  <div style="margin-left: 470px;">
    <a href="home.php"><button type="button" class="btn btn-sm btn-primary" type="submit" value="FOLLOW" style="height: 60px; width: 220px; border-radius: 25px;" ><h4>Welcome to our Library!</h4> </button></a>
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