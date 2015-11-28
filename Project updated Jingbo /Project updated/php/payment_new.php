<!doctype html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href ="../css/style.css" >
</head>
<body>
  <div class="header-top">
     <div class="header-top-left">
      !! Find Best Choice For <span class="free" > FREE </span>
     </div>
     <div class="header-top-right">
      News, offers & discounts
     </div>
  </div>
  <div class="header">
     <div class="logo">
        <img class="logo-image" src="../images/indexpage/logo.jpg" alt="../images/indexpage/logo.jpg">
    </div>
    <h1 class="checkout">Checkout</h1>
  </div>
<div class="card_image">
  <img src="../images/cc.png" alt="cc_image" id="cards">

</div>
<div class="form_division">
  <?php
  /* Variables are created to store values of the fields entered
  */
  $first_name = $last_name = $phone_number = $city= $state= $pincode= $country= $name_card= $card_number= $cvv= "";

  /* Variables are created to store values of errors
  */
$first_nameError = $last_nameError = $phone_numberError = $cityError = $stateError= $pincodeError= $countryError= $name_cardError= $card_numberError= $cvvError=  "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["first_name"])) {              /* Checks if first name is empty*/
     $first_nameError = "First name is required";
   } else {
     $first_name = test_input($_POST["first_name"]); /* First name is passed to the test_input function*/
     /* checks to see if  first name only contains letters and whitespace */
     if (!preg_match("/^[a-zA-Z ]*$/",$first_name)) {
       $first_nameError = "Only letters and white space allowed";
     }
   }
   if (empty($_POST["city"])) {              /* Checks if first name is empty*/
     $cityError = "City is required";
   }
   if (empty($_POST["state"])) {              /* Checks if first name is empty*/
     $stateError = "State  is required";
   }
   if (empty($_POST["pincode"])) {              /* Checks if first name is empty*/
     $pincodeError = "Pincode is required";
   }
   if (empty($_POST["country"])) {              /* Checks if first name is empty*/
     $countryError = "Country is required";
   }
   if (empty($_POST["name_card"])) {              /* Checks if first name is empty*/
     $name_cardError = "Name on card is required";
   }
   if (empty($_POST["card_number"])) {              /* Checks if first name is empty*/
     $card_numberError = "Card Number is required";
   }
   if (empty($_POST["cvv"])) {              /* Checks if first name is empty*/
     $cvvError = "CVV number is required";
   }
   if (empty($_POST["last_name"])) {          /* Checks if last name is empty*/
     $last_nameError = "Last name is required";
   } else {
     $last_name = test_input($_POST["last_name"]);     /* Last name is passed to the test_input function*/
     /* check to see if last name only contains letters and whitespace*/
     if (!preg_match("/^[a-zA-Z ]*$/",$last_name)) {
       $last_nameError = "Only letters and white space allowed";
     }
   }

  if (empty($_POST["phone_number"])) {
     $phone_number= "";
   } else {
     $phone_number = test_input($_POST["phone_number"]);
     /* checks if phone number contains only numeric data*/
     if (!is_numeric($phone_number)){
       $phone_numberError = "Only numeric values allowed allowed";
     }
   }

   if (empty($_POST["email"])) {
     $emailError = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     /* checks to see if email is in a valid format*/
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailError = "Invalid email format";
     }
   }



   if (empty($_POST["comment"])) {
     $comment = "";
   } else {
     $comment = test_input($_POST["comment"]);
   }


}
/* This function take input data and trims it, deletes the backslashes and converts special characters into HTML entities*/
function test_input($datainput) {
   $data = trim($datainput);
   $data = stripslashes($datainput);
   $data = htmlspecialchars($datainput);
   return $datainput;

}
?>

<form  action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post"  id="form1">

<h3 class="form_heading">Shipping Address</h3>
  <p><span class="error">* indicates required field.</span></p>
  First Name: <br>
  <input type="text" name="first_name" class="resizedTextBox">
  <span class="error">* <?php print $first_nameError;?></span>
  <br>
  Last Name: <br>
  <input type="text" name="last_name" class="resizedTextBox" >
  <span class="error">* <?php print $last_nameError;?></span>
  <br>
  Phone Number: <br>
  <input type="text" name = "phone_number"  class="resizedTextBox">
  <span class="error"><?php print $phone_numberError;?></span>
  <br>
  Street Address: <br>
  <input type="text" name = "street_address"  class="resizedTextBox">
  <br>
  Street Address(2): <br>
  <input type="text" name="street_address2"  class="resizedTextBox">
  <br>
  City: <br>
  <input type="text" name = "city"  class="resizedTextBox">
  <span class="error">*<?php print $cityError;?></span>
  <br>
  State: <br>
  <input type="text" name = "state"  class="resizedTextBox">
  <span class="error">*<?php print $stateError;?></span>
  <br>
  Pincode: <br>
  <input type="text" name = "pincode"  class="resizedTextBox">
  <span class="error">*<?php print $pinError;?></span>
  <br>
  Country: <br>
  <input type="text" name = "country"  class="resizedTextBox">
  <span class="error">*<?php print $countryError;?></span>
  <br><br><br><br>
  <h3 class="form_heading">Card Details</h3>
  <br>
  Name on card:<br>
  <input type="text" name = "name_card"  class="resizedTextBox">
  <span class="error">*<?php print $name_cardError;?></span>
  <br>
  Card Number: <br>
  <input type="text" name = "card_number"  class="resizedTextBox">
  <span class="error">*<?php print $card_numberError;?></span>
  <br>
  CVV number: <br>
  <input type="text" name = "cvv"  class="resizedTextBox">
  <span class="error">*<?php print $cvvError;?></span>
  <br>
  Expiry Date: <br>
  <SELECT NAME="CCExpiresMonth" >
    <OPTION VALUE="" SELECTED>--Month--
    <OPTION VALUE="01">January (01)
    <OPTION VALUE="02">February (02)
    <OPTION VALUE="03">March (03)
    <OPTION VALUE="04">April (04)
    <OPTION VALUE="05">May (05)
    <OPTION VALUE="06">June (06)
    <OPTION VALUE="07">July (07)
    <OPTION VALUE="08">August (08)
    <OPTION VALUE="09">September (09)
    <OPTION VALUE="10">October (10)
    <OPTION VALUE="11">November (11)
    <OPTION VALUE="12">December (12)
  </SELECT> /
  <SELECT NAME="CCExpiresYear">
    <OPTION VALUE="" SELECTED>--Year--
    <OPTION VALUE="04">2015
    <OPTION VALUE="05">2016
    <OPTION VALUE="06">2017
    <OPTION VALUE="07">2018
    <OPTION VALUE="08">2019
    <OPTION VALUE="09">2020
    <OPTION VALUE="10">2021
    <OPTION VALUE="11">2022
    <OPTION VALUE="12">2023
    <OPTION VALUE="13">2024
    <OPTION VALUE="14">2025
    <OPTION VALUE="15">2026
  </SELECT>
<br><br><br>


  <input type="submit" value="Submit">


</form>
</div>



</body>
</html>
