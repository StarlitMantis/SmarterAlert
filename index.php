<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h3>User Name:</h3>
<input type="text" name="user_name">
<h3>Password:</h3>
<input type="password" name="password">
	<input type="hidden" name="action" value="login">
	<?php
	$user_name = filter_input(INPUT_POST,'user_name');
	$password = filter_input(INPUT_POST,'password');
	$action = filter_input(INPUT_POST,'action');
?>
        <p><a href="Package Entry.php">Click Me</a></p>
        <p><a href="databaseconnect.php">database</a></p>
    </body>
</html>
