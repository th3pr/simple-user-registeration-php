<?php
// Database Connection
$host = "localhost";
$db_password = "";
$db_name = "test";
$db_user = "root";


$conn = mysqli_connect($host, $db_user,$db_password, $db_name) or die("cannot connect");
?>