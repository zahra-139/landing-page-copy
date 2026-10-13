<?php

$host = "localhost";
$usename = "root";
$password = "";
$database = "clarity_db";

$conn = mysqli_connect($host, $usename, $password, $database);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}

?>