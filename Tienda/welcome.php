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
    <source src="https://r5---sn-4g5e6nsz.googlevideo.com/videoplayback?expire=1603931499&ei=C7mZX4rqBvHasALX-qKoBg&ip=84.76.29.230&id=o-AG8us0CGeIawB2QH7hoimWp-bHJfTDoad41ULETC8O_R&itag=18&source=youtube&requiressl=yes&gcr=es&vprv=1&mime=video%2Fmp4&gir=yes&clen=1467703&ratebypass=yes&dur=15.464&lmt=1579220045642801&fvip=5&c=WEB&txp=6216222&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cgcr%2Cvprv%2Cmime%2Cgir%2Cclen%2Cratebypass%2Cdur%2Clmt&avi=K1A%2FHwERIiwAVF8KVl1eH3IxAAYNET8AADcJFEtQUFYkUFNUR1hvJg0GDQFRZVteNQEdFwgEb18KAwkIDxNiXzELCBQMGCQRHSURBVdEQRFqHBwaCVhvMw0SAAtqX1RcBQAFPwsQKB1GTFVIAWhmUD8HBwIXDW9fCgMJCA8TYkE%2FChBUXxo4CQhaRylCSX9aPhYqGRAaORcdVF8KVl1eH3IxHAQXESMRMB8IAVBFU14gUFNUVEJ9Vl1GXFwaCBBO&sig=AOq0QJ8wRQIhAOQLMsSt3lAILTQ4QnlxLlM_D74w2oWfQO0fJmRimBX9AiBm78f3OnOundnx_FeY7MRtJDuCnLJNJqCMkIGDQha9fw%3D%3D&from_cache=False&title=&redirect_counter=1&cm2rm=sn-h5qzd76&req_id=797a10592ffaa3ee&cms_redirect=yes&mh=LT&mip=88.2.250.83&mm=34&mn=sn-4g5e6nsz&ms=ltu&mt=1603909840&mv=m&mvi=5&pl=16&lsparams=mh,mip,mm,mn,ms,mv,mvi,pl&lsig=AG3C_xAwRAIgTDFjTBA3nJB3XEmdDqx86ZPmCVgIb4_IvudCCR6PSo4CIDlGXcE4QbejZrCbHX6yTf-9lkfu6iZxalDvPj6HKr8D#DivendresDeLit%20-%20%20Lit%20Lleida" type="video/mp4">
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
