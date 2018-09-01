<?php
$servername = "localhost";
$uname = "root";
$pw = "";
$db = "banking";

if(!isset($_SESSION)) session_start();

// Create connection
$conn = mysqli_connect($servername, $uname, $pw, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>