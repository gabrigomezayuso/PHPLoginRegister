<?php
require_once("control/controlSessionAdmin.php");
$myusername=$_SESSION["user_signin"];
$tipoUsuario=$_SESSION["rol"];
?>

<!doctype html>
<html lang="es">

<head>
    <title>Bienvenido/a! <?php echo $myusername?></title>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/157462/isolated/preview/88fbf3285773faa1142cbc625b810f40-mobile-online-shopping-icon-by-vexels.png"/>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>



<body>

    <!-- Login form -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <input type="button" value="Crear Evento" onclick="window.location.href='/crear_evento.php'" class="btn btn-outline-dark btn-lg btn-block" >
                <br>
                <input type="button" value="Modificar" onclick="window.location.href='/register.php'" class="btn btn-outline-dark btn-lg btn-block" >
                <br>
                <input type="button" value="Consultar" onclick="window.location.href='/consultaEventos.php'" class="btn btn-outline-dark btn-lg btn-block" >
            </div>
        </div>
    </div>

</body>

</html>