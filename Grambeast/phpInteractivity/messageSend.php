<?php
session_start();
include "dbh.php";

$target = $_POST['to'];
$sender = $_SESSION['uid']; // whoever is logged in is the sender
$subject = $_POST['subject'];
$body = $_POST['body'];

// comeback and check that the to or target is a valid username


$sql = "INSERT INTO messages (target, sender, subject, body) 
VALUES ('$target', '$sender', '$subject', '$body')";

$result = mysqli_query($db, $sql);
header("Location: messanger.php");

?>