<?php
require_once("controlSession.php");
session_start();
$myusername=$_SESSION["user_signin"];
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crear Lista</title>
    <!-- jQuery + Bootstrap JS -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

  <link rel="stylesheet" href="dist/css/form-control.css">

  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlteform.css">
</head>




<body>
<nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item">
        <a href="welcome.php" class="nav-link">Inicio</a>
      </li>
      <li class="nav-item">
        <a href="crearLista.php" class="nav-link active">Crear lista</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="/logout.php" class="nav-link">Salir</a>
      </li>
    </ul>
  </nav>

<br>
<br>
<br>
<br>

  <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="crearLista_ok.php" method="post">
                    <h3>Crear Lista</h3>
                    <div class="form-group">
                        <label>Nombre de RRPP </label>
                        <input type="text" class="form-control" name="nombreRRPP" id="nombreRRPP" required maxlength="30" placeholder="<?php echo $myusername?>"  disabled />
                    </div>

                    <div class="form-group">
                          <label>Nombre</label>
                          <input type="text" class="form-control" name="nombreCliente" id="nombreCliente" required maxlength="30" />
                      </div>

                      <div class="form-group">
                          <label>Acompañantes</label>
                          <input type="number" class="form-control" name="acomp" id="acomp" required maxlength="30" />
                      </div>
                      <label for="start">Día</label>
                        <br>
                      <input type="date" id="fecha" name="fecha" value="2022-07-22">
                        <br>
                        <br>
                      <button type="submit" name="submit" id="submit" class="btn btn-outline-dark btn-lg btn-block">
                      Enviar
                      </button>
                  </form>
            </div>
        </div>
    </div>




  
  </body>