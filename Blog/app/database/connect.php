
<?php
// create database
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "blog";
$port = 3306;
// create connection
$conn = mysqli_connect($serverName, $userName, $password, $dbName, $port);
if (!$conn) {
    die(" Connection Error ");
}

?>