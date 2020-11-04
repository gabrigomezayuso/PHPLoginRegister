<?php
require_once("control/controlSession.php");
    header( "refresh:1;url=inicio.php" );
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Clickfy</title>
  
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="dist/css/inicio.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>



<header>
<div class="jumbotron jumbotron-fluid height100p banner" id="home">
  <div class="container h100">
    <div class="contentBox h100">
      <div>
        <img src="https://i.imgur.com/BHfYfVP.png" alt="clickfy" width="300">
        <div class="loader">
          <div class="duo duo1">
            <div class="dot dot-a"></div>
            <div class="dot dot-b"></div>
          </div>
          <div class="duo duo2">
            <div class="dot dot-a"></div>
            <div class="dot dot-b"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</header>

,
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="dist/js/demo.js"></script>
<script src="dist/js/pages/dashboard3.js"></script>
</body>
</html>
