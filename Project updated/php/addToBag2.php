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
    $total=0;


    if(!isset($_SESSION['ProductId'])){
    $_SESSION['ProductId'] = array();
    }
    if(!isset($_SESSION['quantity'])){
    $_SESSION['quantity'] = array();
    }


    if(!empty($_POST['check_list'])) {
        foreach($_POST['check_list'] as $check) {
                if(($_POST['delete']==1))
                {
                  $key = array_search($check,$_SESSION['ProductId']);
                  unset($_SESSION['ProductId'][$key]);
                  unset($_SESSION['quantity'][$key]);
                }
            }
    }

    if($quantity>= 1){
    array_push($_SESSION['ProductId'],$_POST["ProductId"]);
    array_push($_SESSION['quantity'],$quantity);
    }

    for($i=0;$i<sizeof($_SESSION['ProductId']);++$i){
    $ProductId=$_SESSION['ProductId'][$i];

            $row_results = mysql_query("SELECT *
                                        FROM Products p
                                        WHERE ProductId='$ProductId'") or die(mysql_error());
            ?>


                      <form  action="addToBag2.php" method="post">
                  <?php
                  while($row = mysql_fetch_array($row_results))
                 {
                   $title=$row['ProductName'];

                   $count= $_SESSION['quantity'][$i];

                   $price=$row['Price'];

                   $src=$row['src'];


                   ?>
                   <table id="tab">
                      <tr>
                      <td><input class="check" type="checkbox" name='check_list[]' value="<?=$ProductId?>"> </td>
                      <td> <img class=productImage src="<?=$src?>" alt=" "></td>
                      <td>
                    <div class=discription>
                      <p class=productName><?=$title?></p>
                      <p>$<span class="price"><?=$price?></span></p>
                    </div>
                   <div class=quality>
                       <p> Quantity: </p>
                       <input class="sub" name="" type="button" value="-" >
                       <input class="text_box" name="" type="text" value="<?=$count?>" size="8">
                       <input class="add" name="" type="button" value="+" >
                       <p> Price：$ <span class="total"> <?=($price * $count)?></span></p>
                       <br>
                   </div>
                 </td>
                  <td>

                  </td>
                  </table>
                 <?php
                    $total+=($price[$index] * $count[$index]);
                    }
                  }



                 ?>

                 <p>Total : $<span class=allTotal> <?=$total?></span></p>
                 <input type="checkbox" class="chk_boxes" label="check all" />
                 Select All
                 <button onclick="submit" name="delete" value="1">Delete</button>
                 <button onclick="submit" name="checkout">Checkout</button>
                  </form>
                 </div>







<?php

include("../html/index-footer.html");

 ?>
</body>
</html>
