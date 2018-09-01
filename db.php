<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "banking";

if(!isset($_SESSION)) session_start();

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>