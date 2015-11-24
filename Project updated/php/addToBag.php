<?php
include("../html/header.html");
?>

<?php
    mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("try&buy_db") or die(mysql_error());
    $quantity= $_POST["quantity"];
    $ProductName= $_POST["productName"];

      if($quantity>= 1){
        $row_results = mysql_query("UPDATE Products
                                           SET Quantity='$quantity'
                                           WHERE ProductName='$ProductName'");
    }
?>

    <div class="body-section">
    <p> The thing has been added to your cart;</p>
    <p><?=$quantity?>and<?=$ProductName?></p>
    <div>


<?php

include("../html/index-footer.html");

 ?>
</body>
</html>
