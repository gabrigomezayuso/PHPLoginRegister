<?php
require_once("control/controlSession.php");
include 'config/config.php';
$myusername = $_SESSION["user_signin"];

if (isset($_GET['busqueda'])) {
  $busqueda = $_GET['busqueda'];
} else {
  // Simple error to display if the id wasn't specified
 $busqueda=0;
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
    <link rel="stylesheet" href="dist/css/profile.css">


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
  <button onclick="window.location.href=''" class="form-inline fas fa-user bottom-icon-disabled"></button>
    <a class="navbar-brand mx-auto" href="index.php"><img src="https://i.imgur.com/BHfYfVP.png" width="100" class="d-inline-block align-top" alt=""></a></a>
    <button onclick="window.location.href='/logout.php'" class="form-inline fas fa-sign-out-alt bottom-icon">Log Out</button>
  </nav>
</header>





<body class="transicion sec1">
  <div class="hide-scroll">
      <div class="viewport">
        <div>
          <div class="App">
            <div class="vertical-center">
              <?php
              
                $query = $mysqli -> query ("SELECT * FROM usuarios WHERE username = '$myusername'");
                while ($valores = mysqli_fetch_array($query)) {
                  echo ' 


                  <div class="page-content page-container" id="page-content">
                  <div class="padding">
                      <div class="container justify-content-center">
                              <div class="card user-card-full">
                                  <div class="row m-l-0 m-r-0">
                                      <div class="col-sm-4 bg-c-lite-green user-profile">
                                          <div class="card-block text-center text-white">
                                              <div class="m-b-25"> <img class="imgRond" src="'.$valores[8].'" width="80px"> </div>
                                              <h6 class="f-w-600">'.$valores[0].' '.$valores[1].'</h6>
                                              <p>@'.$valores[4].'</p> <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                          </div>
                                      </div>
                                      <div class="col-sm-8">
                                          <div class="card-block">
                                              <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Información</h6>
                                              <div class="row">
                                                  <div class="col-sm-6">
                                                      <p class="m-b-10 f-w-600">Email</p>
                                                      <h6 class="text-muted f-w-400">'.$valores[3].'</h6>
                                                  </div>
                                                  <div class="col-sm-6">
                                                      <p class="m-b-10 f-w-600">Móvil</p>
                                                      <h6 class="text-muted f-w-400">'.$valores[5].'</h6>
                                                  </div>
                                              </div>
                                              <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Acciones</h6>
                                              <div class="row">
                                                  <div class="col-sm-6">
                                                  <form action="editprofile.php" method="post">
                                                    <button type="submit" class="btn btn-success" name="product" value="' . $valores[9] . '">
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-sync">Editar perfil</i>
                                                        </span>
                                                    </button>
                                                  </form>
                                                  <button onclick="window.location.href="editprofile.php" type="button" class="btn btn-info">
                                                    <span>Editar perfil</span>
                                                  </button>
                                                  </div>
                                                  <div class="col-sm-6">
                                                  <br>
                                                  </div>
                                                  
                                              </div>
                                              <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                  <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                  <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                  <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  ';
                }
              ?>
            </div>
          </div>
        </div>
      </div>



      <nav id="topNav" class="navbar fixed-bottom navbar-toggleable-sm navbar-inverse bg-inverse">
    <button onclick="window.location.href=''" class="form-inline butIzq fas fa-home bottom-icon-actived"></button>
    <button onclick="window.location.href='/search.php'" class="form-inline butIzq fas fa-search bottom-icon"></button>
    <a class="navbar-brand mx-auto" href="index.php"><img src="https://i.imgur.com/BHfYfVP.png" width="100" class="d-inline-block align-top" alt=""></a></a>
    <button onclick="window.location.href='/carrito.php'" class="form-inline butDer fas fa-shopping-cart bottom-icon"></button>
    <button onclick="window.location.href='/profile.php'" class="form-inline butDer fas fa-user bottom-icon"></button>
  </nav>


</body>
</html>
