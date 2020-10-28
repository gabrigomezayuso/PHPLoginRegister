<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
	<link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/157462/isolated/preview/88fbf3285773faa1142cbc625b810f40-mobile-online-shopping-icon-by-vexels.png"/>
    <title>Registrar evento</title>
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
                                $foto=$_POST["fotoEvento"];
                                $nombre=$_POST["nombreEvento"];
                                $fecha=$_POST["fechaEvento"];
                                $edad=$_POST["edadEvento"];
                                $precio=$_POST["precioEvento"];
								$artista=$_POST["artistaEvento"];
								$animacion=$_POST["animacionEvento"];


								//Parámetros de conexión
								$servidor="localhost";
								$usuario="root";
								$contraseña="usbw";
								$bd="tienda";


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

                    $consulta=mysqli_query($con,"insert into eventos values 
                    ('$foto','$nombre','$fecha','$edad','$precio','$artista','$animacion')");

                    if(!$consulta)
                    {
                        echo "Error en la consulta";
                    }
                    else
                    {
                        header("Location: /admin.php");

                    }




                ?>
					<br>
					<br>
					<input type="button" value="Volver atràs" onclick="history.back()" class="btn btn-outline-dark btn-lg btn-block" >

            </div>
        </div>
    </div>

</body>

</html>

