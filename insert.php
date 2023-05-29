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

$TrackingNumber1 = $_REQUEST['Tracking_Number1'];
$Courier1 = $_REQUEST['Courier1'];
$Sender1 = $_REQUEST['Sender1'];
$Mailbox_Num1 = $_REQUEST['Mailbox_Num1'];






$sql = "INSERT INTO packages (Tracking_Num, Courier, Sender, Mailbox)
VALUES ('$TrackingNumber1', '$Courier1', '$Sender1', '$Mailbox_Num1')";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error inserting elements into table: " . $conn->error;
}

$conn->close();
?>


