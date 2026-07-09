<?php
$host = "sql203.infinityfree.com";
$user = "if0_42371156";
$password = "A1IhEqrDGSZ5yD";
$database = "if0_42371156_registration";

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>