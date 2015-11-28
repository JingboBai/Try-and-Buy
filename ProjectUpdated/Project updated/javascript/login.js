// $passErr = $emailErr = $RegpassErr =$RegemailErr = "";
// $pass = $email = "";
//
// function LoginValidation(){
//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//      if (empty($_POST["email"])) {
//        $emailErr = "Email is required";
//      } else {
//        $email = test_input($_POST["email"]);
//        // check if e-mail address is well-formed
//        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//          $emailErr = "Invalid email format";
//        }
//      }
//      if (empty($_POST["password"])) {
//        $passErr = "Password is required";
//      }
//    }
// }
//
//
// function RegValidation(){
//   if ($_SERVER["REQUEST_METHOD"] == "POST") {
//   if (empty($_POST["Regemail"])) {
//     $RegemailErr = "Email is required";
//   } else {
//     $email = test_input($_POST["Regemail"]);
//     // check if e-mail address is well-formed
//     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//       $RegemailErr = "Invalid email format";
//     }
//   }
//   if (empty($_POST["Regpassword"])) {
//     $RegpassErr = "Password is required";
//     }
//   }
// }
// function test_input($data) {
// $data = trim($data);
// $data = stripslashes($data);
// $data = htmlspecialchars($data);
// return $data;
// }
//


function validateLoginForm() {
    var email = document.forms["login-form"]["email"].value;
    var password = document.forms["login-form"]["password"].value;
    if (email == null || email == "") {
      document.getElementById("emailErr").innerHTML = "* Email is required";
        return false;
    }else{
          var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
          if(!(re.test(email))){
            document.getElementById("emailErr").innerHTML = "* Incorrect Email format";
            return false;
          }
    }
    if (password == null || password == "") {
      document.getElementById("passErr").innerHTML = "* Password is required";
        return false;
    }
  }

function validateRegForm() {
  var email = document.forms["Reg-Form"]["Regemail"].value;
    var password = document.forms["Reg-Form"]["Regpassword"].value;
  if (email == null || email == "") {
    document.getElementById("RegemailErr").innerHTML = "* Email is required";
      return false;
  }else{
        var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
        if(!(re.test(email))){
          document.getElementById("RegemailErr").innerHTML = "* Incorrect Email format";
          return false;
        }
  }
  if (password == null || password == "") {
    document.getElementById("RegpassErr").innerHTML = "* Password is required";
      return false;
  }
}
