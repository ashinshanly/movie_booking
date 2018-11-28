<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Bollywood Movies</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
				<div class="col-lg-12">
					<h1 class="page-header">Bollywood Movies
						<small>Now Showing</small>
					</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">Bollywood Movies</li>
					</ol>
				</div>
			</div>

			<!-- Movie One -->
			<div class="row">
				<div class="col-md-7">
					<a href="moviedetail.php?MovieName=Raees">
						<img class="img-responsive img-hover poster" src="img/raees.jpg" alt="Raees">
					</a>
				</div>
				<div class="col-md-5">
					<h3>Raees</h3>
					<h4><i class="fa fa-star"></i> 5/5</h4>
					 
					<a class="btn btn-danger" href="moviedetail.php?MovieName=Raees">View Timings</a>
					<br><br>
					<a class="btn btn-danger" href="https://www.youtube.com/watch?v=J7_1MU3gDk0">Trailer</a>
				</div>
			</div>
			<hr>

			<!-- Movie Two -->
			<div class="row">
				<div class="col-md-7">
					<a href="moviedetail.php?MovieName=Kaabil">
					<img class="img-responsive img-hover poster" src="img/kaabil.jpg" alt="Kaabil">
					</a>
				</div>
				<div class="col-md-5">
					<h3>Kaabil</h3>
					<h4><i class="fa fa-star"></i> 5/5</h4>
					
					<a class="btn btn-danger" href="moviedetail.php?MovieName=Kaabil">View Timings</a>
					<br><br>
					<a class="btn btn-danger" href="https://www.youtube.com/watch?v=nubDFeiUAsI">Trailer</a>
				</div>
			</div>
			<hr>

  	</div>

	  <div>
	    <p class="spacer"></p>
	  </div>

		<?php include 'components/footer.php';?>
	</body>
</html>
