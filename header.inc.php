<?php
session_start();
?>
<html>
<head>
  <!-- Material Design Lite -->
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-pink.min.css">
  <link rel="stylesheet" href="css/style.css">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
</head>
<body>
<!-- Always shows a header, even in smaller screens. -->
<div class="mdl-layout mdl-js-layout">
  <header class="mdl-layout__header mdl-layout__header--scroll">
    <div class="mdl-layout__header-row">
      <!-- Title -->
      <span class="mdl-layout-title">TODO</span>
      <!-- Add spacer, to align navigation to the right -->
      <div class="mdl-layout-spacer"></div>
      <!-- Navigation -->
      <nav class="mdl-navigation">
        <?php
        if (isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])){
/*          echo '<a class="mdl-navigation__link" href="edit_profile.php">Edit Profile</a>';
          echo '<a class="mdl-navigation__link" href="reserve.php">Reservation</a>';
          echo '<a class="mdl-navigation__link" href="review.php">Review</a>';*/
        }?>
        <?php
        if (!isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])){
          echo '<a class="mdl-navigation__link" href="login.php">Login</a>';
        }?>

        <?php
        if (isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])){
          echo '<a class="mdl-navigation__link" href="logout.inc.php">Logout</a>';
        }?>
      </nav>
    </div>
  </header>
  <div class="mdl-layout__drawer">
    <span class="mdl-layout-title">TODO</span>
    <nav class="mdl-navigation">
      <?php
      if (isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])){
/*        echo '<a class="mdl-navigation__link" href="edit_profile.php">Edit Profile</a>';
        echo '<a class="mdl-navigation__link" href="reserve.php">Reservation</a>';
        echo '<a class="mdl-navigation__link" href="review.php">Review</a>';*/
      }?>

      <?php
      if (!isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])){
        echo '<a class="mdl-navigation__link" href="login.php">Login</a>';
      }?>
      <?php
      if (isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])){
        echo '<a class="mdl-navigation__link" href="logout.inc.php">Logout</a>';
      }
      ?>
    </nav>
  </div>
  <main class="mdl-layout__content">
    <div class="page-content">