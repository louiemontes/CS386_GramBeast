<?php
  session_start();
  include "../phpInteractivity/dbh.php";
?>


<!DOCTYPE html>
<html>
    <head>
        <title>
          Student Home
        </title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <link type="text/css" rel="stylesheet" href="../grambeastStyles.css"/>
    </head> 
    <meta charset="utf-8">
    <title>GramBeast</title>
  </head>
  <body>
    <div id="message">
    <b>Student Home</b><br>
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
          echo "Welcome Student ";
          echo $_SESSION['uid'];
          echo ".";

          // animal shower
          echo "<br><br><br>";
          $uid = $_SESSION['uid'];
          $sql = "SELECT * FROM students WHERE uid='$uid'";
          $result = $db->query($sql);
          if ($result->num_rows > 0) {
            // output data of each row (used from W3Schools, altered for my needs)
            while($row = $result->fetch_assoc()) {
                $full = '2';
                $med = '1';
                // $empty = '0';
                echo "Enrolled Course: " . $row["course"]. "<br>";
                echo "Animal: " . ucfirst($row["animalType"]). "<br>";
                echo "Name: " . ucfirst($row["animalName"]). "<br>";
                if ($row["animalType"] === "snake") {
                  if ($row["petHealth"] === $full) {
                    echo "<img src='../assets/snake_full.png' style='width:304px;height:228px;'>";
                  } elseif ($row["petHealth"] === $med) {
                    echo "<img src='../assets/snake_hungry.png' style='width:304px;height:228px;'>";
                  } else {
                    echo "<img src='../assets/snake_dead.png' style='width:304px;height:228px;'>";
                  }
                } else {
                  if ($row["petHealth"] === $full) {
                    echo "<img src='../assets/wolf_full.png' style='width:304px;height:228px;'>";
                  } elseif ($row["petHealth"] === $med) {
                    echo "<img src='../assets/wolf_hungry.png' style='width:304px;height:228px;'>";
                  } else {
                    echo "<img src='../assets/wolf_dead.png' style='width:304px;height:228px;'>";
                  }
                }
                $course = $row['course'];
                echo "<br><br><br>";
                echo "<b>Feed your pet! (Answer a question): </b>";
                echo "<form action='../phpInteractivity/answerQuestion.php' method='POST'>";
                echo "Answer any question from down below: <br>";
                // effectively an HTML variable lol
                echo "<input type='text' name='course' value='$course' style='visibility:hidden;'";
                echo "<br>Answer: <textarea name='answer' rows='4' cols='50' placeholder='It is ...'></textarea><br>";
                echo "<br><button type='submit'>ANSWER QUESTION</button>";
                echo "</form>"; 

                // question shower
                echo "<br><br><br>";
                echo "<b>Questions (or unprepared food) for your pet: </b>";
                echo "<br>";
                $course = $row["course"];
                $sql = "SELECT * FROM questions WHERE course='$course'";
                $result = $db->query($sql);
                if ($result->num_rows > 0) {
                  // output data of each row (used from W3Schools, altered for my needs)
                  while($row = $result->fetch_assoc()) {
                      echo "Question: " . $row["question"]. "<br>";
                      echo "<br>";
                  }
                } else {
                  echo "0 questions for your course. Ask your teacher to make a question today!";
                }
                echo "<br>";
            }
            echo "<br>";
          }
          echo "<form action='../phpInteractivity/logout.php'>";
          echo "<button>LOG OUT</button>";
          echo "</form>";
        }
      ?>
    </div>
  </div>

</body>
</html>