<?php

$DBHOST = 'localhost';
$DBUSER = 'root';
$DBPASSWORD = '';
$DBNAME = 'pemweb-db';
$port = "3307"; 

$db_connect = mysqli_connect($DBHOST,$DBUSER,$DBPASSWORD,$DBNAME,$port);

if(mysqli_connect_errno()){
    echo "failed connect to mysql ".mysqli_connect_error(); 
}

