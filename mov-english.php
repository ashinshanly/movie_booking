<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>

		<title>BookMyMovie | Hollywood Movies</title>
	</head>
	<body>
		<?php include 'components/navbar.php';?>

		<div class="container">

			<div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header">Hollywood Movies
	          <small>Now Showing</small>
	        </h1>
	        <ol class="breadcrumb">
	          <li><a href="index.php">Home</a></li>
	          <li class="active">Hollywood Movies</li>
	        </ol>
	      </div>
	    </div>

	    <!-- Movie One -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Infinity War">
	          <img class="img-responsive img-hover poster" src="img/infinitywar.jpg" alt="Infinity War">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Infinity War</h3>
	        <h4><i class="fa fa-star"></i> 5/5</h4>
	        
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Infinity War">View Timings</a>
	        <br><br>
	        <a class="btn btn-danger" href="https://www.youtube.com/watch?v=6ZfuNTqbHE8">Trailer</a>
	      </div>
	    </div>
	    <hr>

	    <!-- Movie Two -->
	    <div class="row">
	      <div class="col-md-7">
	        <a href="moviedetail.php?MovieName=Doctor Strange">
	          <img class="img-responsive img-hover poster" src="img/cs-strange.png" alt="Doctor Strange">
	        </a>
	      </div>
	      <div class="col-md-5">
	        <h3>Doctor Strange</h3>
	        <h4><i class="fa fa-star"></i> 5/5</h4>
	        <p>
	        
	        
	        <a class="btn btn-danger" href="moviedetail.php?MovieName=Doctor Strange">View Timings</a>
	        <br>
	        <br>
	        <a class="btn btn-danger" href="https://www.youtube.com/watch?v=HSzx-zryEgM">Trailer</a>

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
