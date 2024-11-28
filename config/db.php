<?php
$db = 'localhost'; 
$username = 'root'; 
$password = ''; 
$dbname = 'pemweb-db';
$port = "3307"; 

$db_connect = mysqli_connect($db, $username, $password, $dbname, $port);

if (!$db_connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>



