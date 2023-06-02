<?php

session_start();
        include "dbconn.php";
        
        $sql = ("SELECT numentries FROM settings WHERE id=?");
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s",$_SESSION['id']);
        $stmt->execute();
        $result=$stmt->get_result();
        $_SESSION['numentries'] = $result->fetch_row();
        echo $_SESSION['id'];
        
        echo $row[0];
        ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Settings</title>
    </head>
    <body>
        <form id="form1" action="upload.php" method="post">
        <h3>Settings</h3>
        <p>Select number of packages <select name="numofpackages" id="numofpackages">
            <option selected disabled hidden><?php echo $_SESSION['numentries'];?></option>
            <option value="10">10</option>
            <option value="25">25</option>
            <option value="50">50</option>
        </select></p>
        </form>
        
        <h4>Upload Customer .CSV File</h4>
        <div class="container">
            <form action="upload.php" method="post" enctype="multipart/form-data" id="form2">
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFileInput" name="file">
                        <label class="custom-file-label" for="customFileInput">Select File:</label>
                    </div>
                    <div class="input-group-append">
                        <input type="submit" name="submit" value="upload" class="btn btn-primary">
                    </div>
                </div>
            </form>
        </div>
    </body>   
</html>
