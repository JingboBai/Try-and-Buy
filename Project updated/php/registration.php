<?php
include "dbconnect.php";
if (isset($_POST['Regemail']) && isset($_POST['Regpassword'])){
         $username = $_POST['username'];
         $email = $_POST['Regemail'];
         $password = $_POST['Regpassword'];
         $newURL ="index.php";
         $result = mysqli_query($conn, "INSERT INTO UserInfo (FirstName, email, password) VALUES ('$username', '$email', '$password')");
         if($result){
        //   echo "updated successfully";
           header("Location: ./index.php");
           exit;
         }
         else{
           echo "failed updating";
        }
     }
     mysqli_close($conn);
?>
