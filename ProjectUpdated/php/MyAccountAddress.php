<?php
include("../html/header.html");
include("../php/login-account-cart.php");
include("../html/nav.html");
include("../html/MyAccountMenu.html");
include "dbconnect.php";
//session_start();
   $username = $_SESSION["name"];
   if ($username){
   $sql = "SELECT FirstName, LastName, Street, City, State, Zip FROM UserInfo WHERE FirstName='$username'";
   $result = mysqli_query($conn, $sql) or die(mysqli_error());
}
//    if ($result->num_rows > 0) {
//         // output data of each row
//         while($row = $result->fetch_assoc()) {
//             echo "<br> ". $row["FirstName"]. "  ". $row["Lastname"].
//             "<br> " . $row["Street"] ." ". $row["City"] . " <br>
//              ". $row["State"] ." ". $row["Zip"]."<br>";
//         }
//    } else {
//         echo "0 results";
//    }
// }

//
// <?php
// if ($result->num_rows > 0) {
//      // output data of each row
//      while($row = $result->fetch_assoc()) {
//          echo "<br>Firstname: ". $row["FirstName"]. "<br>Lastname: ". $row["LastName"].
//          "<br>Street: " . $row["Street"] ."<br>City: ". $row["City"] . " <br>State:
//           ". $row["State"] ."<br>Zip: ". $row["Zip"]."<br>";
//      }
// } else {
//      echo "0 results";
// }
//
//
?>


<div class="my-account-body-section">
  <div class="show-Saved-Address">


  </div>
  <div class="addNewAddress">
          <form class=address action="AddAddress.php" method="post" >
          <fieldset class=upload>
          <legend>Add New Address</legend>
                 * All fields are required <br/>
                 <?php
                 if ($result->num_rows > 0) {
                      // output data of each row
                      while($row = $result->fetch_assoc()) {
                  ?>
                FirstName: <input id="first" type="text" name="firstName" value="<?= $row['FirstName'] ?>"></br>
                LastName: <input id="second" type="text" name="lastName" value="<?= $row['LastName'] ?> "></br>
                Street: <input id="street" type="text" name="Street" value="<?= $row['Street'] ?>"></br>
                City: <input id="city" type="text" name="City" value="<?= $row['City'] ?>"></br>
                State: <input id="state" type="text" name="State" value="<?= $row['State'] ?>"></br>
                Zip Code:<input id="zip" type="text" name="Zip" value="<?= $row['Zip'] ?>"></br>
<?php
              }
          }
               ?>
                <input type="submit" value="Edit Address"></br>
          </fieldset>
        </form>
  </div>
</div>
        </fieldset>
      </form>
</div>

<?php
include("../html/index-footer.html");
mysqli_close($conn);

?>

  </body>
</html>
