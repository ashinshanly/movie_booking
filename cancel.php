<?php

  session_start();

  if(isset($_SESSION["user_name"])) {
    //$userEmail = $_SESSION["user_email"];
    $conn = mysqli_connect("localhost","root","","bookmymovie");
    $bid = $_GET['bid'];
    if (mysqli_query($conn,"DELETE FROM mybookings WHERE bid='$bid'")) {
      echo '<script>alert("Ticket Cancelled!!");window.open("./mybookings.php", "_self")</script>';
    }
    else {
      echo "Error cancelling: " . mysqli_error($conn);
    }

    
    mysqli_close($conn);
  }
?>
