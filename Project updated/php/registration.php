<?php
include "dbconnect.php";
session_start();
if (isset($_POST['Regemail']) && isset($_POST['Regpassword'])){
         $username = $_POST['username'];
         $email = $_POST['Regemail'];
         $password = $_POST['Regpassword'];
         $newURL ="index.php";
         $result =null;
         $result = mysql_query("INSERT INTO UserInfo (FirstName, email, password) VALUES ('$username', '$email', '$password')")
         or die(mysql_error());

         if($result){
           $name= "SELECT FirstName FROM UserInfo WHERE email='$username';";
           $_SESSION["name"]= $name;
           header("Location: ./index.php");
           exit;
         }
         else{
           header("Location: ./register-login.php");
           echo "failed updating.$username,$email,$password";
        }
     }
     mysql_close($conn);
?>
