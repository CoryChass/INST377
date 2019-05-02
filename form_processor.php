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

$class = htmlentities($_POST['class']);


$sql="INSERT INTO classes (id, class, description) VALUES (null, '".$class."', 'Coming Soon')";

if ($conn->query($sql) === TRUE) {
    echo $class . "<br><h1>New record created successfully</h1>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>
