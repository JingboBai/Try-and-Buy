<?php
 //Start the Session
 session_start();
include "dbconnect.php";
if (isset($_POST['email']) && isset($_POST['password'])){
	$username = $_POST['email'];
	$password = $_POST['password'];
$sql = "SELECT * FROM UserInfo WHERE email='$username' and password='$password'";
$result = mysqli_query($conn, $sql) or die(mysqli_error());
$count = mysqli_num_rows($result);

function redirect($url, $flash_message = NULL){
  if (flash_message){
    $_SESSION["flash"] =$flash_message;
  }
  header ("location: $url");
  die;
}


if ($count == 1){
	$name= mysqli_fetch_assoc($result);
	$_SESSION["name"]= $name["FirstName"];
  header("Location: ./index.php");
	}else {
    redirect("./register-login.php", "Incorrect UserName or Password");
	}
}
 mysqli_close($conn);
?>
