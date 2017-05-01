<?php
session_start();
include "dbh.php";

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uid'];
$pwd = $_POST['pwd'];
$course = $_POST['course'];
$animalType = $_POST['animalType'];

// //animal a response checks
// if(empty($_POST["messageType"])) {
//   $wantsAResponse = "No";
// } else {
//   $wantsAResponse = "Yes";
// }

//make course have to check if valid
// echo $animalType;
$timestamp = date("Y-m-d H:i:s");
$health = 1;

$sql = "INSERT INTO students (first, last, uid, pwd, course, animalType, timeSinceAte, health) 
VALUES ('$first', '$last', '$uid', '$pwd', '$course', '$animalType', '$timestamp', $health)";

$result = mysqli_query($db, $sql);
header("Location: ../student/studentSignup.php");

?>

<!-- 
$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($db, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
	echo "Your username or password is incorrect.";
	echo "\n";
	echo '<a href = "users.php">Try Again</a>';
} else {
	$_SESSION['uid'] = $row['uid'];
} -->