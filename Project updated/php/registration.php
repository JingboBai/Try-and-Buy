<?php
include "dbconnect.php";
if (isset($_POST['Regemail']) && isset($_POST['Regpassword'])){
         $username = $_POST['username'];
         $email = $_POST['Regemail'];
         $password = $_POST['Regpassword'];
         $result =null;
         $result = mysqli_query($conn, "INSERT INTO UserInfo (FirstName, email, password) VALUES ('$username', '$email', '$password')")
         or die(mysql_error());

         if($result){
        //   echo "updated successfully";
           header("Location: ./index.php");
           exit;
         }
         else{
           echo "failed updating.$username,$email,$password";
        }
     }
     mysql_close($conn);
?>
