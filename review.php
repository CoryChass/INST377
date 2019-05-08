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
      <div class="page">
        <div class="title">Review an UMD iSchool Class</div><hr>
        <form method="post">
          <div class="form-group ">
            <label class="statement" for="review_form">Class Title</label>
            <select class="select form-control" id="select" name="select">
             <?php include "get_classes.php"?> <!-- Jumps to PHP file to use SQL to grab classes -->
            </select>
          </div>
          <div class="form-group ">
            <label class="statement" for="select">Class Rating</label>
            <div class="rate">
              <input type="radio" id="star5" name="rate" value="5" />
              <label for="star5" title="text">5 stars</label>
              <input type="radio" id="star4" name="rate" value="4" />
              <label for="star4" title="text">4 stars</label>
              <input type="radio" id="star3" name="rate" value="3" />
              <label for="star3" title="text">3 stars</label>
              <input type="radio" id="star2" name="rate" value="2" />
              <label for="star2" title="text">2 stars</label>
              <input type="radio" id="star1" name="rate" value="1" />
              <label for="star1" title="text">1 star</label>
            </div>
          </div>
          <div class="form-group ">
            <label class="statement" for="select">Would you take this class again?</label>
            <input type="radio" class="form-radio" name="would_take_again" value="1"> Yes
            <input type="radio" class="form-radio" name="would_take_again" value="0"> No
          </div>
          <div class="form-group ">
            <label class="statement" for="select">Level of Difficulty</label>
            <ul class='likert'>
                <li>
                  <input type="radio" name="difficulty_level" value="1">
                  <label>No Effort</label>
                </li>
                <li>
                  <input type="radio" name="difficulty_level" value="2">
                  <label>Easy (<1 hour homework/week)</label>
                </li>
                <li>
                  <input type="radio" name="difficulty_level" value="3">
                  <label>Neutral</label>
                </li>
                <li>
                  <input type="radio" name="difficulty_level" value="4">
                  <label>Hard (>3 hours homework/week)</label>
                </li>
                <li>
                  <input type="radio" name="difficulty_level" value="5">
                  <label>Impossible</label>
                </li>
              </ul>
            </div>
            <div class="form-group ">
              <label class="statement" for="select">Textbook used</label>
              <input type="radio" class="form-radio" name="would_take_again" value="1"> Yes
            <input type="radio" class="form-radio" name="would_take_again" value="0"> No
            </div>
            <div class="form-group ">
              <label class="statement" for="select">Grade received</label>
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
            </div>

          <div class="form-group">
             <button class="submitbtn" name="submit" type="submit">Submit Review</button>
           </div>
        </form>
      </div>
    </div>
  </body>
</html>
