<?php
require_once("control/controlSession.php");
include 'config/config.php';

$myusername = $_SESSION["user_signin"];

if (isset($_GET['busqueda'])) {
  $busqueda = $_GET['busqueda'];
} else {
  // Simple error to display if the id wasn't specified
  $busqueda = 0;
}


//realizamos la conexión
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
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet'>


  <script src="https://kit.fontawesome.com/90704118d5.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <title>Bienvenido/a! <?php echo $myusername ?></title>
</head>


<header>
  <nav id="topNav" class="navbar fixed-top navbar-toggleable-sm navbar-inverse bg-inverse">
    <a class="navbar-brand mx-auto" href="index.php"><img src="https://i.imgur.com/BHfYfVP.png" width="100" class="d-inline-block align-top" alt=""></a></a>
  </nav>
</header>

<body class="transicion">
  <div class="sec1">
    <div class="container h-100">
      <div class="d-flex justify-content-center h-100">
        <div class="searchbar">
          <form action="" method="get">
            <input class="search_input" type="text" name="busqueda" placeholder="Ciudad">
            <button type="submit" class="fas fa-search search_icon"></button>
          </form>
        </div>
      </div>
    </div>
    <div class="App">
      <div class="vertical-center">
      </div>
    </div>
    <br>
    <br>

    <?php
    // $query = $mysqli->query("SELECT *, e.id_local, l.id_local, l.id_ciudad, c.id_ciudad, l.id_ciudad FROM eventos e , locales l, ciudades c WHERE e.id_local=l.id_local AND l.id_ciudad=c.id_ciudad AND c.nombre_ciudad = '$busqueda' ORDER BY fecha ASC");
    // while ($valores = mysqli_fetch_array($query)) {
    //   echo '

    //   <div class="imgevento">
    //   <a href="product_page.php?page=product&id=' . $valores[9] . '"><img class="imagen elevation-4" src="' . $valores[0] . '" alt="' . $valores[1] . '" width="600"></a><br>
    //   <br> <p> hola hola</p>
    //   </div>
    //               ';
    // }
    ?>

    <div class="container">
      <div class="container-fluid">
        <div class="row">
          <div class="App">
            <div class="vertical-center">
              <div class="main-title mayu titulo">
                <h3>Eventos</h3>
              </div>
              <div class="h-100 d-flex justify-content-center align-items-center">
                <p>Ordenar por:</p>
              </div>
              <div class="h-100 d-flex justify-content-center align-items-center">
                <br>
                <form class="row g-3" method="POST">
                  <div class="col-auto">
                    <input class="btn btn-outline-info btn-block" name="ASC" type="submit" value="Precio ascendiente">
                  </div>
                  <div class="col-auto">
                  <input class="btn btn-outline-info btn-block" name="DESC" type="submit" value="Precio descendiente">
                  </div>
              </form>
              </div>
              <?php

if(isset($_POST["ASC"])){
  $query = $mysqli->query("SELECT * , e.id_evento, l.id_local, l.nombre_local FROM eventos e, locales l WHERE e.id_local=l.id_local ORDER BY precio_entrada ASC");
  while ($valores = mysqli_fetch_array($query)) {
    echo '
      <div class="imgevento">
      <br>                  <br>

      <a href="product_page.php?page=product&id=' . $valores[9] . '"><img class="imagen " src="' . $valores[0] . '" alt="' . $valores[1] . '" width="600"></a>
      <div class="vertical-center">
      <br>
                  <h3 class="titulo-evento text-center"><strong>' . $valores[1] . '</strong></h3>
                  <p class="text-muted text-center subtitulo"><i class="fas fa-calendar-day"></i> ' . $valores[2] . '&nbsp;|&nbsp;<a class="text-danger">+' . $valores[3] . '</a>&nbsp;|&nbsp;<i class="fas fa-map-marker-alt"></i> ' . $valores[12] . '</p>
                  <h4 class="text-center titulo-evento">Precio: ' . $valores[4] . ' €</h4>
                  </div>
                  <br>
                  </div>

    ';
  }}
