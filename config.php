<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eLibrary01";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully <br>";


// function dd($array)
// {
//   echo "<pre>";
//   print_r($array);
//   echo "<pre>";
//   die();
// }
?>