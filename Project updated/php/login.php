<?php

include "dbconnect.php";
if (isset($_POST['email']) && isset($_POST['password'])){
   $username = $_POST['email'];
	 $password = $_POST['password'];
   $sql = "SELECT * FROM UserInfo WHERE email='$username' and password='$password'";
   $result = mysqli_query($conn, $sql) or die(mysqli_error());
   $count = mysqli_num_rows($result);
   if ($count == 1){
	    $name= mysqli_fetch_assoc($result);
      //When login successful,start the Session
      session_start();
      error_log("Checkpoint..1");
      $_SESSION["name"] = $name["FirstName"];
      //echo("Checkpoint..2 var_dump($name[\"FirstName\"])");
      //print("Checkpoint..2 {$_SESSION['name']}");
      header("Location: ./index.php");
	 }
   else {
      header("Location: ./register-login.php?error=1");
	 }
}
mysqli_close($conn);
?>
