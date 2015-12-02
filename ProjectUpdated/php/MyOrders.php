<?php
session_start();
include "dbconnect.php";

if(isset($_GET["billId"])) {
  $billId = $_GET["billId"];
  error_log("Hello world");

  $queryBillDetails="SELECT CustomerShoppingInfo.Date, CustomerShoppingInfo.ProductId, Products.ProductName, Products.Price, CustomerShoppingInfo.Quantity
  FROM CustomerShoppingInfo
  JOIN Products on CustomerShoppingInfo.ProductId = Products.ProductId
  JOIN UserInfo on CustomerShoppingInfo.CustomerId=UserInfo.UserId
  WHERE CustomerShoppingInfo.BillId=$billId";

  $resultBillDetails =mysqli_query($conn, $queryBillDetails) or die(mysqli_error());

  ?>
  <table>
    <tr>
      <th>Date</th>
      <th>ProductId</th>
      <th>ProductName</th>
      <th>Count</th>
      <th>Price</th>
    </tr>
  <?php
  while($details = $resultBillDetails->fetch_assoc()) {
      echo
            "<tr>
              <td>{$details['Date']}</td>
              <td>{$details['ProductId']}</td>
              <td>{$details['ProductName']}</td>
              <td>{$details['Quantity']}</td>
              <td>{$details['Price']}</td>
            </tr>\n";
          }
    ?>
  </table>
<?php
  mysqli_close($conn);
}
else {
  include("../html/header.html");
  include("../php/login-account-cart.php");
  include("../html/nav.html");
  include("../html/MyAccountMenu.html");


  $username = $_SESSION["name"];
  if ($username){
    // $sql = "SELECT UserId FROM UserInfo WHERE FirstName='$username'";
     $sql = "SELECT DISTINCT CustomerShoppingInfo.Date,CustomerShoppingInfo.BillId, CustomerShoppingInfo.CustomerId FROM CustomerShoppingInfo INNER JOIN UserInfo on CustomerShoppingInfo.CustomerId = UserInfo.UserId WHERE UserInfo.FirstName='$username'";
     $result = mysqli_query($conn, $sql) or die(mysqli_error());
   }
  ?>
  <div class="my-account-body-section">
      Hi <?= $_SESSION["name"] ?> <br>
      Click on "more details" for a detailed view of Order.
      <table class="myOrderTable">
        <tr><th class="table-headings"> Date</th>
          <th class="table-headings">Bill Id </th>
          <th class="table-headings">More Details </th>
      </tr>
    <?php
    while($row = $result->fetch_assoc()) {
        echo
              "<tr>
                <td>{$row['Date']}</td>
                <td>{$row['BillId']}</td>
                <td><input id=\"more-details-btn\" type=\"button\" value=\"More Details\" onclick=getMoreDetails({$row['BillId']})></td>
              </tr>\n";
            }
          ?>
      </table>


      <div id="order-more-details" class="hide">
         <button class=hide>hide</button>
      </div>
  </div>
<?php
  include("../html/index-footer.html");
  echo "</body></html>";
  mysqli_close($conn);
}

?>
