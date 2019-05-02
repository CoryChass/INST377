<?php
$servername = "localhost";
$username = 'corychas_377';
$password = 'INST377INST377';
$dbname = 'corychas_377';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 

 ?>