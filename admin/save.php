<?php
include "../autoloader.php";

$title = $_REQUEST["title"];
$description = $_REQUEST["description"];
$price = $_REQUEST["price"];
$stock = $_REQUEST["stock"];
$img = basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $img);
$category_id =$_REQUEST["category_id"];

$res = DB::doQuery(" INSERT INTO 'carpetonlineshop'.'products' ('title','description','price','stock','image','category_id')
            VALUES('$title','$description',$price,$stock,'$img',$category_id);");

/*mysqli_close($dbconnect); */
header("location:admin.php");
 ?>
