<?php
	include "../autoloader.php";

	$id=$_GET["id"];
//	include "../databank/dbconnection.php";
	$res = DB::doQuery(" DELETE FROM `products` WHERE `products`.`id` = $id ");
	header("location:admin.php");
 ?>
