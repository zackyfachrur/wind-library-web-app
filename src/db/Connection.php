<?php
$server = 'localhost';
$username = 'root';
$pass = '';
$dbname = 'db_tiket';

$connection = mysqli_connect($server, $username, $pass, $dbname);

if (!$connection) {
   echo "Invalid database connection.";
}
