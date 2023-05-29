<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Package Entry</title>
    </head>
    <body>
        <form action="insert.php" method="post">
        <h3>Package Entry</h3>
        
        <hr>
        <p>01.
<input type="text" name="Tracking_Number1" id="TrackingNumber1">
<select name="Courier1" id="Courier1">
    <option value="UPS">UPS</option>
    <option value="FedEx">FedEx</option>
    <option value="DHL">DHL</option>
    <option value="USPS">USPS</option>
    <option value="OnTrac">OnTrac</option>
    <option value="Certified">Certified</option>
    <option value="Other">Other</option>
</select>
<input type="text" name="Sender1" id="Sender1">
<input type="text" name="Mailbox_Num1" id="Mailbox_Num1">
</p>

<input type="submit" value="Submit">
<?php
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("emma@starlitmantis.com","My subject",$msg);
?>
        </form>    
</body>
</html>
