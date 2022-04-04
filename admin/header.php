<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link type="text/css" href="admin.css" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/admin_css.css">
  <title>Admin Page</title>

<style media="screen">
  .active{
    color: black;
    text-decoration: none;
  }
</style>
</head>

<body>
  <!-- for Tobnavi bar -->
  <header>
    <div class="logo">
        <img id="logo" src="../assets/img/logo9.png" alt="My Carpets Shop" >
    </div>
  </header>
  <nav>
    <div class="navbar">
        <a href="admin.php">Admin</a>
        <div class="navi">
          <div class="search-container">
              <form action="ad-search.php">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit"><i class="fa fa-search"></i></button>
              </form>
          </div>
        </div>
        <a href="logout.php">Logout</a>
    </div>
  </nav>

<!-- for sidenav bar -->
<div class="sidenav">
  <a href="admin.php">
    <div class="logo">
        <img src="../assets/img/logo9.png" alt="My Carpets Shop" >
    </div>
  </a>
  <div class="txt">
    <p> My Carpets Shop</p>
  </div>
  <a href="admin.php"><span>View Products List</span></a>
  <a href="adnew.php"><span>Add New Products</span></a>
</div>
