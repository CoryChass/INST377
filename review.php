<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>iSchool Course Reviews</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
    <div id="logo">
      <img class="logo" src="img/iSchool_logo.jpg">
    </div>
    <header class="masthead">
      <div class="centered"><h1 class="site-title">iSchool Class Reviews</h1></div>
      <ul class="navbar">
        <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="about.php">About</a>
        <a class="active" href="review.php"><i class="fa fa-pencil fa-fw"></i> Post A Review</a>
      </ul>
    </header>
    <div class="container centered">  <!-- Class used to center our content-->
      <div class="page">  
        <div class="title">Review a UMD iSchool Class</div>
        <form>
          Class Title:
          <select name="class">
            <option href="?INST126"value="126">INST126</option>
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


            $query="SELECT class FROM classes";
            $result = $conn -> query($query);

             while($row = $result->fetch_assoc()) {
              echo "<option id=".$row["class"]."><a> INST".$row["class"]."</a></option>";
          }

            $conn->close();

            ?>
          </select>
          <br>
          Class Rating:
          <div class="rating">
            <span class="fa fa-fw fa-star checked"></span>
            <span class="fa fa-fw fa-star checked"></span>
            <span class="fa fa-fw fa-star checked"></span>
            <span class="fa fa-fw fa-star"></span>
            <span class="fa fa-fw fa-star"></span>
          </div>
          <button type="submit">Submit</button>
        </form>

      </div>
    </div>
  </body>
</html>
