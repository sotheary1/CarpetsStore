<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="utf-8">
    <link rel="icon" href="../assets/img/shop.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="../assets/js/menu.js"></script>
    <title>Carpet Shop</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css">    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  </head>
  <body>
      <header>
        <div class="logo">
          <a href="../index.php"><img src="../assets/img/logo9.png" alt="logo"></a>
        </div>
      </header>
        <!-- Top Navi -->
      <nav>
        <div class="container">
          <div class="top-navi">
            <a href="index.php?lang=en" id="pic"><img src="../assets/img/en.png"></a>
            <a href="index.php?lang=de" id="pic"><img src="../assets/img/de.png"></a>
            <a href="login.php"><img src="../assets/img/login.jpg" style="background-color:red;"></i></a>

          </div>
          <div class="navi">
            <div class="search-container">
                <form action="search.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
                </form>
            </div>
          </div>
        </div>
      </nav>

  <!-- For call the Translator function en <==> de -->
      <?php
          $language = isset($_GET['lang']) ? $_GET['lang'] : 'en';
          // For set the  first page are default with English
          include "../lang/$language.php";

      ?>
  <!-- Menubar -->
  <div class="topnav" id="myTopnav">
    <a href="../index.php" class="active"><?php echo $lang['SMENU1']; ?></a>
    <a href="hand.php"><?php echo $lang['SMENU2']; ?></a>
    <a href="contact.php"><?php echo $lang['SMENU6']; ?></a>
    <a href="about.php"><?php echo $lang['SMENU5']; ?></a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script>


  <!-- for my Slider later -->
