<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
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
					$firstname=$_POST["firstname"];
					$lastname=$_POST["lastname"];
					$mail=$_POST["mail"];
					$username=$_POST["username"];
					$mobilenumber=$_POST["mobilenumber"];
					$password=$_POST["password"];


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

				$consulta=mysqli_query($con,"insert into usuarios values 
				('$firstname','$lastname','$mail','$username','$mobilenumber','$password')");

				if(!$consulta)
				{
					die("Error en la consulta");
				}
				else
				{
					header("Location: /index.php");

				}




		?>
            </div>
        </div>
    </div>

</body>

</html>