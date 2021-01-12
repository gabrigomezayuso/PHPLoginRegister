<?php
require_once("control/controlSession.php");
$myusername = $_SESSION["user_signin"];
include 'config.php';

// Check to make sure the id parameter is specified in the URL
if (isset($_GET['id'])) {
  $id = $_GET['id'];
} else {
  // Simple error to display if the id wasn't specified
  die('¡Este evento no esta disponible!');
}

$consulta = "SELECT * FROM eventos WHERE id_evento ='$id'";
$ejecutarConsulta = mysqli_query($con, $consulta);
$verFilas = mysqli_num_rows($ejecutarConsulta);
$fila = mysqli_fetch_array($ejecutarConsulta);

if (!$ejecutarConsulta) {
  echo "Error en la consulta";
} else {
  if ($verFilas < 1) {
    echo "Sin registros";
  } else {
    echo '
                    ';
    for ($i = 0; $i <= $fila; $i++) {
      $nombre = $fila[1];
      $fila = mysqli_fetch_array($ejecutarConsulta);
    }
  }
}



?>

<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="dist/css/form-control.css">
  <link rel="stylesheet" href="dist/css/adminlte.css">
  <link rel="stylesheet" href="dist/css/inicio.css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/157462/isolated/preview/88fbf3285773faa1142cbc625b810f40-mobile-online-shopping-icon-by-vexels.png" />
  <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>
  <script src="https://kit.fontawesome.com/90704118d5.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title><?php echo $nombre ?></title>
</head>


<header>
  <nav id="topNav" class="navbar fixed-top navbar-toggleable-sm navbar-inverse bg-inverse">
    <a class="navbar-brand mx-auto" href="index.php"><img src="https://i.imgur.com/BHfYfVP.png" width="100" class="d-inline-block align-top" alt=""></a></a>
  </nav>
</header>

<body class="transicion">
  <div class="sec1 producto">
    <div class="content">
      <div class="container-fluid">
        <div class="row">

          <?php
          $consulta = "SELECT * , e.id_evento, l.id_local, l.nombre_local FROM eventos e, locales l WHERE e.id_evento ='$id' AND e.id_local=l.id_local";
          $ejecutarConsulta = mysqli_query($con, $consulta);
          $verFilas = mysqli_num_rows($ejecutarConsulta);
          $fila = mysqli_fetch_array($ejecutarConsulta);

          if (!$ejecutarConsulta) {
            echo "Error en la consulta";
          } else {
            if ($verFilas < 1) {
              echo "Sin registros";
            } else {
              echo '
                    ';
              for ($i = 0; $i <= $fila; $i++) {
                echo '
                            <div class="App">
                              <div class="vertical-center">
                              <h3 class="titulo-evento text-center"><strong>' . $fila[1] . '</strong></h3>
                              <p class="text-muted text-center subtitulo"><i class="fas fa-calendar-day"></i> ' . $fila[2] . '&nbsp;|&nbsp;<a class="text-danger">+' . $fila[3] . '</a>&nbsp;|&nbsp;<i class="fas fa-map-marker-alt"></i> ' . $fila[12] . '</p>
                                <a href="product_page.php?page=product&id=' . $fila[9] . '"><img class="imgeventoCarro elevation-4" src="' . $fila[0] . '" alt="' . $fila[1] . '" width="600"></a>
                                <div class="botonAbajo h100 ">
                                <br>
                                <br>

                                <form action="/qr-event.php" method="post">
                                <p class="text-center caract"><strong>Entrada</strong> ' . $fila[4] . ' €</p>';
                $fila = mysqli_fetch_array($ejecutarConsulta);
              }
            }
          }
          ?>
          <div class="form-group">
            <input type="number" class="form-control" placeholder="Cantidad">
          </div>
          <button type="sumbit" value="<?php echo $id; ?>" name="product" id="submit" class="btn btn-outline-info btn-lg btn-block">Añadir al carrito</button>
        </div>
        </form>
        <br>
        <br>
      </div>
    </div>
    <br>
  </div>
  </div>
  </div>
  </div>


  <nav id="topNav" class="navbar fixed-bottom navbar-toggleable-sm navbar-inverse bg-inverse">
    <button onclick="window.location.href=''" class="form-inline butIzq fas fa-home bottom-icon-actived"></button>
    <button onclick="window.location.href='/search.php'" class="form-inline butIzq fas fa-search bottom-icon"></button>
    <a class="navbar-brand mx-auto" href="index.php"><img src="https://i.imgur.com/BHfYfVP.png" width="100" class="d-inline-block align-top" alt=""></a></a>
    <button onclick="window.location.href='/entradas.php'" class="form-inline butDer fas fa-ticket-alt bottom-icon"></button>
    <button onclick="window.location.href='/profile.php'" class="form-inline butDer fas fa-user bottom-icon"></button>
  </nav>





</body>

</html>