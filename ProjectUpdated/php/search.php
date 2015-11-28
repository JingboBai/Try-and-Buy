

<?php
include("../html/header.html");
include("../html/nav.html");
include "dbconnect.php";s

?>

<div class="search-section">
  <div class="left-section">
     <table class=categories>
      <tr><th>Select a Catagory </th><tr>
      <tr><td><a href="../php/BathBodySkin.php">BathBody &amp; Skin Care</td></tr>
      <tr><td><a href="../php/fragrances.php">Fragrances</a></td></tr>
      <tr><td><a href="../php/makeup.php">Makeup</td></tr>
     </table>
   </div>

  <h2 class=header2 >Search Result</h2>
<br>
<br>
<?php
    $query = $_GET['query'];
    // gets value sent over search form

    $min_length = 1;
    // you can set minimum length of the query if you want

    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

        $query = htmlspecialchars($query);
        // changes characters used in html to their equivalents, for example: < to &gt;

        $query = mysql_real_escape_string($query);
        // makes sure nobody uses SQL injection

        $row_results = mysql_query("SELECT * FROM products
            WHERE (`ProductName` LIKE '%".$query."%') OR (`ProductType` LIKE '%".$query."%')") or die(mysql_error());


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
        else{ // if there is no matching rows do following
            echo "No results founded.";
        }

    }
    else{ // if query length is less than minimum
        echo "Please type your keywords.";
    }
?>

</div>


<?php

include("../html/index-footer.html");

 ?>
</body>
</html>
