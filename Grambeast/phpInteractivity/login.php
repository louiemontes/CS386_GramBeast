<?php
session_start();
include "dbh.php";

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$accountType = $_POST['accountType'];
$instructor = 'instructor';
$student = 'student';

if (empty($_POST['accountType'])) {
  echo "Please select your account type.";
  echo "\n";
  echo '<a href = "../users.php">Try Again</a>';
} elseif ($accountType === $instructor){
  $sql = "SELECT * FROM instructors WHERE uid='$uid' AND pwd='$pwd'";
  $result = mysqli_query($db, $sql);
  if (!$row = mysqli_fetch_assoc($result)) {
    echo "Your username or password is incorrect.";
    echo "\n";
    echo '<a href = "../users.php">Try Again</a>';
  } else {
    $_SESSION['uid'] = $row['uid'];
    $page = "../instructor/instructorIndex.php";
  }
} else {
  $sql = "SELECT * FROM students WHERE uid='$uid' AND pwd='$pwd'";
  $result = mysqli_query($db, $sql);
  if (!$row = mysqli_fetch_assoc($result)) {
    echo "Your username or password is incorrect.";
    echo "\n";
    echo '<a href = "../users.php">Try Again</a>';
  } else {
    $_SESSION['uid'] = $row['uid'];
    $page = "../student/studentIndex.php";
  }
}

header("location: " . $page);
?>