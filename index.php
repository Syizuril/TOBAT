<?php
  require_once("config/config.php");
  require("config/auth.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>TOBAT Online - Situs Penjualan Obat Online</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.ico">

    <!-- jQuery -->
    <script src="js/jquery-2.0.0.min.js" type="text/javascript"></script>

    <!-- Bootstrap4 files-->
    <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css"/>

    <!-- Font awesome 5 -->
    <link href="fonts/fontawesome/css/fontawesome-all.min.css" type="text/css" rel="stylesheet">

    <!-- plugin: fancybox  -->
    <script src="plugins/fancybox/fancybox.min.js" type="text/javascript"></script>
    <link href="plugins/fancybox/fancybox.min.css" type="text/css" rel="stylesheet">

    <!-- custom style -->
    <link href="css/ui.css" rel="stylesheet" type="text/css"/>
    <link href="css/responsive.css" rel="stylesheet" media="only screen and (max-width: 1200px)" />

    <!-- custom javascript -->
    <script src="js/script.js" type="text/javascript"></script>
    <style media="screen">
    .dropdown-toggle_a::after {
      display: none;
    }
    .dropdown_a:hover .dropdown-menu {
      display: block;
      margin-top: 0;
    }
    </style>
  </head>
  <body>
    <?php require("view/header_login.php") ?>
    <footer class="sticky-footer bg-white">
    <div class="container my-auto">
      <div class="copyright text-center my-auto">
        <span>Copyright &copy; TOBAT Online 2019</span>
      </div>
    </div>
  </footer>
  </body>
</html>
