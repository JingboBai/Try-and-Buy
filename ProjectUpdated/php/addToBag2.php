<?php
include("../html/header.html");
include "dbconnect.php";
include("../html/nav.html");
?>

<div class="search-section">
  <h2 class=header2 >My Bag</h2>
  <a href="javascript:history.go(-1);"><button class='back'>Continue Shopping</button></a>

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
      if(($submitType=="Try")){

          $count_result=mysqli_query($conn,"SELECT *
                                      FROM UserInfo
                                      WHERE email='$_SESSION[email]'") or die(mysqli_error());

          // echo $count_result;
          $count = mysqli_fetch_array($count_result);
          $newCount=$count['RewardPoints']-$quantity;

          if($newCount>=0)
          {
            echo "<br><p> The TRY sample is ongoing.</p>";
            echo "<p> The current TRY count you left is " . $newCount . ".</p> </div>";
            mysqli_query($conn, "UPDATE UserInfo
            SET RewardPoints='$newCount'
            WHERE email='$_SESSION[email]'")or die(mysql_error());
          }
          else{
            echo "<br><p> Oops! You don't have enough TRY count.</p>";
            echo "<p> The current TRY count you have is " . $count['RewardPoints']. ".</p> </div>";
          }
          include("../html/pages-footer.html");
          exit();

          // mysql_query($conn, "UPDATE UserInfo
          // SET RewardPoints=''
          // WHERE email='$username'")or die(mysql_error());


      }
      if(in_array($_POST["ProductId"],$_SESSION['ProductId'])){
       echo "It is already in your Bag";
      }else{
          array_push($_SESSION['ProductId'],$_POST["ProductId"]);
          array_push($_SESSION['quantity'],$quantity);
       }
    }

    $num=count($_SESSION['ProductId']);
    if($num==0)
      {
        echo "<p>it is empty .</p> ";
      }
      else{

    for($i=0;$i<count($_SESSION['ProductId']);++$i){
    $ProductId=$_SESSION['ProductId'][$i];

            $row_results = mysqli_query($conn,"SELECT *
                                        FROM Products p
                                        WHERE ProductId='$ProductId'") or die(mysqli_error());


              ?>

                      <form  action="addToBag2.php" method="post">
                  <?php
              if(mysqli_num_rows($row_results) > 0) {
                  while($row = mysqli_fetch_array($row_results))
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

                }

                 ?>

                 <p>Total : $<span class=allTotal> <?=$total?></span></p>
                 <input type="checkbox" class="chk_boxes" label="check all" />
                 <table>
                 <tr><td>Select All</td>
                 <td><button class='mybag' onclick="submit" name="delete" value="1">Delete</button></td>
                 <td><button class='mybag' onclick="submit" name="checkout">Checkout</button></td>
               </table>

                 <?php  } ?>

                  </form>


                 </div>







<?php
mysqli_close($conn);
include("../html/index-footer.html");

 ?>
</body>
</html>
