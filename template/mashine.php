<?php
  include "header.php";
 ?>
<article>
  <div class="contain">
      <div class="title">
          <h1>Carpets With Mashine Productions</h1>
      </div>
      <div class="row">
          <!-- Php code block 1 of 1 starts  -->
          <?php
            require ('../autoloader.php');
            //require ('../lib/DB.class.php');

            $products = Product::showCategory_id(2);
            foreach ($products as $oneproduct){
      ?>
      <!-- properties -->
        <div class="gallery">
            <div class="img-frame">
              <a href="product-detail.php?id=<?php echo $oneproduct->getId();?>">
               <?php echo"<img src=\"../assets/img/".$oneproduct->getImage()."\" alt='just a photo'>";?></a>
            </div>
            <div class="desc">
                  <p><?php echo  "Name: ".($oneproduct->getTitle());?> </p>
                  <p><?php echo "Price: ".($oneproduct->getPrice())." "."CHF";?> </p>
                  <p><?php echo "Avalibel: ".($oneproduct->getStock())." "."Stock";?></p>
           </div>
           <div class="detail">
              <a class="btn" href="product-detail.php?id=<?php echo $oneproduct->getId();?>">View Details</a>
              <a class="btn" href="cartAction.php?action=addToCart&id=<?php echo $oneproduct->getId(); ?>">Add Cart</a>
          </div>
      </div>
      <!-- properties -->
      <?php } ?>

    </div>

    </article>
 <?php
   include "footer.php";
  ?>
