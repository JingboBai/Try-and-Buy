<?php
 //Start the Session
session_start();
include "dbconnect.php";
if (isset($_POST['email']) && isset($_POST['password'])){
	$username = $_POST['email'];
	$password = $_POST['password'];

$sql = "SELECT * FROM UserInfo WHERE email='$username' and password='$password'";
$result = mysql_query( $sql) or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 1){
	header("Location: ./index.php");
	exit;
}else {
	echo "Login Failed";
}
}
 mysql_close($conn);

?>
