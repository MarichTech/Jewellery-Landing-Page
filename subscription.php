<?php 
include 'config.php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$email = $_POST['email'];


// Query to save email to the database
$query = "INSERT INTO subscription (email) VALUES ('$email')";

if (mysqli_query($conn, $query)) {
  echo "<div class='alert alert-success mt-4' role='alert'><h3>You have subscribed to our news letters.</h3></div>";
  header('location: index.html');		
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }	

mysqli_close($conn);

?>