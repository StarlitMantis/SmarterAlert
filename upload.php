<?php
session_start();
include "dbconn.php";
$userid= $_SESSION['id'];
$numentries=$_SESSION['numentries'];
if (file_exists($_FILES['file']['tmp_name'])){
//grabs file that was just uploaded
if (($handle = fopen($_FILES['file']['tmp_name'], "r")) !== FALSE) {
    //creates a loop that puts each row from the .csv file into $data
    while (($data = fgetcsv($handle, 10000, ",","\"","\\")) !== FALSE) {
        $stmt = $conn->prepare("INSERT INTO customers (firstname, lastname, company, address1, address2, address3, city, state, zip, zip4, phone1, phone2, email, mailboxnumber,userid)"
                . " VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param("sssssssssssssss", $data[0],$data[1],$data[2],$data[3],$data[4],$data[5],$data[6],$data[7],$data[8],$data[9],$data[10],$data[11],$data[12],$data[13],$userid);
        $stmt->execute();
    }
}
}



header("location: settings.php");
?>