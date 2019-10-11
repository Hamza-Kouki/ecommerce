<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "ecommerce";

// Create connection
$con = mysqli_connect($servername,$username,$password,$db_name);

// Check connection
if (mysqli_connect_errno()) {
    die ("Failed to connect to MySQL: " . mysqli_connect_error());
}   
?>