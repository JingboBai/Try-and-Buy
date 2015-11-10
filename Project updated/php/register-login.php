<?php
include("../html/header.html");

// define variables and set to empty values
$passErr = $emailErr =  "";
$pass = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["password"])) {
     $passErr = "Password is required";
   }

   if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {

     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format";
     }
   }
 }

?>
<div class="login-section">
  <div class="fbLogin">
<span id="login-top"> Discovering beauty is even more exciting with friends!!    </span>
<input type="image" id="connect-fb" src="../images/login-register/fb-connect.jpg" />
  </div>
<div class="login-body">
  <div id="userlogin">
    <p class="login-heading"> Customer Login </p>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <span class="error"><?php echo $passErr;?></span><br>
    <span class="error"> <?php echo $emailErr;?></span>
      <input class="text" type="text" value="Email Address" name="email" >
      <br>
      <input class="text" type="text" value="Password" name="password">

      <br>
      <p class="login-password"> Forgot Password? </p>
      <br>
      <input class="button" type="submit" value="Log In">
      <p>or  <a href="index.html" class="login-password">Continue As Guest!!</a> <p>
    </form>
      <br>
  </div>
</div>

      <div class="register-section">
        <div id="userlogin">
          <p> Create Account </p>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
 <span class="error"> <?php echo $passErr;?></span><br>
 <span class="error"><?php echo $emailErr;?></span>

             <input class="text" type="text" value="First Name" >
            <br>
             <input class="text"  type="text" value="Last Name" >
            <br>
            <input class="text" type="text" value="Email Address" name="email">
            <br>
            <input class="text" type="text" value="Password" name="password">

            <br><br>
            <input type="checkbox"/><span class="condition-info">Yes,I'd like to opt in to the Rewards Program
            </span>
              <br>  <br>
              <div class="para">
                By joining Try&Buy you’ll enjoy exclusive previews & e-mail offers.
                By clicking the button below, you agree to the Try&Buy Privacy Policy and Terms of Use.
            </div>
          <br>  <br>
            <input class="button" type="submit" value="Register">
            <p>or  <a href="index.html">  Return to store</a> <p>
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
        <dd> With every 100 points get $10 gift card.</dd>
      </dl>
     </div>
     </div>
</div>

<?php
include("../html/index-footer.html")
?>

  </body>
</html>
