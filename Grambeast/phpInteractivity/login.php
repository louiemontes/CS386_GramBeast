<?php
session_start();
include "dbh.php";

$uid = $_POST['uid'];
$pwd = $_POST['pwd'];

$sql = "SELECT * FROM users WHERE uid='$uid' AND pwd='$pwd'";
$result = mysqli_query($db, $sql);

if (!$row = mysqli_fetch_assoc($result)) {
	echo "Your username or password is incorrect.";
	echo "\n";
	echo '<a href = "users.php">Try Again</a>';
} else {
	$_SESSION['uid'] = $row['uid'];
}

header("Location: users.php");
?>