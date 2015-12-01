<?php
include("../html/header.html");
include("../php/login-account-cart.php");
include("../html/nav.html");
?>

<?php
include "dbconnect.php";
session_start();
if (isset($_POST['oldPassword']) && isset($_POST['NewPassword'])){
	 $password = $_POST['oldPassword'];
   $newPassword= $_POST['NewPassword'];
   $username = $_SESSION["name"];
   $sql = "UPDATE UserInfo SET password='$newPassword' WHERE FirstName='$username' and password='$password'";
   $result = mysqli_query($conn, $sql) or die(mysqli_error());
   if ($result ==1){
		 header("Location: ./register-login.php?uperror=1");
		  session_unset();
		  session_destroy();
	 }
   else {
      echo("Kindly give coorect old pssword");
	 }
}
mysqli_close($conn);
?>
<table class="my-account-menu-bar">
<tr><th><a href="./myAccount.php">MY ACCOUNT</a></th><tr>
<tr><td><a href="">Profile</a></td></tr>
<tr><td><a href="./changePassword.php">change Password</a></td></tr>
<tr><td><a href="">address book</a></td></tr>
<tr><td><a href="">My Orders </a></td></tr>
</table>

<div class="my-account-body-section">
  <form method="post" name="changePassword-form" onsubmit="return validateChangePassword()">
  <div id="changePassword">
    <span class="error" id= "changePass-Error"></span><br>
    <span class="login-heading"> Change Password</span>
      <dt class="PasswordPage"> Old Password</dt>
        <dd><input type="text" name="oldPassword"></dt>
      <dt class="PasswordPage"> New Password </dt>
        <dd><input type="text" name="NewPassword"></dt>
      <dt class="PasswordPage"> Confirm Password </dt>
        <dd><input type="text" name="ConfirmPassword"></dt>
      <input id="update-button" type="submit" value="Update Password">
  </div>
</form>
</div>
<?php
include("../html/index-footer.html");
?>

  </body>
</html>
