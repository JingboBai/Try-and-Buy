<?php
include("../html/header.html");

mysql_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());

mysql_select_db("try&buy_db") or die(mysql_error());
?>

	<div class="body-section">
    	  <div class="left-section">
            <table class=categories>
            <tr><th>Fragrance</th><tr>
            <tr><td><a href="#Deodorant">Deodorant</a></td></tr>
            <tr><td><a href="#Perfume">Perfume</a></td></tr>
            <tr><td><a href="#Mist">Mist</a></td></tr>
          </table>

      </div>
      <div class="right-section">

				<p id=addImage></p>
				<h2 class=header2 ><a name="Deodorant">Deodorant</a></h2>


			 <?php
			$row_results = mysql_query("SELECT * FROM products
						WHERE `ProductType` ='Deodorant' ") or die(mysql_error());
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


		<h2 class=header2><a name="Perfume">Perfume</a></h2>
		<?php
	$row_results = mysql_query("SELECT * FROM products
				WHERE `ProductType` ='Perfume' ") or die(mysql_error());
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
					<h2 class=header2><a name="Mist">Mist</a></h2>
					<?php
				$row_results = mysql_query("SELECT * FROM products
							WHERE `ProductType` ='Mist' ") or die(mysql_error());
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
