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
      
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.js"></script>
      <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.js"></script>
      <script type="text/javascript">
    
      </script>
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
        <div class="search">
          <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for  iSchool Classes">

          <ul id="myUL">
            <!-- These will be populated by our database -->

            <?php
            include "conn.php"; //DB login   

            $query="SELECT class FROM classes";
            $result = $conn -> query($query);

             while($row = $result->fetch_assoc()) {
              echo "<li id=".$row["class"]."><a href='".$row["class"]."'> INST".$row["class"]."</a></li>";
          }

            $conn->close();

            ?>
          </ul> 
        </div>
      </div>

      </div>  
      <script> //This script is to make our search box 'autocomplete'
      function myFunction() {
          var input, filter, ul, li, a, i, txtValue;
          input = document.getElementById("myInput");
          filter = input.value.toUpperCase();
          ul = document.getElementById("myUL");
          li = ul.getElementsByTagName("li");
          for (i = 0; i < li.length; i++) {
              a = li[i].getElementsByTagName("a")[0];
              txtValue = a.textContent || a.innerText;
              if (txtValue.toUpperCase().indexOf(filter) > -1) {
                  li[i].style.display = "";
              } else {
                  li[i].style.display = "none";
              }
          }
      }
      </script>
    </div>
  </body>
</html>