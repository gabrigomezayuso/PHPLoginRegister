<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Iniciar Sesión</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

<?php
session_start();

					//Parámetros de conexión
					$servidor="localhost";
					$usuario="root";
					$contraseña="usbw";
					$bdd="test";


				//realizamos la conexión
				$con=mysqli_connect($servidor,$usuario,$contraseña,$bdd);
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


?>

    <!-- Login form -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h3>Iniciar sesión</h3>
                    <div class="form-group">
                        <label>Nombre de usuario</label>
                        <input type="email" class="form-control" name="email_signin" id="email_signin" />
                    </div>

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="password_signin" id="password_signin" />
                        <?php
                                
                                if($_SERVER["REQUEST_METHOD"] == "POST") {
                                // username and password sent from form 
                                
                                $myusername = mysqli_real_escape_string($con,$_POST['email_signin']);
                                $mypassword = mysqli_real_escape_string($con,$_POST['password_signin']); 
                                
                                $sql = "SELECT email FROM usuarios WHERE email = '$myusername' and password = '$mypassword'";
                                $result = mysqli_query($con,$sql);
                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                $count = mysqli_num_rows($result);
                                
                                // If result matched $myusername and $mypassword, table row must be 1 row
                                    
                                if($count == 1) { 
                                    $_SESSION["email_signin"]=$myusername;
                                    
                                    header("Location: /menu_profesor.php");
                                    die();  
                                    
                                    // echo '<a href="menu_profesor.php">Acceder al menu</a>'; 
                                    
                                    }else {
                                    echo  "<td align=centre>Tu nombre de usuario o contraseña son invalidos</td>";
                                }
                                }
                        ?>
                    </div>

                    <button type="submit" name="login" id="sign_in"
                        class="btn btn-outline-dark btn-lg btn-block">Iniciar sesión</button>
                        </form>
                    <br>
                <form action="/register.php" method="post">
                    <button type="submit" name="login" id="sign_up" class="btn btn-outline-dark btn-lg btn-block">Registrar</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>