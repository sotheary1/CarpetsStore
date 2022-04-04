<?php

session_start();

// get current url
$language =$_SERVER['HTPP_REFERER'];
$lang=$_GET['lang'];
$_SESSION['lang']=$lang;
  //echo $language;    /* just only testen */

  // go to current url
header("location:$language");

 ?>
