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
<title>Bienvenido/a! <?php echo $myusername?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="dist/css/inicio.css">
    <link rel="stylesheet" href="css/styleProfile.css">
    <link rel="stylesheet" href="dist/css/form-control.css">
    <link rel="stylesheet" href="dist/css/adminlte.css">
    <script src="https://kit.fontawesome.com/90704118d5.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/157462/isolated/preview/88fbf3285773faa1142cbc625b810f40-mobile-online-shopping-icon-by-vexels.png"/>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>

<header>
  <nav id="topNav" class="navbar fixed-top navbar-toggleable-sm navbar-inverse bg-inverse">
    <a class="navbar-brand mx-auto" href="index.php"><img src="https://i.imgur.com/BHfYfVP.png" width="100" class="d-inline-block align-top" alt=""></a></a>
  </nav>
</header>

<body class="transicion">

    <div class="sec1">
      
    <br>
    <br>

    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <h3>Editar perfil</h3>
                <img class="fotoperfil" src="https://icon-library.com/images/default-profile-icon/default-profile-icon-16.jpg" alt="foto perfil" width="100"></a>
                <br>
                <form action="" method="post">
                    <div class="form-group">
                    <label>Editar foto</label>

                    <div class="input-group">
                      <div class="custom-file">
                        <!-- <input type="file" name="avatar" id="inputGroupFile01"> -->
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                      </div>
                    </div>

                    </div>
                    <div class="form-group">
                        <label>Nombre</label>
                        <input type="text" class="form-control" name="firstname" id="firstName"  maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Apellido</label>
                        <input type="text" class="form-control" name="lastname" id="lastName"  maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Mail</label>
                        <input type="email" class="form-control" name="mail" id="mail"  maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Nombre de usuario</label>
                        <input type="text" class="form-control" placeholder="<?php echo "$myusername"?>" name="username" id="username" disabled maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Telefono</label>
                        <input type="number" class="form-control" name="mobilenumber" id="mobilenumber" disabled  maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
                        title="Debe contener al menos un número y una letra mayúscula y minúscula, y un máximo de 30"  maxlength="30" />
                    </div>
                    <button type="submit" name="submit" id="submit" class="btn btn-outline-info btn-lg btn-block">Editar perfil</button>
                </form>

                <?php
          if(isset($_POST['actualizar']))
          {
            $firstname=$_POST["firstname"];
            $lastname=$_POST["lastname"];
            $mail=$_POST["mail"];
            $username=$_POST["username"];
            $mobilenumber=$_POST["mobilenumber"];
            $password=$_POST["password"];


            $type = 'jpg';
            $rfoto = $_FILES['avatar']['tmp_name'];
            $name = $id.'.'.$type;

            if(is_uploaded_file($rfoto))
            {
              $destino = 'dist/img/'.$name;
              $nombrea = $name;
              copy($rfoto, $destino);
            }
            else
            {
              $nombrea = $use['avatar'];
            }

            $sql = mysql_query("UPDATE usuarios SET
            first_name = '$firstname', last_name ='$lastname', 
            mail = '$mail', username = '$username',
            phone = '$mobilenumber', password = '$password',
            rol_id = '2', foto_perfil = '$destino' WHERE username = '$myusername'");

            if($sql) {echo "<script type='text/javascript'>window.location='profile.php?id=$id';</script>";}


          }
          ?>
                
            </div>
        </div>
        
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
  
    

    </div>


    <nav id="topNav" class="navbar fixed-bottom navbar-toggleable-sm navbar-inverse bg-inverse">
      <button onclick="window.location.href='/inicio.php'" class="form-inline butIzq fas fa-home bottom-icon"></button>
      <button onclick="window.location.href='/search.php'" class="form-inline butIzq fas fa-search bottom-icon"></button>
      <a class="navbar-brand mx-auto" href="index.php"><img src="https://i.imgur.com/BHfYfVP.png" width="100" class="d-inline-block align-top" alt=""></a></a>
      <button onclick="window.location.href='/entradas.php'" class="form-inline butDer fas fa-ticket-alt bottom-icon"></button>
      <button onclick="window.location.href=''" class="form-inline butDer fas fa-user bottom-icon-actived"></button>
      </form>
      </nav>
    <footer class="main-footer">
        <strong>Copyright &copy; 2020 <a href="http://dejavugroup.es">DéjàVú</a>.</strong>
        All rights reserved.
        <div class="float-right d-none d-sm-inline-block">
          <b>Version</b> 1.0
        </div>
    </footer>

</body>

</html>

