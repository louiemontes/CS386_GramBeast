
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
  </head>
  <body>
    <div id="message">
      <h1>Sign up as an Instructor!</h1>

    <div id = "mainContent">
      <?php 
          echo "<br><br><br>";
          echo "<form action='../phpInteractivity/signupInstructor.php' method='POST'>";
          echo "<br>Firstname: <input type='text' name='first' placeholder='Firstname'><br>";
          echo "<br>Lastname: <input type='text' name='last' placeholder='Lastname'><br>";
          echo "<br>Username: <input type='text' name='uid' placeholder='Username'><br>";
          echo "<br>Password: <input type='password' name='pwd' placeholder='Password'><br>";
          echo "<br><button type='submit'>SIGN UP</button>";
          echo "</form>"; 
      ?>
    </div>
      <p style="text-align: center">Now try to log in:</p>
      <ul>
        <li><a href="../users.php">Login</a></li>
      </ul>
    </div>

</body>
</html>
