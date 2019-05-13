<?php include "conn.php"; //DB login   
$query="SELECT class_id, AVG(class_rating) FROM reviews WHERE class_id = $";

if (!$result) {
    die('Invalid query: ' . mysql_error());
}
$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($selected_class);
$stmt->fetch();
$stmt->close();


?>