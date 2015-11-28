<?php
include("../html/header.html");
include "dbconnect.php";
?>


<div class="search-section">
  <h2 class=header2 >My Bag</h2>
  <button><a href="javascript:history.go(-1);">Continue Shopping</a></button>

<?php
    session_start();

    $quantity= $_POST["quantity"];
    $submitType= $_POST["submit"];
    $ProductId= $_POST["ProductId"];
    $total=0;





    if(!empty($_POST['check_list'])) {
        foreach($_POST['check_list'] as $check) {
                if(($_POST['delete']==1))
                {
                  mysql_query("UPDATE Products
                  SET Quantity='NULL'
                  WHERE ProductName='$check'")or die(mysql_error());
                }
        }
    }

        if($quantity>= 1){
          if(($submitType=="Try")){

              echo "try </div>";

              include("../html/pages-footer.html");
              exit();
          }
          else{
            mysql_query("UPDATE Products
                                          SET ProductId='$ProductId', Quantity='$quantity'
                                          WHERE ProductId='$ProductId'");
          }

                          }

        $row_results = mysql_query("SELECT *
                                           FROM Products p
                                           WHERE Quantity >'1'") or die(mysql_error());



?>

          <form  action="addToBag.php" method="post">
      <?php
      if(mysql_num_rows($row_results) == 0)
      {
        echo "<p>it is empty .</p>";
      }
      if(mysql_num_rows($row_results) > 0) {
                                while($row = mysql_fetch_array($row_results)){

           $titles[] = $row['ProductName'];

           $count[]= $row['Quantity'];

           $price[]=$row['Price'];

           $src[]=$row['src'];
             }

    foreach($titles as $index => $title){

     ?>
     <table id="tab">
        <tr>
        <td><input class="check" type="checkbox" name='check_list[]' value="<?=$title?>"> </td>
        <td> <img class=productImage src="<?=$src[$index]?>" alt=" "></td>
        <td>
      <div class=discription>
        <p class=productName><?=$title?></p>
        <p>$<span class="price"><?=$price[$index]?></span></p>
      </div>
     <div class=quality>
         <p> Quantity: </p>
         <input class="sub" name="" type="button" value="-" >
         <input class="text_box" name="" type="text" value="<?=$count[$index]?>" size="8">
         <input class="add" name="" type="button" value="+" >
         <p> Price：$ <span class="total"> <?=($price[$index] * $count[$index])?></span></p>
         <br>
     </div>
   </td>
    <td>

    </td>
    </table>
   <?php
      $total+=($price[$index] * $count[$index]);
    }
     ?>
        <p>Total : $<span class=allTotal> <?=$total?></span></p>
        <input type="checkbox" class="chk_boxes" label="check all" />
        Select All
        <button onclick="submit" name="delete" value="1">Delete</button>
        <button onclick="submit" name="checkout">Checkout</button>
     <?php
    }
     ?>


       </form>
     </div>




<?php

include("../html/index-footer.html");

 ?>
</body>
</html>
