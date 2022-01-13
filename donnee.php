<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="livreor";

$conn = mysqli_connect("localhost","root","","livreor");
session_start();

if (!$conn) {
    die("Connection Failed: ".mysqli_connect_error()); 
}

?>