if(isset($_POST["DESC"])){
  $query = $mysqli->query("SELECT * , e.id_evento, l.id_local, l.nombre_local FROM eventos e, locales l WHERE e.id_local=l.id_local ORDER BY precio_entrada DESC");
  while ($valores = mysqli_fetch_array($query)) {
    echo '
      <div class="imgevento">
      <br>                  <br>

      <a href="product_page.php?page=product&id=' . $valores[9] . '"><img class="imagen " src="' . $valores[0] . '" alt="' . $valores[1] . '" width="600"></a>
      <div class="vertical-center">
      <br>
                  <h3 class="titulo-evento text-center"><strong>' . $valores[1] . '</strong></h3>
                  <p class="text-muted text-center subtitulo"><i class="fas fa-calendar-day"></i> ' . $valores[2] . '&nbsp;|&nbsp;<a class="text-danger">+' . $valores[3] . '</a>&nbsp;|&nbsp;<i class="fas fa-map-marker-alt"></i> ' . $valores[12] . '</p>
                  <h4 class="text-center titulo-evento">Precio: ' . $valores[4] . ' €</h4>
                  </div>
                  <br>
                  </div>

    ';
  }}
if(!isset($_POST["ASC"])&&!isset($_POST["DESC"])){

              $query = $mysqli->query("SELECT * , e.id_evento, l.id_local, l.nombre_local FROM eventos e, locales l WHERE e.id_local=l.id_local");
              while ($valores = mysqli_fetch_array($query)) {
                echo '
                  <div class="imgevento">
                  <br>                  <br>

                  <a href="product_page.php?page=product&id=' . $valores[9] . '"><img class="imagen " src="' . $valores[0] . '" alt="' . $valores[1] . '" width="600"></a>
                  <div class="vertical-center">
                  <br>
                              <h3 class="titulo-evento text-center"><strong>' . $valores[1] . '</strong></h3>
                              <p class="text-muted text-center subtitulo"><i class="fas fa-calendar-day"></i> ' . $valores[2] . '&nbsp;|&nbsp;<a class="text-danger">+' . $valores[3] . '</a>&nbsp;|&nbsp;<i class="fas fa-map-marker-alt"></i> ' . $valores[12] . '</p>
                              <h4 class="text-center titulo-evento">Precio: ' . $valores[4] . ' €</h4>
                  </div>
                  <br>
                  </div>

                ';
              }
            }
              // $query = $mysqli->query("SELECT * FROM eventos ORDER BY 'fecha' ASC");
              // while ($valores = mysqli_fetch_array($query)) {
              //   echo '
              //                                 <a href="product_page.php?page=product&id=' . $valores[9] . '"><img class="imgevento elevation-4" src="' . $valores[0] . '" alt="' . $valores[1] . '" width="600"></a>
              //               ';
              // }
              ?>
            </div>
          </div>
        </div>
      </div>
    </div>


  </div>

<br>
<br>
<br>
  <nav id="topNav" class="navbar fixed-bottom navbar-toggleable-sm navbar-inverse bg-inverse">
    <button onclick="window.location.href=''" class="form-inline butIzq fas fa-home bottom-icon-actived"></button>
    <button onclick="window.location.href='/search.php'" class="form-inline butIzq fas fa-search bottom-icon"></button>
    <a class="navbar-brand mx-auto" href="index.php"><img src="https://i.imgur.com/BHfYfVP.png" width="100" class="d-inline-block align-top" alt=""></a></a>
    <button onclick="window.location.href='/carrito.php'" class="form-inline butDer fas fa-shopping-cart bottom-icon"></button>
    <button onclick="window.location.href='/profile.php'" class="form-inline butDer fas fa-user bottom-icon"></button>
  </nav>

</body>

</html>