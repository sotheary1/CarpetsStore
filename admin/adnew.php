<?php
  include "../autoloader.php";
  include "header.php";
?>

<?php
if(isset($_POST['submit'])){
  $title = $_POST["title"];
  $description = $_POST["description"];
  $price = $_POST["price"];
  $stock = $_POST["stock"];
// for uploade $img

  $newimg = $_FILES["image"]["name"];
// create dest.folder new img
  $desfolder ="../assets/img/".$newimg;
  move_uploaded_file($_FILES["image"]["tmp_name"],$desfolder);
  $img = "img/".$newimg; // to db
  // move_uploaded_file($_FILES["image"]["tmp_name"], $img);
  $category_id = $_POST["category_id"];

  $res = DB::doQuery(" INSERT INTO products VALUES('','$title','$description',$price,$stock,'$img',$category_id)");

}

 ?>

    <article>
      <h2 id="title"> Add New The Products</h2>
      <div class="container">
        <a class="button" href="admin.php">View Product's Lists</a>
        <form  name="addnewfrom" class="input" enctype="multipart/form-data" action="save.php" method="POST">
            <fieldset>
              <div class="block">
                <div class="col1">
                    <label for="name">Title :</label>
                </div>
                <div class="row1">
                    <input id="name" type="text" placeholder="Enter Name of Product" name="title">
                </div>
              </div>

              <div class="block">
                  <div class="col1">
                      <label for="name">Description :</label>
                  </div>
                  <div class="row1">
                      <input id="name" type="text" name="description">
                  </div>
              </div>

              <div class="block">
                <div class="col1">
                    <label for="name">Price :</label>
                </div>
                <div class="row1">
                    <input id="name" type="text"  name="price">
                </div>
              </div>

              <div class="block">
                <div class="col1">
                    <label for="name">Stock :</label>
                </div>
                <div class="row1">
                    <input id="name" type="text" name="stock">
                </div>
              </div>

              <div class="block">
                  <div class="col1">
                        <label for="name">Image :</label>
                  </div>
                  <div class="row1">
                        <input id="name" type="file"  name="image">
                  </div>
              </div>

              <div class="block">
                  <div class="col1">
                        <label for="name">Category_ID :</label>
                  </div>
                  <div class="row1">
                        <input id="name" type="text"  name="category_id" placeholder=" 1>> Hand & 2 >>Mashine">
                  </div>
              </div>

                <div class="btn">
                    <input class="btn1" type="submit" name="submit" value="Add">
                </div>

                <span>

                </span>
            </fieldset>
        </form>
      </div>
    </article>
