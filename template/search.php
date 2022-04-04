<?php
  require ('../autoloader.php');
  include "header.php";
 ?>
<article>
  <div class="contain">
      <div class="title">
          <h1>Search-Result:</h1>
      </div>
      <div class="row">
          <!-- Php code block 1 of 1 starts  -->
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
                //echo $oneData->getId();
        ?>

          <!-- properties -->
            <div class="gallery">
                <div class="img-frame">
                  <a href="product-detail.php?id=<?php echo $oneData->getId();?>">
                   <?php echo"<img src=\"../assets/img/".$oneData->getImage()."\" alt='just a photo'>";?></a>
                </div>
                <div class="desc">
                      <p><?php echo  "Name: ".($oneData->getTitle());?> </p>
                      <p><?php echo "Price: ".($oneData->getPrice())." "."CHF";?> </p>
                      <p><?php echo "Avalibel: ".($oneData->getStock())." "."Stock";?></p>
               </div>
               <div class="detail">
                  <a class="btn" href="product-detail.php?id=<?php echo $oneData->getId();?>">View Details</a>
              </div>
          </div>
        <?php } } ?>
      </div>
  </div>
</article>
 <?php
   include "footer.php";
  ?>
