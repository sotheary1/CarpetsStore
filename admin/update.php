<?php
  include "../autoloader.php";
  include "header.php";
?>
<article>

<?php
    //  call the products;
  $products = Product::getProducts();
  $singleData = Product::viewSingleData($_GET['id']);
?>


<form class="" enctype="multipart/form-data" action="update-save.php" method="POST">
    <fieldset>
        <input id="name" type="hidden" name="id" value="<?php echo $id ?>">
        <div class="product">
            <label for="name">Title</label>
            <input id="name" type="text" name"title" value=" <?php echo $singleData->getTitle()?>">
        </div>
        <div class="product">
            <label for="name">Description</label>
            <input id="name" type="text" name="description" value=" <?php echo $singleData->getDescription()?>">
        </div>
        <div class="product">
            <label for="name">Price</label>
            <input id="name" type="text"  name="price" value="<?php echo $singleData->getPrice()?>">
        </div>
         <div class="product">
            <label for="name">Stock</label>
            <input id="name" type="text"  name="stock" value="<?php echo $singleData->getStock()?> ">
        </div>
        <div class="product">
            <label for="name"> Image</label>
          <!--  <input id="name" type="hidden" name="image" value="<?php // echo $row1[5]; ?>"> -->
            <input id="name" type="hidden" name="image1" value="<?php echo $singleData->getImage()?>">
						<input id="name" type="file" name="image">
        </div>
         <div class="product">
            <label for="name">Category_ID</label>
            <input id="name" type="text" name="category_id" value="<?php echo $singleData->getCategory_id()?> ">
        </div>

        <div class="product">
            <input type="submit" name="submit" value="Update">
            <input type="hidden" name="id" value="<?php echo $singleData->getId()?>" />
	          <input type="hidden" name="action" value="Update" />
        </div>
    </fieldset>
</form>

</article>
