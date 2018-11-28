<?php
  session_start();
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database="bookmymovie";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  //echo "Connected successfully";

$movie_name=$_SESSION['movie_name'];
$cid=$_SESSION['user_id']; //echo $movie_name;

$ticket=$_POST["ticket"];
//$moviename=$_POST["moviename"];
$timing=$_POST["timing"];
$amount=$ticket*120;






$sql = "INSERT INTO mybookings (moviename, seats, amount, timing, Cid)
VALUES ('$movie_name', '$ticket', '$amount','$timing', '$cid')";

if ($conn->query($sql) === TRUE) {
    //echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>
		

		<title>BookMyMovie | Booking Successful</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

	    <div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header">Booking Successful!</h1>
	        
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-md-8">
	        <h4>Your tickets have been booked :)</h4>
	        
	        
	        <h3 class="text-success">Show your QR code or unique Code at the theatre Box Office to get your tickets.</h3>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-md-8 text-center">
	        <br>
	        <img src="img/qrcode.jpg">
	        <h3 class="text-center bold text-danger">Code: 3FJ95RX</h3>
					<br>
					<a href="index.php" type="button"  id="btnBook" class="btn btn-danger btn-block" >Done</a>
	      </div>

	    </div>


	    <div>
	    <p class="spacer"></p>
	    </div>

	    <div class="row">
	      <div class="col-md-8 alert-success">
	        <p><br>Let us know how your experience with BookMyMovie was.
						Go ahead give us a <a href="contact.php" class="text-danger">feedback</a>.<br>
						Your opinion matters the most. Keep supporting! :)</p>
	      </div>
	    </div>
	    <br>

		</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
	</body>
</html>
