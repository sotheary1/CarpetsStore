<?php
	require_once("../autoloader.php");

	// Start session
	?>
 <?php
    // call the header
    include "header.php";

    //include "template/menu-navi.php";
  ?>

 <!--the Contain -->
 <article>

   <div class="contain">

    <!-- view siggleData -->
    <?php
        //  call the products;
      $products = Product::getProducts();
      $singleData = Product::viewSingleData($_GET['id']);
    ?>
      <!-- need to one img -->
              <div class="product-gallery">
                <h2><?php echo $singleData->getTitle()?></h2>
                  <div class="product-images">
                        <img src="../assets/img/<?php echo $singleData->getImage() ?>" class="product" alt="just a Photo">
                        <div class="product-detail">
                          <h4>
                            Product Detail:
                          </h4>
                           <p><?php echo $singleData->getDescription() ?></p>
                       </div>
                  </div>

              </div>


      <!-- for Add to Cart -->
        <div class="cart">
            <div class="products-info">
                <h4><p>Name: <?php echo $singleData->getTitle() ?></p></h4>
                <p> Price: <?php echo $singleData->getPrice() ?> .CHF</p>
                <p>Avalibel: <?php echo $singleData->getStock()?> Stock.</p>
            </div>
            <div class="add-cart">


									<div class="cart-action">
	                   <a class="button" href="cartAction.php?action=addToCart&id=<?php echo $singleData->getId(); ?>">Add to Cart</a>
										 <a class="button" href="hand.php" > Back </a>
	               </div>
    			</div>
        </div>
</div>
</article>
<?php
    include 'footer.php';
 ?>
