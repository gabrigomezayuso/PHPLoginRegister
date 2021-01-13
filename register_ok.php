<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
	<link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/157462/isolated/preview/88fbf3285773faa1142cbc625b810f40-mobile-online-shopping-icon-by-vexels.png"/>
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
								$sexo=$_POST["sex"];
								$mail=$_POST["mail"];
								$username=$_POST["username"];
								$mobilenumber=$_POST["mobilenumber"];
								$password=$_POST["password"];


								include 'config/config.php';

								$con = mysqli_connect($servidor, $usuario, $contraseña, $bdd);
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

											
							if($_SERVER["REQUEST_METHOD"] == "POST") {
							// username and password sent from form 
							
							
							$sql = "SELECT mail, username FROM usuarios WHERE mail = '$mail' or username = '$username'";
							$result = mysqli_query($con,$sql);
							$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
							$count = mysqli_num_rows($result);
							


							// If result matched $myusername and $mypassword, table row must be 1 row
											if($count == 1) { 
												echo  "El correo o nombre de usuario ya está registrado.";
											
												}
												
												else {
												$consulta=mysqli_query($con,"insert into usuarios values 
												('$firstname','$lastname', '$sexo','$mail','$username','$mobilenumber','$password',1,'https://icon-library.com/images/default-profile-icon/default-profile-icon-16.jpg','');
												");
												$sql2 ="CREATE TABLE `carrito_$username` (`order_id` int(11) NOT NULL,`evento_id` int(11) NOT NULL,`cantidad` int(11) NOT NULL) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;";
												$result = mysqli_query($con,$sql2);
												$sql3 ="ALTER TABLE `carrito_$username`ADD PRIMARY KEY (`order_id`), ADD KEY `id_producto` (`evento_id`);";
												$result = mysqli_query($con,$sql3);
												$sql4 ="ALTER TABLE `carrito_$username`ADD CONSTRAINT `id_producto` FOREIGN KEY (`evento_id`) REFERENCES `eventos` (`id_evento`);COMMIT;";
												$result = mysqli_query($con,$sql4);
												if(!$consulta)
												{
													echo"El nombre de usuario ya existe, escoja otro";
													
												}
												else
												{
													header("Location: /index.php");
								
												}
											}
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

