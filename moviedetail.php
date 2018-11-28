<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Movie ShowTime Details</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header"><?php
	          echo $_GET["MovieName"];
	          ?>
	          <small><i class="fa fa-star"></i> 5/5</small>
	        </h1>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-md-8">
	        <h3>Synopsis</h3>
	        <p>
						<?php
						
							if(isset($_SESSION["user_name"])) {
		        		
							
						
	          	$MovieName = $_GET["MovieName"];


	          	$_SESSION['movie_name'] = $_GET["MovieName"];      ////////

	          	$username=$_SESSION['user_name'];
	          	$email=$_SESSION["user_email"];


	          	$link = mysqli_connect("localhost","root","","bookmymovie");

  				$result = mysqli_query($link,"SELECT * FROM customer WHERE Email = '$email'");
  				$row = mysqli_fetch_assoc($result);
  
  				$_SESSION['user_id']= $row['Cid'];

  

 				 mysqli_close($link);
 				 
 				 }
							else {
								$MovieName = $_GET["MovieName"];


	          					$_SESSION['movie_name'] = $_GET["MovieName"];
								$link = mysqli_connect("localhost","root","","bookmymovie");

  								$result = mysqli_query($link,"SELECT * FROM Movies WHERE MovieName = '$MovieName'");
  								$row = mysqli_fetch_assoc($result);
  
  								$s=$row['Description'];
  				
  

 				 				mysqli_close($link);;

							}



	          	include 'php/displayInfo.php';

	          ?>

	          
					</p>
					<br>
	        <h4>Duration</h4>
	        
	        <p>2hrs 30mins</p>
	        <br>
						<?php
							if(isset($_SESSION["user_name"])) {
		        		echo '<a href="./booknow.php" id="btn" class="btn btn-danger">Book Now</a>';
							}
							else {
								echo '<a class="btn btn-danger" data-toggle="modal" data-target="#loginModal" id="btn">Book Now</a>';

							}
						?>
	      </div>
	    </div>

	    <!-- Show Timings Row -->
	    <div class="row">
	      <div class="col-lg-12">
	        <h3 class="page-header">Show Timings</h3>
	      </div>

	      <div class="col-sm-3 col-xs-6">
	        <p>10:00 AM</p>
	        <small>&#8377; 120.00</small>
	      </div>

	      <div class="col-sm-3 col-xs-6">
	        <p>12:30 PM</p>
	        <small>&#8377; 120.00</small>
	      </div>

	      <div class="col-sm-3 col-xs-6">
	        <p>3:00 PM</p>
	        <small>&#8377; 120.00</small>
	      </div>

	      <div class="col-sm-3 col-xs-6">
	        <p>6:00 PM</p>
	        <small>&#8377; 120.00</small>
	      </div>
	    </div>

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
	</body>
</html>
