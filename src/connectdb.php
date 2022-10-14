<?php
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "";
$database = "amahzone";

$connection = new mysqli($servername, $username, $password, $database);

if ($connection->connect_error) {
  echo "nope:";
}
?>