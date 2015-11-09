<?php
include("../html/header.html");
?>

<div class="login-body">
  <div id="userlogin">
    <p class="login-heading"> Customer Login </p>
    <form>
      <input class="text" type="text" value="Email Address" >
      <br>
      <input class="text" type="text" value="Password">
      <br>
      <p class="login-password"> Forgot Password? </p>
      <br>
      <input class="button" type="submit" value="Log In">
      <p>or  <a href="index.html" class="login-password">  Return to store</a> <p>
    </form>
      <br>
  </div>
</div>

      <div class="body-section">
        <div id="userlogin">
          <p> Create Account </p>
          <form>
             <input type="text" value="First Name" >
            <br>
             <input type="text" value="Last Name" >
            <br>
            <input type="text" value="Email Address" >
            <br>
            <input type="text" value="Password">

            <br>
            <input type="submit" value="Register">
            <p>or  <a href="index.html">  Return to store</a> <p>
          </form>
            <br>
        </div>
     </div>

<?php
include("../html/index-footer.html")
?>

  </body>
</html>
