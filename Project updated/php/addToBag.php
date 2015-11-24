<?php
include("../html/header.html");
?>

<?php
    session_start();
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("try&buy_db") or die(mysql_error());
    $quantity= $_POST["quantity"];
    $ProductName= $_POST["productName"];

      if($quantity>= 1){
        $_SESSION["quantity"] = "$quantity";
        $_SESSION["ProductName"] = "$ProductName";
        $row_results = mysql_query("UPDATE Products
                                           SET Quantity='$quantity'
                                           WHERE ProductName='$ProductName'");
    }
?>

    <div class="search-section">
    <p> The thing has been added to your cart;</p>
    <p> Quantity is <?=$_SESSION["quantity"]?> <br>
        Product name is <?=$_SESSION["ProductName"]?></p>
    </div>


<?php

include("../html/index-footer.html");

 ?>
</body>
</html>
