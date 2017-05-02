<?php
session_start();
include "dbh.php";


$uidCurrent = $_SESSION['uid'];
$answerInput = $_POST['answer'];
$course = $_POST['course'];

$sql = "SELECT * FROM questions WHERE course='$course'";
$result = $db->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
  	if ($answerInput === $row['answer']) {
      $process = "UPDATE students SET petHealth = petHealth +1 WHERE uid = '$uidCurrent' AND petHealth < 2 ";
      $toProcess = $db->query($process);
      $sql2 = "DELETE FROM questions WHERE answer = '$answerInput' limit 1";
	  $result2 = mysqli_query($db, $sql2);
    }
  }
}

header("Location: ../student/studentIndex.php");
?>