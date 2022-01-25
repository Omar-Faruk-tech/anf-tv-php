<?php

  if (isset($_SESSION['username'])) {
    # code...
    $username = $_SESSION['username'];
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="ANF-tv Official website">
  <link rel="icon" type="image/png" href="./public/Images/tv logo 2.png"/>
  <meta name="keywords" content="news,anf,tv,politics,sports,business,culture,africa,nigeria,entertainment,science,technology">
  <title>ANF-tv</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/footer.css">
</head>
<body>
  <div class="modal" id="modal-background" onclick="closeNav()">
  <div id="close" onclick="closeNav()">
    <i class="fas fa-times"></i>
  </div>
    <div class="news-categories-mobile">
      <ul id="news-list-container-mobile" class="news-cat-container">
        <li id="news-mobile">
          <a href="./index.php" id="news-link">News</a>
        </li>
        <li id="politics-mobile">
          <a href="./category.php" id="politics-link">Politics</a>
        </li>
        <li id="sports-mobile">
          <a href="./category.php" id="sports-link">Sports</a>
        </li>
        <li id="culture-mobile">
          <a href="./category.php" id="culture-link">Culture</a>
        </li>
        <li id="business-mobile">
          <a href="./category.php" id="business-link">Business</a>
        </li>
        <li id="entertainment-mobile">
          <a href="./category.php" id="entertainment-link">Entertainment</a>
        </li>
        <li id="science-technology-mobile">
          <a href="./category.php" id="science-technology-link">Technology</a>
        </li>
      </ul>
    </div>
  </div>
  <header id="header">
    <nav id="navbar">
      <div id="logo">
        <img src="./public/Images/Untitled-2.png" alt="ANF-tv">
      </div>
      <div id="news-categories">
        <ul id="news-list-container" class="news-cat-container">
          <li id="news">
            <a href="./index.php" id="news-link">News</a>
          </li>
          <li id="politics">
            <a href="./category.php" id="politics-link">Politics</a>
          </li>
          <li id="sports">
            <a href="./category.php" id="sports-link">Sports</a>
          </li>
          <li id="culture">
            <a href="./category.php" id="culture-link">Culture</a>
          </li>
          <li id="business">
            <a href="./category.php" id="business-link">Business</a>
          </li>
          <li id="entertainment">
            <a href="./category.php" id="entertainment-link">Entertainment</a>
          </li>
          <li id="science-technology">
            <a href="./category.php" id="science-technology-link">Technology</a>
          </li>
        </ul>
      </div>
      <div id="search">
        <input type="search" name="search" placeholder="Search" id="search-input">
        <button id="search-button">
          <img id="search-img" src="./public/Images/Search.png" alt="search-icon" id="search-icon">
        </button>
      </div>
      <div id="hamburger" onclick="openNav()">
        <i class="fas fa-bars"></i>
      </div>
      <div id="user">
          <?php $username ?>
      </div>
    </nav>