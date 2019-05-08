<?php 

  include "conn.php"; //DB login 

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {die("Connection failed: " . $conn->connect_error);}

  //SQL
  $query="SELECT class_id FROM classes ORDER BY class_id ASC";
  $result = $conn -> query($query);

  while($row = $result->fetch_assoc()) {
    echo "<option class='dropdown-item' id=".$row["class_id"]."><a> INST".$row["class_id"]."</a></option>";}

  //Close connection
  $conn->close();

?>