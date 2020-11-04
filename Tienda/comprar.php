<?php
require_once("control/controlSession.php");
$myusername=$_SESSION["user_signin"];
$servidor="localhost";
$usuario="root";
$contraseña="usbw";
$bd="tienda";

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
    <title>Comprar</title>
</head>


<header>
<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-info  fixed-top">
    <a class="navbar-brand" href="/welcome.php">
        <img src="/dist/img/logo.png" width="110" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
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
        <input type="button" value="<?php echo $myusername?>" onclick="window.location.href='/profile.php'" class="btn btn-outline-light" >
        </div>
      </div>
  </nav> -->

  <nav id="topNav" class="navbar fixed-top navbar-toggleable-sm navbar-inverse bg-inverse">
    <a class="navbar-brand mx-auto" href="welcome.php"><img src="https://i.imgur.com/BHfYfVP.png" width="100" class="d-inline-block align-top" alt=""></a></a>
  </nav>



</header>

<!-- <div class="jumbotron jumbotron-fluid height100p banner" id="home">
  <div class="container h100">
    <div class="contentBox h100">
      <div>
        <img src="https://i.imgur.com/BHfYfVP.png" alt="clickfy" width="300">
      </div>
    </div>
  </div>
</div>


 -->

<body class="transicion">
  <div class="hide-scroll">
      <div class="viewport">
          ...


  <div class="sec1">

    <br>
    <br>
        <div class="container h-100">
          <div class="d-flex justify-content-center h-100">
            <div class="searchbar">
              <input class="search_input" type="text" name="" placeholder="Ciudad">
              <a href="#" class="search_icon"><i class="fas fa-search"></i></a>
            </div>
          </div>
        </div>

        <br>
        <br>
        <hr class="style1">
        <h3>Eventos destacados</h3>
        <hr class="style1">


        <div class="content">
          <div class="container-fluid">
            <div class="row">
              <?php
                  $consulta = "SELECT * FROM eventos";
                  $ejecutarConsulta = mysqli_query($con, $consulta);
                  $verFilas = mysqli_num_rows($ejecutarConsulta);
                  $fila = mysqli_fetch_array($ejecutarConsulta);

                  if(!$ejecutarConsulta){
                      echo"Error en la consulta";
                  }else{
                      if($verFilas<1){
                          echo"Sin registros";
                      }else{
                        echo'
                        ';
                          for($i=0; $i<=$fila; $i++){
                              echo'
                                <div class="App">
                                  <div class="vertical-center">
                                    <a href="product_page.php?page=product&id='.$fila[7].'"><img class="imgevento elevation-4" src="'.$fila[0].'" alt="'.$fila[1].'" width="600"></a>

                                    </div>
                                </div> 
                              <br>
                              ';
                              $fila = mysqli_fetch_array($ejecutarConsulta);

                          }
                          echo'
                          </div>
                          ';

                      }
                  }


              ?>
                    <br>
        </div>
      </div>
  </div>


  </div>
  </div>
  <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="http://dejavugroup.es">DéjàVú</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 1.0
      </div>
  </footer>

</body>
</html>
