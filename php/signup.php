<?php

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
  echo "Connected successfully";

  $name=$_POST["name"];
  $gender=$_POST["gender"];
  $phone=$_POST["phone"];
  $email=$_POST["email"];
  $password=$_POST["password"];





  $sql = "INSERT INTO CUSTOMER (Name, Password, Gender, Email, Phno)
  VALUES ('$name', '$password', '$gender', '$email', '$phone')";

  if ($conn->query($sql) === TRUE) {
      echo'<script>
              alert("signed up successfully!!");
              window.open("../index.php", "_self");
          </script>';
  }
  else {
      echo "Error: " . $sql . "<br>" . $conn->error;
      echo '<script>window.open("../index.php", "_self");</script>';
  }
  mysqli_close($conn);

/*
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
  echo "Connected successfully";



  $name = $_POST['name'];
  $email = $_POST['email'];
  $gender=$_POST["gender"];
  $phone=$_POST["phone"];
  $password =  $_POST['password'];



  function NewUser()
{
  
  $query = "INSERT INTO customer (Name,Password, Gender, Email, Phno) VALUES ('$name', '$password', '$gender', '$email', '$phone')";
  $data = mysql_query ($query)or die(mysql_error());
  if($data)
  {
  echo "YOUR REGISTRATION IS COMPLETED...";
  }
}

function SignUp()
{
if(!empty($_POST['name']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
  $query = mysql_query("SELECT * FROM customer WHERE Name = '$_POST["name"]' AND Password = '$_POST["password"]'") or die(mysql_error());

  if(!$row = mysql_fetch_array($query) or die(mysql_error()))
  {
    NewUser();
  }
  else
  {
    echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
  }
}
}
if(isset($_POST['submit']))
{
  SignUp();
}
mysqli_close($conn);
*/

?>
