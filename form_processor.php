<?php

include "conn.php"; 


/* Variables that need to be set... */
$class_id = $_POST['class_id'];
$class_rating = $_POST['class_rating'];
$would_take_again = $_POST['would_take_again'];
$difficulty_level = $_POST['difficulty_level'];
$textbook_use =  $_POST['textbook_use'];
$grade_received = $_POST['grade_received'];

$sql = <<<SAVESQL
INSERT INTO reviews
  (class_id, class_rating, would_take_again, difficulty_level, textbook_use, grade_received)
  VALUES ('$class_id', '$class_rating', '$would_take_again', '$difficulty_level', '$textbook_use', '$grade_received');

SAVESQL;
if ($conn->query($sql)) {
  $last_id = $conn->insert_id;
  echo "New record created successfully. Last inserted ID is: $last_id.";
} 

else {
  echo "Error: $conn->error<br /><pre>$sql</pre><br />";
}

$conn->close();
 ?>
