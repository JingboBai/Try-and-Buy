<!-- /*Author:
COEN276 Fall 2015 Group1
Jingbo Bai
Prinal Khandelwal
Shreyas Jaltare
Jason Zadwick*/ -->
<?php
include("../html/header.html");
include ("dbconnect.php");
include("../php/login-account-cart.php");
include("../html/nav.html");
session_start();
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
			$row_results = mysqli_query($conn,"SELECT * FROM products
						WHERE `ProductType` ='Body Cleaner' ") or die(mysqli_error());
						if(mysqli_num_rows($row_results) > 0){ // if one or more rows are returned do following

								while($results = mysqli_fetch_array($row_results)){
								?>
								<div class=productDisplay>
								<p id=addImage></p>
                <form name="tryandbuy" id="addToBag" action="addToBag2.php" method="post" >
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
	$row_results = mysqli_query($conn,"SELECT * FROM products
				WHERE `ProductType` ='Hair Care' ") or die(mysqli_error());
				if(mysqli_num_rows($row_results) > 0){ // if one or more rows are returned do following

						while($results = mysqli_fetch_array($row_results)){


						?>
						<div class=productDisplay>
						<p id=addImage></p>
						<form name="tryandbuy" id="addToBag" action="addToBag2.php" method="post" >
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
          <h2 class=header2><a name="SPA treatment">SPA Treatment</a></h2>
					<?php
				$row_results = mysqli_query($conn,"SELECT * FROM products
							WHERE `ProductType` ='SPA' ") or die(mysqli_error());
							if(mysqli_num_rows($row_results) > 0){ // if one or more rows are returned do following

									while($results = mysqli_fetch_array($row_results)){


									?>
									<div class=productDisplay>
									<p id=addImage></p>
	                <form name="tryandbuy" id="addToBag" action="addToBag2.php" method="post" >
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
						<h2 class=header2><a name="Moisturizer">Moisturizer</a></h2>
						<?php
					$row_results = mysqli_query($conn,"SELECT * FROM products
								WHERE `ProductType` ='Moisturizer' ") or die(mysqli_error());
								if(mysqli_num_rows($row_results) > 0){ // if one or more rows are returned do following

										while($results = mysqli_fetch_array($row_results)){


										?>
										<div class=productDisplay>
										<p id=addImage></p>
		                <form name="tryandbuy" id="addToBag" action="addToBag2.php" method="post" >
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

    </div>
	  </div>


<?php
mysqli_close($conn);
include("../html/pages-footer.html");
 ?>

</body>
</html>
