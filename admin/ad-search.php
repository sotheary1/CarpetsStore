<?php

  include "../autoloader.php";
  include "header.php";

 ?>
<!-- for Main-->

<article>
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
    $products = new Product();
    if(isset($_GET['search'])){
     $allData = $products->getProducts();
      /*** search  block1 start ***/
      if(isset($_GET['search'])){
         $allData = $products->search($_GET);
         $availableKeywords= $products->getAllKeywords();
         $comma_separated_keywords= '"'.implode('","',$availableKeywords).'"';
      /*** end search  block1 start ***/
      }
      /*** search  block2 start ***/
      if(isset($_GET['search']) ) {
          $someData = $products->search($_GET);
          $serial = 1;
      }
        /*** end search  block2 start ***/
      if(count($someData) <= 0){
        echo "<br>No Result Found";
      }
      foreach ($someData as $oneData){
    		echo "<tr>";
    		echo "<td> ".$oneData->getId()."</td>";
    		echo "<td>".$oneData->getTitle()."</td>";
    		echo "<td>".$oneData->getDescription()."</td>";
    		echo "<td>".$oneData->getPrice().".CHF"."</td>";
    		echo "<td>".$oneData->getStock()."</td>";
        echo "<td><img src='../assets/img/".$oneData->getImage()."' width='100px'></td>";
        echo "<td>".$oneData->getCategory_id()."</td>";
    		echo "<td><a href='delete.php?id=".$oneData->getId()."'>Delete</a></td>";
    		echo "<td><a href='update.php?id=".$oneData->getId()."'>Update</a></td>";

    		echo "</tr>";
      }}?>

    </tbody>
    </table>

</article>

</body>
</html>
