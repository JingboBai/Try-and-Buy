<?php
include "dbconnect.php";
session_start();
if (isset($_POST['firstName']) && isset($_POST['lastName'])){

         $firstname = $_POST['firstName'];
         $lastname = $_POST['lastName'];
         $street = $_POST['Street'];
         $city = $_POST['City'];
         $state = $_POST['State'];
         $zip = $_POST['Zip'];
         echo "FirstName='$firstname', LastName='$lastname', Street='$street', City='$city', State=$state', Zip='$zip'";
         $sql = "UPDATE UserInfo
         SET FirstName='$firstname', LastName='$lastname', Street='$street', City='$city', State='$state',Zip='$zip'
         WHERE FirstName='$firstname'";
         if (mysqli_query($conn, $sql)) {
           mysqli_query($conn, $sql);
             echo "Record updated successfully";
         } else {
             echo "Error updating record: " . mysqli_error($conn);
         }
     }
     mysql_close($conn);
?>
