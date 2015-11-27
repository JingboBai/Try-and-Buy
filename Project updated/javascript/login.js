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



$(document).ready(
  function(){
    //registering an event handler on click
    $("#login-button").on("click",
      function() {
        var email;
        var password;
        var option;
        if($('input[type="radio"]:checked').length){
          option = $('input[type="radio"]:checked').val();
        }
        else if($(".text").length){
          option =  $("#textAnswer").val();
        }
        else if(option == undefined){
          alert ("");
        }
        submitAnswerAndFetchQuestion(option,timer);
      }
    );
