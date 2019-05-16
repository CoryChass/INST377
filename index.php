<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>iSchool Course Reviews</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon Linking  -->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">

    <!-- Linking CSS Styles  -->
    <link rel="stylesheet" href="css/style.css">
    <!-- FontAwesome (For navigation icons/symbols)  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- JQuery import  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>

    <script src="/js/review_output.js"></script>
  </head>
  
  <body>
    <!-- Header/Nav Bar  -->
    <div id="logo"><img class="logo" src="img/iSchool_logo.jpg"></div>
    
    <!-- JQuery import  -->
    <header class="masthead_custom">
      <div class="centered"><h1 class="site-title">iSchool Class Reviews</h1></div>
      <ul class="navbar_custom">
        <a class="active" href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
        <a href="about.php">About</a>
        <a class="active" href="review.php"><i class="fa fa-pencil fa-fw"></i> Post A Review</a>
        </ul>
    </header>
    
    <!-- Class used to center our content, all body content heald below-->
    <div class="container_custom centered">
    
    <div class="search">
      <input type="text" id="myInput" onkeyup="search()" placeholder="Search for  iSchool Classes">
      <ul id="myUL">
      <!-- These will be populated by our database -->
      <?php include "conn.php"; //DB login   
        $list="SELECT class_id, class_description FROM classes ORDER BY class_id ASC";
        $review = "SELECT class_id, AVG(class_rating) FROM reviews WHERE class_id = $";
        $result1 = $conn -> query($list);
        $result2 = $conn -> query($review);
        while($row = $result1->fetch_assoc()) {
          echo "<li id=".$row["class_id"]."><a href='#'> INST".$row["class_id"]."<span class='class_description_list single-line'>".$row["class_description"]."</span></a></li>";}
        $conn->close();?>  
      </ul>
      <div id='review_output'></div> 
    </div>
    </div> 
  
    <script>
      function search() {
        // Declare variables
        var input, filter, ul, li, a, i, txtValue;
        input = document.getElementById('myInput');
        filter = input.value.toUpperCase();
        ul = document.getElementById("myUL");
        li = ul.getElementsByTagName('li');

        // Loop through all list items, and hide those who don't match the search query
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
     
      //Script to show long-form description when clicked on 
      $(document).ready(function(){ 
      $('li').click(function(){
        $('li').not(this).hide();
        $("ul li span").toggleClass('single-line').toggleClass('class_description_active');
      });
      
      //Script to  grab review data

      $( "ul#myUL li" ).click(function($class_selected) {
        var $class_selected= $(this).attr("id")
        
        //Advised not to use post per TA 5/15
        //$.post("output.php", function(class_selected, status){
        //console.log("Data: " + $class_selected + "\nStatus: " + status);

        var xhttp; 
        if ($class_selected == "") {
          console.log("Error")
          return;
        }
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
          if (this.readyState == 4 && this.status == 200) {
          document.getElementById("review_output").innerHTML = this.responseText;
          }
        };
        xhttp.open("GET", "output.php?q="+$class_selected, true);
        xhttp.send();
        
      });
      });
      </script>


      
    </body>
</html>