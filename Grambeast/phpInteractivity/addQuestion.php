<?php
session_start();
include "dbh.php";


$uid = $_SESSION['uid'];
$course = $_POST['course'];
$question = $_POST['question'];
$answer = $_POST['answer'];


$sql = "INSERT INTO questions (teacher, course, question, answer) 
VALUES ('$uid', '$course', '$question', '$answer')";

$result = mysqli_query($db, $sql);
header("Location: ../instructor/instructorIndex.php");
?>