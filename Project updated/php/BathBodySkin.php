<?php
include("../html/header.html");
include "dbconnect.php";
?>
	<div class="body-section">
    	  <div class="left-section">
            <table class=categories>
            <tr><th>Bath Body & Skin Care</th><tr>
            <tr><td><a href="#Body Cleaners">Body Cleaner</a></td></tr>
            <tr><td><a href="#Hair Care">Hair Care </a></td></tr>
            <tr><td><a href="#SPA treatment">Spa Treatment</a></td></tr>
            <tr><td><a href="#Moisturizer">moisturizer </a></td></tr>
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
                <form name="tryandbuy" id="addToBag" action="addToBag.php" method="post" >
								   <a class=smallImg rel="<?=$results['src']?>">
								  	<img class=productImage src="<?=$results['src']?>" alt=" ">
								  </a>
							 	 <div class=discription>
								  <p class=productName><?=$results['ProductName']?></p>
                  <input name="ProductId" type="hidden" value="<?=$results['ProductId']?>">
                  <p>$<?=$results['Price']?></p>
								 </div>
								<div class=quality>
                  <input class="sub" name="" type="button" value="-" >
                  <input class="text_box" name="quantity" type="text" value="0" size="8">
                  <input class="add" name="" type="button" value="+" >
                  <br>
                  <input class=trybuy name=submit type="image" src="../images/try.jpg" alt="Submit" value="Try" >
                  <input class=trybuy name=submit type="image" src="../images/buy.jpg" alt="Submit" value="Buy">
                  </form>
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
          <h2 class=header2><a name="SPA treatment">SPA Treatment</a></h2>
					<?php
				$row_results = mysql_query("SELECT * FROM products
							WHERE `ProductType` ='Spa Treatment' ") or die(mysql_error());
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
                      <form id="addToBag" action="addToBag.php" method="post">
											<input class="sub" name="" type="button" value="-" >
											<input class="text_box" name="quantity" type="text" value="0" size="8">
											<input class="add" name="" type="button" value="+" >
											<br>
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
						<h2 class=header2><a name="Moisturizer">Moisturizer</a></h2>
						<?php
					$row_results = mysql_query("SELECT * FROM products
								WHERE `ProductType` ='Moisturizer' ") or die(mysql_error());
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

    </div>

	  </div>


<?php
include("../html/pages-footer.html");
 ?>

</body>
</html>
