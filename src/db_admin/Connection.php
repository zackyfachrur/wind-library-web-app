<?php

function loadEnv()
{
   $env_file = file_get_contents(__DIR__ . './.env');
   $env_lines = explode("\n", $env_file);
   foreach ($env_lines as $line) {
      if (!empty($line) && !str_starts_with($line, '#')) {
         list($key, $value) = explode('=', $line);
         putenv("$key=$value");
      }
   }
}

loadEnv();

$server = "localhost";
$username = "root";
$pass = "";
// $pass = getenv("DB_PASS");
$dbname = "db_tiket";

$connection = mysqli_connect($server, $username, $pass, $dbname);

if (!$connection) {
   echo "Invalid database connection.";
}
