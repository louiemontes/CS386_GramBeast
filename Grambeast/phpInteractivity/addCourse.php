<?php
session_start();
include "dbh.php";


$title = $_POST['title'];
$uid = $_SESSION['uid'];

$sql = "INSERT INTO courses (title, teacher) 
VALUES ('$title', '$uid')";

$result = mysqli_query($db, $sql);
header("Location: ../instructor/instructorIndex.php");
?>