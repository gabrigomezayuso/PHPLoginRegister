<?php
require_once("control/controlSession.php");
include 'config/config.php';
$myusername = $_SESSION["user_signin"];
$precioT=0;
// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//   $id = $_POST['product'];
// }
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

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
  <script src="https://kit.fontawesome.com/90704118d5.js" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script> 
<script type="text/javascript"> 
	$('document').ready(function(){ 
		$('#myForm').ajaxForm( { 
			success: function() {  
			}  
		});  
	}); 
</script> 
  <title>Bienvenido/a! <?php echo $myusername ?></title>
</head>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $id = $_POST['product'];
    $cantidad = $_POST['cantidad'];
    $consulta = mysqli_query($con, "INSERT INTO `carrito_$myusername`  (`evento_id`, `cantidad`) VALUES ( $id,$cantidad)");

      if (!$consulta) {
        // $cantidad=$valores[1];
        // echo $cantidad;
        // $cantidad2=$cantidad+1;
        // $consulta = mysqli_query($con, "UPDATE `carrito_$myusername` SET `cantidad` = '$cantidad2' WHERE `carrito_$myusername` `order_id` = $id");        echo '
        // <script type="text/javascript">
        //   $(document).ready(function(){
        //       swal({
        //       position: "top-end",
        //       type: "error",
        //       title: "Este producto ya esta añadido",
        //       showConfirmButton: false,
        //     })
        //   });
        // </script>';
      } else {
        echo '
        <script type="text/javascript">
          $(document).ready(function(){
              swal({
              position: "top-end",
              type: "succes",
              title: "Añadido correctamente",
              showConfirmButton: false,
            })
          });
        </script>';
        header("Location: /carrito.php");
      }
    }
?>


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
      <th>Actualizar</th>
      <th>Borrar</th>
    </tr>
  </thead>

  <tbody>
      <?php
        $query = $mysqli->query("SELECT c.evento_id, c.cantidad, e.nombre, e.precio_entrada FROM `carrito_$myusername` c, eventos e WHERE c.evento_id = e.id_evento");
        while ($valores = mysqli_fetch_array($query)) {

        $precioT = $precioT + $valores[1] * $valores[3];
        echo '
        <tr>
            <td>
            ' . $valores[2] . '
            </td>


            <td>
            <form action="cantidad.php" method="POST" id="myForm">
            <input type="number" class="form-control text-center" value="' . $valores[1] . '"  min=0 name="cantidad2" id="cantidad2">
            </td>


            <td>
            <input type="sumbit" class="form-control text-center sumbit" value="' . $valores[3] . '" name="" id="" readonly>
            </td>


            <td>  
              <button type="submit" class="btn btn-success " name="btnAct" value="' . $valores[0] . '">
                <span class="icon text-white-50">
                    <i class="fas fa-sync"></i>
                </span>
              </button>
              </form>
            </td>


            <td>
            <form action="borrar_producto_carrito.php" method="post">
            <button type="submit" class="btn btn-danger " name="product" value="' . $valores[0] . '">
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
<strong>Precio total: <?php echo $precioT ?>
€
</strong>
</div>

<nav id="topNav" class="navbar fixed-bottom navbar-toggleable-sm navbar-inverse bg-inverse">

  <button onclick="window.location.href=''" class="form-inline butIzq fas fa-home bottom-icon-actived"></button>
  <button onclick="window.location.href='/search.php'" class="form-inline butIzq fas fa-search bottom-icon"></button>
  <a class="navbar-brand mx-auto" href="index.php"><img src="dist/img/logo.png" width="100" class="d-inline-block align-top" alt=""></a></a>
  <button onclick="window.location.href='/entradas.php'" class="form-inline butDer fas fa-ticket-alt bottom-icon"></button>
  <button onclick="window.location.href='/profile.php'" class="form-inline butDer fas fa-user bottom-icon"></button>
</nav>



</body>



</html>