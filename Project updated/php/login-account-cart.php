<?php
session_start();
if (isset($_SESSION["name"]))
{
?>
 <div class="login">
   <a href="../php/register-login.php">Hi (<?= $_SESSION["name"] ?>)</a>
   <a href="../php/logout.php">Logout</a>
<?php
 } else {
?>
  <a href="../php/register-login.php">Hi, SignIn <span id="register">Or Register</span></a>
<?php
}
?>
  </div>
  <div id="account-cart-div">
    <div id="my-account-zone">  <a href="../php/index.php">Hi <?= $_SESSION["name"] ?>,Your Account</a> </div> |
    <div id="show-quick-cart-zone">  <a href="../php/myBag.php">My Bag</a><div>

     <div id="show-quick-cart-details" class="hide">
     </div>
  </div>
