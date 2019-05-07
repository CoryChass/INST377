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

      <!-- Bootstrap Framework -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <div id="logo"><img class="logo" src="img/iSchool_logo.jpg"></div>
    
    <header class="masthead">
      <div class="centered"><h1 class="site-title">iSchool Class Reviews</h1></div>
      <ul class="navbar_custom">
        <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="about.php">About</a>
        <a class="active" href="review.php"><i class="fa fa-pencil fa-fw"></i> Post A Review</a>
        </ul>
    </header>
    
    <div class="container_custom centered">  <!-- Class used to center our content-->
      <div class="page">
        <div class="title">Review an UMD iSchool Class</div>
        <form action="">
          Class Title:
          <select name="class" id='dropdown-menu'>
            <?php include "conn.php"; //DB login 
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }


            $query="SELECT class_id FROM classes ORDER BY class_id ASC";
            $result = $conn -> query($query);

             while($row = $result->fetch_assoc()) {
              echo "<option class='dropdown-item' id=".$row["class_id"]."><a> INST".$row["class_id"]."</a></option>";
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

          Would you take this class again?
          <br>
          <input type="radio" name="yesno" value="yes"> Yes<br>
          <input type="radio" name="yesno" value="no"> No<br>

          <label class="statement">Level of Difficulty:</label>
          <ul class='likert'>
            <li>
              <input type="radio" name="likert" value="strong_agree">
              <label>Low Effort</label>
            </li>
            <li>
              <input type="radio" name="likert" value="strong_agree">
              <label>Neutral</label>
            </li>
            <li>
              <input type="radio" name="likert" value="strong_agree">
              <label>Difficult</label>
            </li>
          </ul>

          Textbook use
          <br>
          <input type="radio" name="yesno" value="yes"> Yes<br>
          <input type="radio" name="yesno" value="no"> No<br>
          Grade received
          <select name="memGrade1" >
            <option value="A+">A+</option>
            <option value="A">A</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B">B</option>
            <option value="B-">B-</option>
            <option value="C+">C+</option>
            <option value="C">C</option>
            <option value="C-">C-</option>
            <option value="F">F</option>
          </select>
          <br>

          <button type="submit">Submit</button>
        </form>



      </div>
    </div>
  </body>
</html>
