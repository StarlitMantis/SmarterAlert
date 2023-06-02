<?php
$servername = "localhost";
$username = "emma";
$password = "Silverlight.1";
$dbname = "smarteralert";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>