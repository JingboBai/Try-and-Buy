<div class="login">
<?php
session_start();
if (isset($_SESSION["name"]))
{
?>
   <span>Hi (<?= $_SESSION["name"] ?>)</span>
   <a href="../php/logout.php">Logout</a>
<?php
}
else {
?>
    <a href="../php/register-login.php">SignIn Or Register</a>
    <?php
}
?>
</div>
<?php
  if (isset($_SESSION["name"]))
  {
?>
  <div id="account-cart-div">
    <div id="my-account-zone">
      <a href="../php/MyAccount.php">My Account</a>
    </div> |
    <div id="show-quick-cart-zone">
      <a href="../php/myBag.php">My Bag</a>
    </div>

     <div id="show-quick-cart-details" class="hide">
     </div>
  </div>
<?php
}
?>
