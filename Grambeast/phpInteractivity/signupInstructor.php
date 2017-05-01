<?php
session_start();
include "dbh.php";

$first = $_POST['first'];
$last = $_POST['last'];
$uid = $_POST['uidInst'];
$pwd = $_POST['pwd'];

$sql = "INSERT INTO instructors (first, last, uid, pwd) 
VALUES ('$first', '$last', '$uidInst', '$pwd')";

$result = mysqli_query($db, $sql);
header("Location: ../student/instructorSignup.php");

?>