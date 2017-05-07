<?php
session_start();
?>
<html>
<head>
  <script src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.red-pink.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/materialize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/pickadate/lib/compressed/themes/default.css">
  <link rel="stylesheet" href="node_modules/pickadate/lib/compressed/themes/default.date.css">
  <link rel="stylesheet" href="node_modules/pickadate/lib/compressed/themes/default.time.css">
</head>
<body>
  <header>
    <div class="navbar-fixed">
      <nav>
        <div class="nav-wrapper red">
          <a href="index.php" style="padding-left:20px" class="brand-logo">TODO</a>
          <div class="right">
            <ul id="nav-mobile" style="padding-top: 20px; padding-right: 20px" class="right hide-on-med-and-down">
              <ul>
                <?php
                if (isset($_SESSION['name'], $_SESSION['user_id'], $_SESSION['isLogged'])) {
                  echo '<li>', $_SESSION["name"], '</li>';
                  echo '<li><a href="logout.inc.php">Logout</a></li>';
                } else {
                  echo '<li><a href="login.php">Login</a></li>';
                }
                ?>
              </ul>


            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <main>
    <div class="page-content">