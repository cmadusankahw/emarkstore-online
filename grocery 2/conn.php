<?php

$servername = "localhost";
$username = "accsxaec_shop";
$password = "login123";
$db = "accsxaec_shop";
// Create connection
$conn = new mysqli($servername, $username, $password,$db);
//Check connection
 if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
 } 
 
?>  


