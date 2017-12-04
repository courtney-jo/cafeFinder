<?php

$user = "root";
$host = "localhost";
$pass = '';
$db = 'cafefinder';

$connect = mysqli_connect('localhost', $user, $pass);
if(!$connect){
	die("connection failed: " . mysqli_error());
}

mysqli_select_db($connect, $db);

mysqli_close($connect);

?>
