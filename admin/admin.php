<?php
  include "admin-secur.php";
  include "../autoloader.php";
  include "header.php";

 ?>
<!-- for Main-->

<article>
  <h2 id="title"> Admin </h2>
  <table class="tp-list">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Stock</th>
            <th>Image</th>
            <th>Category_ID</th>
            <th>Delete</th>
            <th>Update</th>
        </tr>
    </thead>
  <tbody>

<?php

//	$page = isset($_GET["page"]) ? intval($_GET["page"]) : 0;
//  $pageS =$page *8;
  $products = Product::getProducts();
  foreach ($products as $oneproduct){

      //  print_r($row[1]); test only
        //$i = 1;
    		echo "<tr>";
    		echo "<td>".$oneproduct->getId()."</td>";
    		echo "<td>".$oneproduct->getTitle()."</td>";
    		echo "<td>".$oneproduct->getDescription()."</td>";
    		echo "<td>".$oneproduct->getPrice().".CHF"."</td>";
    		echo "<td>".$oneproduct->getStock()."</td>";
      //  echo "<td>".$row[5]."</td>";

    	/*	echo "<td>".$row[7]."</td>"; */
        echo "<td><img src='../assets/img/".$oneproduct->getImage()."' width='100px'></td>";
        echo "<td>".$oneproduct->getCategory_id()."</td>";
    		echo "<td><a href='delete.php?&id=".$oneproduct->getId()."'>Delete</a></td>";
    		echo "<td><a href='update.php?id=".$oneproduct->getId()."'>Update</a></td>";
    		echo "</tr>";

    }
     ?>
    </tbody>
    </table>

</article>

</body>
</html>
