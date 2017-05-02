<?php
  session_start();
  include "../phpInteractivity/dbh.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
          Instructor Home
        </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../grambeastStyles.css"/>
    </head> 
    <meta charset="utf-8">
    <title>GramBeast</title>
  </head>
  <body>
    <div id="message">
    <b>Instructor Home</b><br>
    <div id = "mainContent">
      <?php 
        if (!isset($_SESSION['uid'])) {
          echo "<br>";
          echo "Hey, how did you get here? <br>";
          echo "Try logging in instead: <br>";
          echo "<ul>";
          echo "<li><a href='../users.php'>Login</a></li>";
          echo "</ul>";
          echo "<br><br><br>";
        } else {
          echo "Welcome Instructor ";
          echo $_SESSION['uid'];
          echo ".";

          // course adder
          echo "<br><br><br>";
          echo "Add a course:</br>";
          echo "<form action='../phpInteractivity/addCourse.php' method='POST'>";
          echo "<br>Title: <input type='text' name='title' placeholder='SPA101, GER302, ARB201, etc.'><br>";
          echo "<br><button type='submit'>MAKE CLASS</button>";
          echo "</form>"; 
          echo "<br>";

          // course shower
          echo "<br><br><br>";
          echo "Courses you teach: ";
          echo "<br>";
          $uid = $_SESSION['uid'];
          $sql = "SELECT * FROM courses WHERE teacher='$uid'";
          $result = $db->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row (used from W3Schools, altered for my needs)
            while($row = $result->fetch_assoc()) {
                echo "Course: " . $row["title"]. "<br>";
            }
          } else {
            echo "0 courses taught. Start a course today!";
          }
          echo "<br>";

          // question adder
          echo "<br><br><br>";
          echo "Add a question: </br>";
          echo "<form action='../phpInteractivity/addQuestion.php' method='POST'>";
          echo "<br>For your course: <input type='text' name='course' placeholder='SPA101, GER302, ARB201, etc.'><br>";
          echo "<br>Question: <textarea name='question' rows='4' cols='50' placeholder='What is ...?'></textarea><br>";
          echo "<br>Answer: <textarea name='answer' rows='4' cols='50' placeholder='It is ...'></textarea><br>";
          echo "<br><button type='submit'>MAKE QUESTION</button>";
          echo "</form>"; 
          echo "<br>";

          // question shower
          echo "<br><br><br>";
          echo "Questions you wrote: ";
          echo "<br>";
          $sql = "SELECT * FROM questions WHERE teacher='$uid'";
          $result = $db->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row (used from W3Schools, altered for my needs)
            while($row = $result->fetch_assoc()) {
                echo "Course: " . $row["course"]. "<br>";
                echo "Question: " . $row["question"]. "<br>";
                echo "Answer: " . $row["answer"]. "<br>";
                echo "<br>";
            }
          } else {
            echo "0 questions written. Make a question today!";
          }
          echo "<br>";


          echo "<form action='../phpInteractivity/logout.php'>";
          echo "<button>LOG OUT</button>";
          echo "</form>";
        }
      ?>
    </div>
  </div>

</body>
</html>