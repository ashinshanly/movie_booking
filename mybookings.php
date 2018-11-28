<!doctype html>
<html lang="en">
	<head>
		<?php include 'components/header.php';?>
		

		<title>My Bookings</title>
		<style type="text/css">
            
            tab1 { padding-left: 4em; }
            tab2 { padding-left: 8em; }
            tab3 { padding-left: 12em; }
            tab4 { padding-left: 16em; }
            tab5 { padding-left: 20em; }


            </style>

	</head>
	<body>
		<?php include 'components/navbar.php';



				$cid=$_SESSION['user_id'];

				


  				$link = mysqli_connect("localhost","root","","bookmymovie");



  				$result = mysqli_query($link,"SELECT * FROM mybookings WHERE Cid='$cid'");
  				$row = mysqli_fetch_assoc($result);
  				

				

  				mysqli_close($link);





		?>

		<div class="container">

	    <div class="row">
	      <div class="col-lg-12">
	        <h1 class="page-header">My Bookings!</h1>
	        
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-md-8">
	      <p style="color: green; ">
	      	<?php 
	      		if($row){

	      	/*	echo "<table border='2'>
				<tr>
				Movie&nbspTickets&nbspTotalAmount&nbspTiming&nbsp<br>
				
				<th>Movie</th>
				<th>Ticket(s)</th>
				</tr>"; */
				
				
//				while($row= mysqli_fetch_array($result) )
//				{
				/*	echo "<tr>";
					echo "<td>" . $row['moviename'] . "</td>";
					echo "<td>" . $row['seats'] . "</td>";
					echo "</tr>";
				*/

//					echo $row['moviename'];
//					echo "hi";



//				} 

				echo "<table>";
				echo"<tr><strong>Movie&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTickets&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTotalAmount&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspTiming&nbsp</strong></tr>";
	      	foreach($result as $la){

	      		$id=$la['bid'];

	      		
	      		echo "<tr>";
echo "<td>" . $la['moviename'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
echo "<td>" . $la['seats'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
echo "<td>" . $la['amount'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
echo "<td>" . $la['timing'] . "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
echo("<td><button onclick=\"location.href='cancel.php?bid=$id'\"><strong>Cancel</strong></button></td>");
echo "</tr>";

	      	//	foreach ($la as $value) {
	      	 	
    		//		echo "<td>".$value."&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</td>";
    				    //"$value &nbsp";
    			
			//	}
				
				echo"</tr>";//echo "<br>";
			}
			echo "</table>";
				}
				else{
				echo "You Have Not Made Any Bookings Yet! :)";
				}
			

	      	?>
	      
	      </p>
	      
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-md-8 text-center">
	        <br>
	        
					
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
