<?php
include("../html/header.html");
?>

	<div class="body-section">
    	  <div class="left-section">
            <table class=categories>
            <tr><th>Bath Body & Skin Care</th><tr>
            <tr><td><a href="#Body Cleaners">Body Cleaner</a></td></tr>
            <tr><td><a href="#Hair Care">Hair Care </a></td></tr>
            <tr><td><a href="#Spa Treatment">Spa Treatment</a></td></tr>
            <tr><td><a href="#Moisturiser">Moisturiser </a></td></tr>
          </table>

      </div>
      <div class="right-section">
        <p id=addImage></p>
        <h2 class=header2 ><a name="Body Cleaners">Body Cleaners</a></h2>


       <?php
      $row_results = mysql_query("SELECT * FROM products
            WHERE `ProductType` ='Body Cleaner' ") or die(mysql_error());
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


      <h2 class=header2><a name="Hair Care">Hair Care</a></h2>
      <?php
      $row_results = mysql_query("SELECT * FROM products
        WHERE `ProductType` ='Hair Care' ") or die(mysql_error());
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
          <h2 class=header2><a name="SPA treatment">SPA treatment</a></h2>


      </div>


	  </div>


<?php
include("../html/pages-footer.html");
 ?>

</body>
</html>
