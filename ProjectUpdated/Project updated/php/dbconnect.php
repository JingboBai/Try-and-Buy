<?php
session_start();
$connect=mysql_connect("localhost:8888", "root", "root") or die("Error connecting to database: ".mysql_error());
mysql_select_db("try&buy_db") or die(mysql_error());

// Check connection
if ($connect->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>
