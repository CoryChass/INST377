<!doctype html>
<html class="no-js" lang="">
  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      <title>iSchool Course Reviews</title>
      <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- Linking CSS Styles  -->
      <link rel="stylesheet" href="css/style.css">
      <!-- FontAwesome (For navigation icons/symbols)  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- JQuery import  -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
      <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>


  </head>
  <body>
    <div id="logo"><img class="logo" src="img/iSchool_logo.jpg"></div>
    
    <header class="masthead_custom">
      <div class="centered"><h1 class="site-title">iSchool Class Reviews</h1></div>
      <ul class="navbar_custom">
        <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="about.php">About</a>
        <a class="active" href="review.php"><i class="fa fa-pencil fa-fw"></i> Post A Review</a>
        </ul>
    </header>
      <div class="container_custom centered">  <!-- Class used to center our content-->
        <div id='avg_review'></div>
        
        <?php include "conn.php"; //DB login   
        $query="SELECT class_id, AVG(class_rating) FROM reviews";
        $result = $conn -> query($query);
        $row = mysqli_fetch_array($result);
        echo($row[1]);
        $conn->close();?>

  

      </div>
  </body>
</html>
