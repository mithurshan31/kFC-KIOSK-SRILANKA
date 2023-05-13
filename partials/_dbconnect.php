<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "kfckioskDB";

$conn = new mysqli($server, $username, $password, $database);
if (!$conn){
    die("Error". mysqli_connect_error());
}

?>
