<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "eugenio";

$conn = new mysqli($host, $user, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>