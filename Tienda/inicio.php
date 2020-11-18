<?php
require_once("control/controlSession.php");
$myusername=$_SESSION["user_signin"];
//Parámetros de conexión
$servidor="127.0.0.1";
$usuario="root";
$contraseña="";
$bd="tienda";


$mysqli = new mysqli('127.0.0.1', 'root', '', 'tienda');

if (isset($_GET['busqueda'])) {
  $busqueda = $_GET['busqueda'];
} else {
  // Simple error to display if the id wasn't specified
 $busqueda=0;
}


//realizamos la conexión
$con=mysqli_connect($servidor,$usuario,$contraseña,$bd);
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
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/157462/isolated/preview/88fbf3285773faa1142cbc625b810f40-mobile-online-shopping-icon-by-vexels.png"/>
    <link href='https://fonts.googleapis.com/css?family=Alata' rel='stylesheet'>


    <script src="https://kit.fontawesome.com/90704118d5.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title>Bienvenido/a! <?php echo $myusername?></title>
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
                  
                  <?php
                  
                    $query = $mysqli -> query ("SELECT *, e.id_local, l.id_local, l.id_ciudad, c.id_ciudad, l.id_ciudad FROM eventos e , locales l, ciudades c WHERE e.id_local=l.id_local AND l.id_ciudad=c.id_ciudad AND c.nombre_ciudad = '$busqueda' ORDER BY fecha ASC");
                    while ($valores = mysqli_fetch_array($query)) {
                      echo '
                                        <a href="product_page.php?page=product&id='.$valores[9].'"><img class="imgevento elevation-4" src="'.$valores[0].'" alt="'.$valores[1].'" width="600"></a>
                      ';
                    }
                  ?>
                </div>
              </div> 



              <div class="content">
                <div class="container-fluid">
                  <div class="row">

                    
                    <div class="App">
                      <div class="vertical-center">
                        <div class="main-title">
                        <h3>Eventos destacados</h3>
                        </div>
                        <?php
                          $query = $mysqli -> query ("SELECT * FROM eventos WHERE dest = 1 ORDER BY 'fecha' ASC");
                          while ($valores = mysqli_fetch_array($query)) {
                            echo '
                                              <a href="product_page.php?page=product&id='.$valores[9].'"><img class="imgevento elevation-4" src="'.$valores[0].'" alt="'.$valores[1].'" width="600"></a>
                            ';
                          }
                        ?>
                      </div>
                    </div> 
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
