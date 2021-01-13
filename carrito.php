<?php
require_once("control/controlSession.php");
include 'config/config.php';
$myusername = $_SESSION["user_signin"];

    $id = $_POST['product'];
    $cantidad = 0;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // username and password sent from form 
        $consulta = mysqli_query($con, "INSERT INTO `carrito_$myusername` evento_id VALUES ('',$id,'$cantidad')");
        if (!$consulta) {
          echo "Error Consulta";
        } else {
          header("Location: /carrito.php");
        }
      }

  


//realizamos la conexión
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="dist/css/form-control.css">
  <link rel="stylesheet" href="dist/css/bootstrap.css">
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
    <a class="navbar-brand mx-auto" href="index.php"><img src="dist/img/logo.png" width="100" class="d-inline-block align-top" alt=""></a></a>
  </nav>
</header>

<body class="transicion">
    <br>
    <br>
    <br>
    <br>
    <br>
<div class="container">
    <h1>Carrito de compras</h1>
    <table class="table table-hover table-light">
  <thead>
    <tr>
      <th>Nombre</th>
      <th>Cantidad</th>
      <th>Precio</th>
      <th>Borrar</th>
      <th>Actualizar</th>
    </tr>
  </thead>
  <tbody>
      <?php
        $query = $mysqli->query("SELECT c.evento_id, c.cantidad, e.nombre, e.precio_entrada FROM `carrito_$myusername` c, eventos e WHERE c.evento_id = e.id_evento");
        while ($valores = mysqli_fetch_array($query)) {
        echo '
        <tr>
            <td>' . $valores[2] . '</td>
            <td>
            
            <input type="number" class="form-control text-center" value="' . $valores[1] . '"
            
            </td>
            <td>' . $valores[3] . '</td>
            <td>
            
            <form action="borrar_producto_carrito.php" method="post">
            <button type="submit" class="btn btn-danger " name="btnBorrar" value="' . $valores[0] . '">
            <span class="icon text-white-50">
                <i class="fas fa-trash"></i>
                </span>
            </button>
            </form>
            
            </td>
        </tr>
        ';
        }
      ?>
  </tbody>
</table>
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