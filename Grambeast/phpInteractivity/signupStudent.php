<?php
session_start();
include "dbh.php";

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$course = $_POST['course'];
$animalType = $_POST['animalType'];
$animalName = $_POST['petName'];

$timestamp = date("Y-m-d H:i:s");

$sql = "INSERT INTO students (first, last, uid, pwd, course, animalType, animalName, timeSinceAte) 
VALUES ('$first', '$last', '$uid', '$pwd', '$course', '$animalType', '$animalName', '$timestamp')";

$result = mysqli_query($db, $sql);
header("Location: ../student/studentSignup.php");

?>