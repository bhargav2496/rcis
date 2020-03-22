<?php

$serverName = "localhost";
$userName = "bhargav";
$password = "bhargav";
$dbName = "rcis";

$conn = new mysqli($serverName, $userName, $password,$dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

?>