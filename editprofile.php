<?php
require_once("control/controlSession.php");
include 'config/config.php';
$myusername = $_SESSION["user_signin"];
?>
<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/style.css">
  <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/157462/isolated/preview/88fbf3285773faa1142cbc625b810f40-mobile-online-shopping-icon-by-vexels.png" />
  <title>Editar</title>
  <!-- jQuery + Bootstrap JS -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>



<body>




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
                <!-- <input type="file" name="avatar" id="inputGroupFile01"> -->
                <input type="text" placeholder="URL" name="foto" class="form-control">
            </div>

          </div>
          <div class="form-group">
            <label>Nombre</label>
            <input type="text" class="form-control" name="firstname" id="firstName" maxlength="30" />
          </div>

          <div class="form-group">
            <label>Apellido</label>
            <input type="text" class="form-control" name="lastname" id="lastName" maxlength="30" />
          </div>

          <div class="form-group">
            <label>Mail</label>
            <input type="email" class="form-control" name="mail" id="mail" maxlength="30" />
          </div>

          <div class="form-group">
            <label>Nombre de usuario</label>
            <input type="text" class="form-control" placeholder="<?php echo "$myusername" ?>" name="username" id="username" disabled maxlength="30" value="<?php echo "$myusername" ?>" />
          </div>

          <div class="form-group">
            <label>Contraseña</label>
            <input type="password" class="form-control" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Debe contener al menos un número y una letra mayúscula y minúscula, y un máximo de 30" maxlength="30" />
          </div>
          <button type="submit" name="submit" id="submit" class="btn btn-outline-info btn-lg btn-block">Editar perfil</button>
        </form>

        <?php
        if (isset($_POST['submit'])) {
          $firstname = $_POST["firstname"];
          $lastname = $_POST["lastname"];
          $mail = $_POST["mail"];
          $username = $myusername;
          $password = $_POST["password"];
          $foto = $_POST["foto"];
     
         

          $sql = mysqli_query($con, "UPDATE usuarios SET first_name = '$firstname', last_name ='$lastname',  mail = '$mail', username = '$username', password = '$password', rol_id = '1', foto_perfil = '$foto' WHERE username = '$myusername'");

          if ($sql) {
            echo "<script type='text/javascript'>window.location='profile.php?id=$id';</script>";
          }
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