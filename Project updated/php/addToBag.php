<?php
include("../html/header.html");
?>

<?php
    session_start();
    $connect=mysql_connect("localhost:8888", "root", "root") or die("Error connecting to database: ".mysql_error());
    mysql_select_db("try&buy_db") or die(mysql_error());

    $quantity= $_POST["quantity"];
    $submitType= $_POST["submit"];
    $ProductId= $_POST["ProductId"];


      // if($quantity>= 1){
        // $_SESSION["quantity"] = "$quantity";
        // $_SESSION["ProductName"] = "$ProductName";
        if($quantity>= 1){
        mysql_query("UPDATE Products
                                      SET ProductId='$ProductId', Quantity='$quantity'
                                      WHERE ProductId='$ProductId'");
                          }

        $row_results = mysql_query("SELECT *
                                           FROM Products p
                                           WHERE Quantity >'1'") or die(mysql_error());



?>

    <div class="search-section">
      <?php
      if(mysql_num_rows($row_results) > 0) {
                                while($row = mysql_fetch_array($row_results)){

           $titles[] = $row['ProductName'];

           $count[]= $row['Quantity'];

           $price[]=$row['Price'];

           $src[]=$row['src'];
             }

    foreach($titles as $index => $title){

    echo
    '<h2>'.$title.'</h2>
     <p> Price: '.$price[$index].'</p>
     <p> Quantity: '.$count[$index].'</p>
     <p> Total: '.($price[$index] * $count[$index]).'</p>

     <p>'.$src[$index].'</p>' ;

    }

    }
     ?>
    </div>


<?php

include("../html/index-footer.html");

 ?>
</body>
</html>
