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
      <h1>Welcome to Grambeast!</h1>

      <p>GramBeast is a fun and new way to learn a language.</p><br>

      <p>Create a <a href="student/studentSignup.php">student</a> account, select an instructor, then adopt a pet with a name and set its attributes. Check in daily with your pet to feed him or her by completing grammar or vocabulary exercises and watch your pet grow!<p><br>

      <p>Or create an <a href="instructor/instructorSignup.php">instructor</a> account and provide students who have selected you with questions.</p><br>

      <p>Make an account as either a <b>student</b> to maintain a pet or an <b>instructor</b> to make questions!</p>
      <ul>
        <li><a href="student/studentSignup.php">Student</a></li>
        <br>
        <li><a href="instructor/instructorSignup.php">Instructor</a></li>
      </ul><br><br>
      <p style="text-align: center">Already have an account?</p>
      <ul>
        <li><a target="_blank" href="users.php">Login</a></li>
      </ul>
    </div>
  </body>
</html>
