<?php 
include 'config.php';

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


$first_name = $_POST['first-name'];
$last_name = $_POST['last-name'];
$email = $_POST['email'];
$phone = $_POST['phone'];


// Query to save contacts to the database
$query = "INSERT INTO contacts ( first_name,last_name, email, phone) VALUES ('$first_name', '$last_name', '$email', '$phone')";

if (mysqli_query($conn, $query)) {
  echo "<div class='alert alert-success mt-4' role='alert'><h3>Your contact details have been received.</h3></div>";
  header('location: index.html');		
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($conn);
  }	

mysqli_close($conn);

?>