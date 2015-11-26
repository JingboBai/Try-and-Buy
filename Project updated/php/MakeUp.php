<?php
include("../html/header.html");
include "dbconnect.php";
?>

	<div class="body-section">
    	  <div class="left-section">
            <table class=categories>
            <tr><th>Make Up</th><tr>
            <tr><td><a href="#Lip">Lip</a></td></tr>
            <tr><td><a href="#Nail">Nail </a></td></tr>
            <tr><td><a href="#Eye Care">Eye Care</a></td></tr>
            <tr><td><a href="#Remover">Remover </a></td></tr>
          </table>

      </div>
      <div class="right-section">
        <p id=addImage></p>
        <h2 class=header2 ><a name="Lip">Lip</a></h2>


       <?php
      $row_results = mysql_query("SELECT * FROM products
            WHERE `ProductType` ='Lip' ") or die(mysql_error());
            if(mysql_num_rows($row_results) > 0){ // if one or more rows are returned do following

                while($results = mysql_fetch_array($row_results)){


                ?>
                <div class=productDisplay>
                <p id=addImage></p>
                <a class=smallImg rel="<?=$results['src']?>">
                  <img class=productImage src="<?=$results['src']?>" alt=" ">
                </a>
                <div class=discription>
                 <p class=productName><?=$results['ProductName']?></p>
                 <p>$<?=$results['Price']?></p>
                </div>

                <div class=quality>
                    <input class="sub" name="" type="button" value="-" >
                    <input class="text_box" name="" type="text" value="0" size="8">
                    <input class="add" name="" type="button" value="+" >
                    <br>
										<form id="addToBag" action="addToBag.php">
                    <input class=trybuy type="image" src="../images/try.jpg" alt="Submit">
                    <input class=trybuy type="image" src="../images/buy.jpg" alt="Submit">
                    </form>
                </div>
              </div>


                <?php
                }
             }
        ?>

           </br>


      <h2 class=header2><a name="Nail">Nail</a></h2>
      <?php
      $row_results = mysql_query("SELECT * FROM products
        WHERE `ProductType` ='Nail' ") or die(mysql_error());
        if(mysql_num_rows($row_results) > 0){ // if one or more rows are returned do following

            while($results = mysql_fetch_array($row_results)){


            ?>
            <div class=productDisplay>
            <p id=addImage></p>
            <a class=smallImg rel="<?=$results['src']?>">
              <img class=productImage src="<?=$results['src']?>" alt=" ">
            </a>
            <div class=discription>
             <p class=productName><?=$results['ProductName']?></p>
             <p>$<?=$results['Price']?></p>
            </div>

            <div class=quality>
                <input class="sub" name="" type="button" value="-" >
                <input class="text_box" name="" type="text" value="0" size="8">
                <input class="add" name="" type="button" value="+" >
                <br>
								<form id="addToBag" action="addToBag.php">
								<input class=trybuy type="image" src="../images/try.jpg" alt="Submit">
								<input class=trybuy type="image" src="../images/buy.jpg" alt="Submit">
								</form>
            </div>
          </div>


            <?php
            }
          }
      ?>
      </br>
          <h2 class=header2><a name="Eye Care">Eye Care</a></h2>
          <?php
          $row_results = mysql_query("SELECT * FROM products
            WHERE `ProductType` ='Eye Care' ") or die(mysql_error());
            if(mysql_num_rows($row_results) > 0){ // if one or more rows are returned do following

                while($results = mysql_fetch_array($row_results)){


                ?>
                <div class=productDisplay>
                <p id=addImage></p>
                <a class=smallImg rel="<?=$results['src']?>">
                  <img class=productImage src="<?=$results['src']?>" alt=" ">
                </a>
                <div class=discription>
                 <p class=productName><?=$results['ProductName']?></p>
                 <p>$<?=$results['Price']?></p>
                </div>

                <div class=quality>
                    <input class="sub" name="" type="button" value="-" >
                    <input class="text_box" name="" type="text" value="0" size="8">
                    <input class="add" name="" type="button" value="+" >
                    <br>
										<form id="addToBag" action="addToBag.php">
                    <input class=trybuy type="image" src="../images/try.jpg" alt="Submit">
                    <input class=trybuy type="image" src="../images/buy.jpg" alt="Submit">
                    </form>
                </div>
              </div>


                <?php
                }
              }
          ?>
          </br>

          <h2 class=header2><a name="Remover">Remover</a></h2>
          <?php
          $row_results = mysql_query("SELECT * FROM products
            WHERE `ProductType` ='Remover' ") or die(mysql_error());
            if(mysql_num_rows($row_results) > 0){ // if one or more rows are returned do following

                while($results = mysql_fetch_array($row_results)){


                ?>
                <div class=productDisplay>
                <p id=addImage></p>
                <a class=smallImg rel="<?=$results['src']?>">
                  <img class=productImage src="<?=$results['src']?>" alt=" ">
                </a>
                <div class=discription>
                 <p class=productName><?=$results['ProductName']?></p>
                 <p>$<?=$results['Price']?></p>
                </div>

                <div class=quality>
                    <input class="sub" name="" type="button" value="-" >
                    <input class="text_box" name="" type="text" value="0" size="8">
                    <input class="add" name="" type="button" value="+" >
                    <br>
                    <img class=trybuy src="../images/try.jpg">
                    <img class=trybuy src="../images/buy.jpg">
                </div>
              </div>


                <?php
                }
              }
          ?>
          </br>

      </div>


	  </div>


<?php
include("../html/pages-footer.html");
 ?>

</body>
</html>
