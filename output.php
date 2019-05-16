<?php include "conn.php"; //DB login   

if($conn->connect_error) {
  exit('Could not connect');
}

$class_selected = $_GET['q'];

$query = "SELECT classes.class_id, class_name, AVG(class_rating) AS avg_rating FROM reviews 
JOIN classes ON classes.class_id = reviews.class_id
WHERE classes.class_id = $class_selected";


$result = $conn -> query($query);

$row = $result -> fetch_assoc();


if ($row["avg_rating"] == NULL) {
	echo "<h2>No Reviews... yet</h2>";
	echo "<div class='centered'><button class='add_review_btn' name='submit' type='submit'>Submit Review</button></div>";
} else {
	echo "<h2>Reviews for:".$row["class_name"]."</h2>";

	echo $row["avg_rating"];
}

#var_dump($result);

//Close connection
$conn->close();

?>