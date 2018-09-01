<?php
include('db.php');
if(isset($_SESSION['success'])) unset($_SESSION['success']);
if(isset($_SESSION['username'])) unset($_SESSION['username']);
header('Location: login.php')
?>