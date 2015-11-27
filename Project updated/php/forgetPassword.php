<?php
include "dbconnect.php"; //connects to the database

if (isset($_POST['username'])){
	$username = $_POST['username'];
	$query="SELECT * from UserInfo where email='$username'";
	$result = mysqli_query($conn, $query);
	$count= mysqli_num_rows($result);
	// If the count is equal to one, we will send message other wise display an error message.
	if($count==1)
	{
		$rows=mysqli_fetch_array($result);
		$pass  =  $rows['password'];//FETCHING PASS
		$to = $rows['email'];
		echo "your email is ::".$username;
   	echo "your pass is ::".($pass)."";
		//
		// //Details for sending E-mail
		// $url = "http://localhost:8888/Try-and-Buy/Project%20updated/php/";
		// $body  =  "Try & Buy password recovery Script
		// -----------------------------------------------
		// Url : $url;
		// email Details is : $to;
		// Here is your password  : $pass;
		// Sincerely,
		// Try&Buy";
		// $from = "kulwalpreenal@gmail.com";
		// $subject = "Try & Buy password recovery ";
		// // To send HTML mail, the Content-type header must be set
		// $headers1 = "Content-type: text/html;charset=iso-8859-1\r\n";
		// $sentmail = mail ( $to, $subject, $body, $headers1 );
		// echo "hello $sentmail";
	}
	else {
			if ($_POST ['username'] != "") {
				echo "<span style='color: #ff0000;'> Not found your email in our database</span>";
			}
	}
			//If the message is sent successfully, display sucess message otherwise display an error message.
	// if($sentmail==1){
	// 	echo "<span style='color: #ff0000;'> Your Password Has Been Sent To Your Email Address.</span>";
	// }
	// else{
	// 		// if($_POST['username']!="")
	// 	echo "<span style='color: #ff0000;'> Cannot send password to your e-mail address.Problem with sending mail...</span>";
	// }
}
?>

	<html>
	<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	</head>
	<body>
		<div id="forget-div">
	    <form action="register-login.php" method="post">
	    	Enter your Email :
			<input id="username" type="text" name="username" />
			<input id="button" type="submit" name="button" value="Submit" />
	   </form>
 </div>
	</body>
	</html>
