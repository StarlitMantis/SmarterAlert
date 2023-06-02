<?php
session_start();
include "dbconn.php";


if (isset($_POST['endusername']) && isset($_POST['enduserpassword'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['endusername']);

    $pass = validate($_POST['enduserpassword']);

    if (empty($uname)) {

        

        exit();

    }else if(empty($pass)){

        

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE endusername='$uname' AND enduserpassword='$pass'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['endusername'] === $uname && $row['enduserpassword'] === $pass) {

                

                $_SESSION['user_name'] = $row['endusername'];

                $_SESSION['name'] = $row['name'];
                
                $_SESSION['id'] = $row['enduser_id'];
                
                header("location: Package_Entry.php");
                

                exit();

            }else{

                

                exit();

            }

        }else{

            

            exit();

        }

    }

}else{

    

    exit();

}




?>