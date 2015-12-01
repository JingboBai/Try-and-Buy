<?php
include "dbconnect.php"; //connects to the database
if (isset($_GET['email'])){
	$email= $_GET['email'];
	$query="SELECT password from UserInfo where email='$email'";
	$result = mysqli_query($conn, $query);
	$rows= mysqli_fetch_assoc($result);
	$count= mysqli_num_rows($result);
	// If the count is equal to one, we will send message other wise display an error message.
	if($count==1)
	{
		$rows= mysqli_fetch_assoc($result);
		$pass  =  $rows['password'];//FETCHING PASS
		$email = $rows['email'];
		echo " For username: $email and password is: $password";
	//	header("Location: ./register-login.php?$pass?$email?ForgetpasswordDeatils=1");

		//	redirect("./register-login.php", "*");
		}
 }
	else {
		echo "checking44.....";

		header("Location: ./register-login.php?ForgetpasswordMessage=1");

		//	redirect("./register-login.php", "Please Enter Email Address to retrieve ForgotPassword ");
			}
mysqli_close($conn);
?>
