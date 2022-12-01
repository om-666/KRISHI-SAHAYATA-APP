<?php
$hostName = "localhost";
$userName = "root";
$password = "";
$databaseName = "metro";
 $conn = new mysqli($hostName, $userName, $password, $databaseName);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>