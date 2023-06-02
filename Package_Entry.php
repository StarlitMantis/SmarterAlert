<?php
        session_start();
        include "dbconn.php";
        
        $sql = ("SELECT numentries FROM settings WHERE id=?");
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$_SESSION['id']);
        $stmt->execute();
        $result=$stmt->get_result();
        $row = $result->fetch_row();
        echo $_SESSION['id'];
        
        echo $row[0];
        
        //Yo, just a heads up those numbers at the top are session information and will not be present in the final build. They appear in a few different pages btw
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Package Entry</title>
    </head>
    <body>
        
        <form action="insert.php" method="post">
        <h3>Package Entry</h3>
        <p>Select number of packages <select name="numofpackages" id="numofpackages">
            <option selected disabled hidden><?php echo $row[0];?></option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
        </select></p>
        
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
<p><a href="settings.php">Settings</a></p>

<?php
/*
// the message
$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("emma@starlitmantis.com","My subject",$msg);
*/
?>

        </form>    
</body>
</html>
