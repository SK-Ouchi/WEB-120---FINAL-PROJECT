<?php include "includes/fp-config.php"; ?>
<!DOCTYPE html>
<html>
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/template.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="css/bio.css" />
    <link rel="stylesheet" href="css/portal.css" />
    <link rel="stylesheet" href="css/gallery.css" />
    <link rel="stylesheet" href="css/lightbox.css" />
    
    <!-- ADDED GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
</head>

<body>
<!-- START WRAPPER -->
<main class="wrapper">
<header>
    <nav>
    <ul class="topnav" id="myTopnav">
      <li><a href="index.php">FABRICIO CALVET-RECKTENWALL</a></li>
      <li><a href="index.php">HOME</a></li>
      <li><a href="work.php">WORK</a></li>
      <li><a href="contact.php">CONTACT</a></li> 
      <!-- Toggle menu when viewport is changed. -->
      <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
    </ul>
    <ul class="sideNav">
      <li><a href="index.php"><img src="images/logos//fabriciocrecktenwall_logo.svg" alt="FABRICIO CALVET-RECKTENWALL"/></a></li>
      <li><a href="index.php">HOME</a></li>
      <li><a href="work.php">WORK</a></li>
      <li><a href="contact.php">CONTACT</a></li>
      <li class="social-media"><a href="#"><img src="images/logos/facebook.svg" alt="test"/></a></li>
      <li class="social-media"><a href="#"><img src="images/logos/instagram.svg" alt="test"/></a></li>
    </ul>
  </nav>
</header>
<h1 class="pageID"><?=$PageID?></h1>