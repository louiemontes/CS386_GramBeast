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
          echo "<button type='submit'>LOGIN</button>";
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
      <p style="text-align: center">Already have an account?</p>
      <ul>
        <li><a target="_blank" href="login">Login</a></li>

      </ul>
    </div>
  </body>
</html>
