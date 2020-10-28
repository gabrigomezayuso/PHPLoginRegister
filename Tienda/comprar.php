<?php
require_once("controlSession.php");
$myusername=$_SESSION["user_signin"];
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" >
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="dist/css/form-control.css">
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/157462/isolated/preview/88fbf3285773faa1142cbc625b810f40-mobile-online-shopping-icon-by-vexels.png"/>
    <title>Comprar</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/welcome.php">Clickfy</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/welcome.php">Inicio</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="/comprar.php">Comprar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/carrito.php">Carrito</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/logout.php">Cerrar sesión</a>
      </li>
    </ul>
    <div class="form-inline my-2 my-lg-0">
    <input type="button" value="<?php echo $myusername?>" onclick="window.location.href='/perfil.php'" class="btn btn-outline-light" >
    </div>
  </div>
</nav>

<div class="container">
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- <div class="col-lg-6"> -->
                  <div class="App">
                      <div class="vertical-center">
                      <a href="crearLista.php"><img class="imgevento elevation-4" src="dist/img/JUEVES.PNG" alt="Jueves Tontos!" width="600"></a>
                      </div>
                  </div> 

                  <div class="App">
                      <div class="vertical-center">
                        <img class="imgevento elevation-4" src="dist/img/VIERNES.PNG" alt="ETE SEECH!" width="600">
                      </div>
                  </div> 

                  <div class="App">
                      <div class="vertical-center">
                        <img class="imgevento elevation-4" src="dist/img/sabado.PNG" alt="Regaeeton Classics" width="600">
                      </div>
                  </div> 
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>

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
