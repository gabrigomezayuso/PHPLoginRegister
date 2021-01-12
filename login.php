<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/157462/isolated/preview/88fbf3285773faa1142cbc625b810f40-mobile-online-shopping-icon-by-vexels.png"/>
    <title>Iniciar Sesión</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>



<body>

<?php
session_start();
include 'config/config.php';


?>

    <!-- Login form -->
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="" method="post">
                    <h3>Iniciar sesión</h3>
                    <div class="form-group">
                        <label>Nombre de usuario</label>
                        <input type="text" class="form-control" name="user_signin" id="user_signin" />
                    </div>

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="password_signin" id="password_signin" />
                        <?php
                                
                                if($_SERVER["REQUEST_METHOD"] == "POST") {
                                // username and password sent from form 
                                
                                $myusername = mysqli_real_escape_string($con,$_POST['user_signin']);
                                $mypassword = mysqli_real_escape_string($con,$_POST['password_signin']); 
                                $rol = 1;

                                $sql = "SELECT username , password , rol_id FROM usuarios WHERE username = '$myusername' and password = '$mypassword'";
                                $result = mysqli_query($con,$sql);
                                $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
                                $count = mysqli_num_rows($result);
                                

                                // If result matched $myusername and $mypassword, table row must be 1 row
                                  ?>
                                  <div class="invalid">
                                        <?php
                                                if($count == 1) { 

                                                    if($row['rol_id']==2){
                                                        $_SESSION["user_signin"]=$myusername;
                                                        $_SESSION["rol"]=2;
                                                                    


                                                        header("Location: /admin.php");
                                                        die();  
                                                    }
                                                    
                                                    if($row['rol_id']==1){
                                                        $_SESSION["user_signin"]=$myusername;
                                                        $_SESSION["rol"]=1;

                                                        header("Location: /index.php");
                                                        die();  
                                                    }

                                                    
                                                    // echo '<a href="menu_profesor.php">Acceder al menu</a>'; 
                                                    
                                                }

                                                
                                                else {
                                                    echo  "Tu nombre de usuario o contraseña son invalidos";
                                                }
                                            }
                                                
                                        ?>
                                  </div>  
                                
                    

                    <button type="submit" name="login" id="sign_in" class="btn btn-outline-info btn-lg btn-block">Iniciar sesión</button>
                    <br>
                </form>
                <input type="button" value="Registrar" onclick="window.location.href='/register.php'" class="btn btn-outline-info btn-lg btn-block" >
            </div>
        </div>
    </div>

</body>

</html>