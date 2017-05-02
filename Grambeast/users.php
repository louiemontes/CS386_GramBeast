<?php
  session_start(); //every page needs this
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GramBeast</title>
    <link type="text/css" rel="stylesheet" href="grambeastStyles.css"/>
  </head>
  <body>
    <div id="message">
      <br><br>
      <?php 
        if (!isset($_SESSION['uid'])) {
          echo "You are not logged in.";
          echo "<br><br><br>";
          echo "<form action='phpInteractivity/login.php' method='POST'>";
          echo "<input type='text' name='uid' placeholder='Username'><br>";
          echo "<input type='password' name='pwd' placeholder='Password'><br>";
          echo "<br><input type='radio' id='accountTypeInstructor' name='accountType' value='instructor'> Instructor";
          echo "<br><input type='radio' id='accountTypeStudent' name='accountType' value='student'> Student<br>";
          echo "<br><br><button type='submit'>LOGIN</button>";
          echo "<button><a href='student/studentSignup.php'>Make Student</a></button>";
          echo "<button><a href='instructor/instructorSignup.php'>Make Instructor</a></button>";
          echo "</form>";
        } else {
        echo "Welcome ";
        echo $_SESSION['uid'];
        echo ".";
        echo "<br><br><br>";
        echo "<form action='phpInteractivity/logout.php'>";
        echo "<button>LOG OUT</button>";
        echo "</form>";
        }
      ?>
    </div>
  </body>
</html>
