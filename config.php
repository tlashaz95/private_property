<?php
ini_set('memory_limit', '-1');

$servername = "localhost";
$username = "root";
$password = "quiz123";
$db="up_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>