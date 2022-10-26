<?php
$servername = "localhost";
$database = "seedra";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password, $database);

$conn->set_charset("utf8");

if(!$conn){
    die("Conection failed: " . mysqli_connect_error());
}
//echo "Connected successfully!";

