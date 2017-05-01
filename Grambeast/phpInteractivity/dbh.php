<?php
    define("DB_SERVER", "tund"); // tund localhost
    define("DB_USERNAME", "lm877"); // lm877 root
    define("DB_PASSWORD", "88gate");  // 88gate password
    define("DB_DATABASE", "lm877"); // lm877 lm877
    $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

// $conn = mysqli_connect("localhost", "root", "root", "logintest");

if (!$db) {
	die("Connection failed: ".mysqli_connect_error()); // remove later to avoid sql injections!
}

?>
