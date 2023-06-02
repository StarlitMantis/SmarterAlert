<?php
session_start();
include "dbconn.php";
$_LocalKey = $_SESSION['id'];
$TrackingNumber1 = $_REQUEST['Tracking_Number1'];
$Courier1 = $_REQUEST['Courier1'];
$Sender1 = $_REQUEST['Sender1'];
$Mailbox_Num1 = $_REQUEST['Mailbox_Num1'];


$packagenum = $_REQUEST['numofpackages'];

$sql = ("UPDATE settings set numentries FROM settings");





$sql = "INSERT INTO '0001' (tracking_num, courier, sender, mailbox)
VALUES ('$TrackingNumber1', '$Courier1', '$Sender1', '$Mailbox_Num1')";

if ($conn->query($sql) === TRUE) {
  echo "Table MyGuests created successfully";
} else {
  echo "Error inserting elements into table: " . $conn->error;
}

$conn->close();
?>
