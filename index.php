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
    
    <div class="search">
      <input type="text" id="myInput" onkeyup="search()" placeholder="Search for  iSchool Classes">
      <ul id="myUL">
      <!-- These will be populated by our database -->
      <?php include "conn.php"; //DB login   
        $query="SELECT class_id, class_description FROM classes ORDER BY class_id ASC";
        $result = $conn -> query($query);
        while($row = $result->fetch_assoc()) {
          echo "<li id=".$row["class_id"]."><a href='#'> INST".$row["class_id"]."<span class='class_description_list single-line'>".$row["class_description"]."</span></a></li><div id='review_output'>";}
        $conn->close();?>  
      </ul> 
    </div>
    </div> 
  
      <script>
      
      $(document).ready(function(){ 
        //This script is to make our search box 'autocomplete'
        function search() {
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
              }}}       

        $('li').click(function(){
          $('li').not(this).toggle();
          $("ul li span").toggleClass('single-line').toggleClass('class_description_active');
        });

        });
      </script>


      
    </body>
</html>