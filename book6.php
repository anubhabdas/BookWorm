<?php
  require("includes/common.php");
?>

<!DOCTYPE html>
<html>
<head>
	<title> BookWorm | Book Page 1</title>

		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="indexcss.css">
	
</head>
<body>

      <?php
        include 'includes/header.php';
		require_once("includes/common.php");
	?>
	<?php
		$qry = "select * from items where id='$_REQUEST[id]'";
		$res = mysqli_query($con,$qry);
		echo "<br><br><br>";
		if(mysqli_affected_rows($con)>0){
			while($r=mysqli_fetch_array($res,MYSQLI_NUM)){

	?>
		<div class="col-md-3 col-sm-6" style="margin-top: 80px; margin-left: 100px;">


		<?php
		   echo "<div><img class='responsive' src='images/mystery/$r[4]'></div>";
		?>

		</div>



		<div class="col-md-3 col-sm-6">

			<div style="text-decoration: underline; margin-top: 80px;">
				<h3>Book Name:</h3>
			</div>
			<div>
			<h3>
			<b>
			<?php
				echo "<div>$r[1]</div>";
			
			?>
			</h3>
			</b>
			</div>


			<button type="button" class="btn btn-sm btn-danger" type="submit" value="BUY" style="height: 40px; width: 200px; margin-top: 30px; border-radius: 25px;" ><b>BUY BOOK</b></button><br>
			<button type="button" class="btn btn-sm btn-primary" type="submit" value="BORROW" style="height: 40px; width: 200px; margin-top: 20px; border-radius: 25px;"><b>BORROW BOOK</b></button><br>
			<button type="button" class="btn btn-sm btn-info" type="submit" value="DOWNLOAD" style="height: 40px; width: 200px; margin-top: 20px; border-radius: 25px;"><b>DOWNLOAD E-BOOK</b></button><br>
			<button type="button" class="btn btn-sm btn-warning" type="submit" value="GIFT" style="height: 40px; width: 200px; margin-top: 20px; border-radius: 25px;"><b>GIFT BOOK</b></button>

		</div>

		<div class="col-md-3 col-sm-6">

						<div style="text-decoration: underline; margin-top: 120px;">
				<h3>Prices:</h3>
			</div>
			<div>
			<h3>
			<b> 
			<?php
				echo "<div>Buy Book : Rs $r[2]</div> <br>";
				echo "<div>Borrow Book : Rs $r[3]</div> <br>";
				echo "<div>Download E-Book : Rs $r[3]</div> <br>";
				echo "<div>Gift Book : Rs $r[2]</div> <br>";
				}
			}
			?>
			</h3>
			</b>
			</div>
		</div>

			
    <div class="container-fluid" id="foot" style="background-color: #282626; color: #ffffff; margin-top: 500px;">
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