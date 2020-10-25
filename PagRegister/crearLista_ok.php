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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="icon" type="image/png" href="dist\img\logo.png"/>
    <link rel="icon" type="image/png" href="dist\img\logo.png"/>
    <title>Registrar</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
<!-- sdfdsfsdsd -->
    <div class="App"> 
        <div class="vertical-center">
            <div class="inner-block">

                <?php

                    header("Content-Type: text/html;charset=utf-8");

                        //Parámetros que vienen del POST
                        $nombreCliente=$_POST["nombreCliente"];
                        $acomp=$_POST["acomp"];
                        $fecha=$_POST["fecha"];

                        //Parámetros de conexión
                        $servidor="localhost";
                        $usuario="root";
                        $contraseña="usbw";
                        $bd="test";


                    //realizamos la conexión
                    $con=mysqli_connect($servidor,$usuario,$contraseña,$bd);
                    if(!$con)
                    {
                        die("Con se ha podido realizar la conexión: ". mysqli_connect_error() . "<br>");
                    }
                    else
                    {
                        mysqli_set_charset($con,"utf8");
                        // echo "Felicidades lerdo! te has conectado a la BD <br>";
                        $_SESSION["con"]=$con;
                    }

                    $consulta=mysqli_query($con,"insert into listas values 
                    ('$myusername','$nombreCliente','$acomp','$fecha')");

                    if(!$consulta)
                    {
                        die("Error en la consulta");
                    }
                    else
                    {
                        header("Location: /welcome.php");

                    }




                ?>

            </div>
        </div>
    </div>

</body>

</html>