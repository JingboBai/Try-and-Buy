<?php
include("../html/header.html");

// define variables and set to empty values
$passErr = $emailErr = $RegpassErr =$RegemailErr = "";
$pass = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }
   if (empty($_POST["Regemail"])) {
     $RegemailErr = "Email is required";
   } else {
     $email = test_input($_POST["Regemail"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $RegemailErr = "Invalid email format";
     }
   }
   if (empty($_POST["password"])) {
     $passErr = "Password is required";
   }
   if (empty($_POST["Regpassword"])) {
     $RegpassErr = "Password is required";
   }
 }
   function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
 }

?>
<script src="../javascript/login.js"> </script>
<div class="login-section">
  <!-- <div class="fbLogin">
<span id="login-top"> Discovering beauty is even more exciting with friends!!    </span>
<input type="image" id="connect-fb" src="../images/login-register/fb-connect.jpg" />
  </div> -->
  <div class="login-body">
    <div id="userlogin">
      <p class="login-heading"> Customer Login </p>
     <form method="post" action="login.php">
      <span class="error"><?php echo $passErr;?></span><br>
      <span class="error"> <?php echo $emailErr;?></span>
        <input class="text" type="text" placeholder="Email Address" name="email" >
        <br>
        <input class="text" type="text" placeholder="Password" name="password">
        <br>
        <p> <a href="forgetPassword.php" class="login-password">Forgot Password? </a></p>
        <br>
        <input id="login-button" type="submit" value="Log In">
        <p> <a href="index.php" class="returnLink">or  Return to store</a> <p>
      </form>
        <br>
    </div>
  </div>

  <div class="register-section">
    <div id="userlogin">
      <p> Create Account </p>
        <form method= "post" action="./registration.php">
        <span class="error"> <?php echo $RegpassErr;?></span><br>
        <span class="error"><?php echo $RegemailErr;?></span>
        <input class="text" type="text" placeholder="User Name" name="username">
        <br>
        <input class="text" type="text" placeholder="Email Address" name="Regemail">
        <br>
        <input class="text" type="text" placeholder="Password" name="Regpassword">
        <br><br>
        <input type="checkbox"/><span class="condition-info">Yes,I'd like to opt into the Rewards Points
        </span>
        <br>  <br>
        <div class="para">
            By joining Try&Buy you’ll enjoy exclusive previews & e-mail offers.
            By clicking the button below, you agree to the Try&Buy Privacy Policy and Terms of Use.
        </div>
      <br>  <br>
        <input id="Reg-button" type="submit" value="Register">
      </form>
        <br>
    </div>
 </div>

 <div class="information-section">
   <div class="info1">
  <span class="I1"> Sign up and enjoy </span>
  <span class="I2"> EXCLUSIVE BENEFITS </span>
  <hr>
  <hr>
  <dl>
    <dt> New Customers</dt>
    <dd>Free complimentary gifts when you registered</dd><br>
    <dt>Free Samples</dt>
    <dd>Discover and Try before buying</dd><br>
    <dt>Offers & news </dt>
    <dd> Receive offers on your beauty faves</dd><br>
    <dt> Rewards Points</dt>
    <dd> With every 100 points get 5 Try Items.</dd>
  </dl>
 </div>
 </div>
</div>

<?php
include("../html/index-footer.html")
?>
  </body>
</html>
