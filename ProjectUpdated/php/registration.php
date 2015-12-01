<?php
include "dbconnect.php";
 session_start();
if (isset($_POST['Regemail']) && isset($_POST['Regpassword'])){
         $username = $_POST['username'];
         $email = $_POST['Regemail'];
         $password = $_POST['Regpassword'];
         $result = mysqli_query($conn, "INSERT INTO UserInfo (FirstName, email, password) VALUES ('$username', '$email', '$password')")
         or die(mysqli_error());
         if ($result == 1){
          $_SESSION["name"] = $username;
           header("Location: ./index.php");
         }
         else{
           header("Location: ./register-login.php");
        }
     }
     mysql_close($conn);
?>
