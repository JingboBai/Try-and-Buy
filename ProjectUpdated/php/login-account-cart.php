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

?>
    <div id="my-account-zone">
      <a href="../php/MyAccount.php">My Account |</a><a href="../php/addToBag2.php">My Bag</a>
    </div>

<?php

?>
