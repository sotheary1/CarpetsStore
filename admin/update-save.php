<?php

include "../autoloader.php";

			$id = $_REQUEST["id"];
			$title =  $_REQUEST["title"];
			$description = $_REQUEST["description"];
			$price =  $_REQUEST["price"];
		  $stock =  $_REQUEST["stock"];
			$category_id = $_REQUEST["category_id"];

			$img1 = $_REQUEST["image"];
			$img2 = basename($_FILES["image"]["name"]);
		//	$img="img/".basename($_FILES["image"]["name"]);
			if(empty($img2))
			{
				$img3=$img1;

			}
			else{
				$img3=$img2;
				move_uploaded_file($_FILES["image"]["tmp_name"], $img3);
			}

	//	include "../databank/dbconnetion.php";
					$res = DB::doQuery(" UPDATE 'carpetonlineshop'.'products' SET 'title'='$title',
		    'description'='$description','price'=$price, 'stock'=$stock,'image'='$img3','category_id'=$category_id
		         WHERE'id'=$id;");
			header("location:admin.php");

		 ?>
