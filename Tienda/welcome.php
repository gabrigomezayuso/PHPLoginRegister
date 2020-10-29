<?php
require_once("control/controlSession.php");
$myusername=$_SESSION["user_signin"];

?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>Bienvenido/a! <?php echo $myusername?></title>
  
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="dist/css/inicio.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>



<header>
  <div class="overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
    <source src="https://r5---sn-4g5e6nsz.c.youtube.com/videoplayback?ip=88.2.250.83&sparams=expire%2Cei%2Cip%2Ccp%2Cclient%2Cid%2Cipbits%2Citag%2Cratebypass%2Csource&expire=1604006563&sig=AOq0QJ8wRgIhANcNWVbtQdcL0aftILFFYs5y5gRz4XkF85MywdvrSXgKAiEA_6ZBOR79Cui5P-qDa4-oBAxkyOW8K8dmxY_ioDFMigw%3D&title=%2523DivendresDeLit%2520-%2520Lit%2520Lleida&source=youtube&ei=Q96aX9H5K4LIhwbUy4q4DQ&itag=22&ipbits=0&client=youtube-download&id=aab332d0daff21c3&cp=U0tPSVBLVF9LTUNROV9IRVhGOkpwRFBxcENJZWNZOExzdGlVa2tqaTVzcjFvWWh5NHVWSjlkSTFmdV9sUGU&ratebypass=yes&redirect_counter=1&cm2rm=sn-h5q6s76&req_id=722a37d5059fa3ee&cms_redirect=yes&mh=LT&mm=34&mn=sn-4g5e6nsz&ms=ltu&mt=1603984827&mv=m&mvi=5&pl=16&lsparams=mh,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRAIgYpiAr-7prkS_aFIWKvSKiFrP9UQf6KB7gi9-bTwAZXwCIDM2aPD0flTM7XTtMec3zzQRTe4j9TSeJzU3ntYBy0da" type="video/mp4">
  </video>
  <div class="container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
      <a href="crearLista.php"><img class="imgevento elevation-4" src="dist\img\logo.png" alt="Clickfy" width="300"></a>
        <p class="lead mb-0">¡Un click y a disfrutar!</p>
        <br>
        <input type="button" value="Comprar" onclick="window.location.href='/comprar.php'" class="butt btn-outline-light" >
        <input type="button" value="Carrito" onclick="window.location.href='/carrito.php'" class="butt btn-outline-light" >

      </div>
    </div>
  </div>
</header>



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
