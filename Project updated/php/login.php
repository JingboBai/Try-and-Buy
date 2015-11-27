<?php
 //Start the Session
// session_start();
include "dbconnect.php";
if (isset($_POST['email']) && isset($_POST['password'])){
	$username = $_POST['email'];
	$password = $_POST['password'];

$sql = "SELECT * FROM UserInfo WHERE email='$username' and password='$password'";
$result = mysqli_query($conn, $sql) or die(mysqli_error());

$count = mysqli_num_rows($result);
if ($count == 1){
	header("Location: ./index.php");
	exit;
}else {
	 echo "Incorrect UserName or Password";
}
}
 mysqli_close($conn);
?>
