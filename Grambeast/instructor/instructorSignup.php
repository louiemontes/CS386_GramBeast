<?php
	session_start();
?>



<!DOCTYPE html>
<html>
    <head>
        <title>
            Instructor Form
        </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../grambeastStyles.css"/>
    </head> 
    <meta charset="utf-8">
    <title>GramBeast</title>
    <link type="text/css" rel="stylesheet" href="grambeastStyles.css"/>
  </head>
  <body>
    <div id="message">
      <h1>Sign up as an instructor!</h1>

    <div id = "mainContent">
      <?php 
        if (!isset($_SESSION['uidInst'])) {
          echo "<br><br><br>";
          echo "<form action='../phpInteractivity/signupStudent.php' method='POST'>";
          echo "<input type='text' name='first' placeholder='Firstname'><br>";
          echo "<input type='text' name='last' placeholder='Lastname'><br>";
          echo "<input type='text' name='uid' placeholder='Username'><br>";
          echo "<input type='password' name='pwd' placeholder='Password'><br>";
          echo "<button type='submit'>SIGN UP</button>";
          echo "</form>";
        } else {
        echo "Welcome ";
        echo $_SESSION['uidInst'];
        echo ".";
        echo "<br><br><br>";
        echo "<form action='../phpInteractivity/logout.php'>";
        echo "<button>LOG OUT</button>";
        echo "</form>";
        }
      ?>
    </div>
    </div>

</body>
</html>
