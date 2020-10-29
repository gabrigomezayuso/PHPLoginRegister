<?php
require_once("control/controlSessionAdmin.php");
$myusername=$_SESSION["user_signin"];
$tipoUsuario=$_SESSION["rol"];
?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/157462/isolated/preview/88fbf3285773faa1142cbc625b810f40-mobile-online-shopping-icon-by-vexels.png"/>
    <title>Registrar evento</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

<br>
<br>
    <div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <form action="crear_evento_ok.php" method="post">
                    <h3>Crear evento</h3>
                    <div class="form-group">
                        <label>Banner (1378x768)</label>
                        <input type="text" class="form-control"  placeholder="Introduzca la ruta de la fotografia" name="fotoEvento" id="fotoEvento" required >
                    </div>

                    <div class="form-group">
                        <label>Nombre del evento</label>
                        <input type="text" class="form-control" name="nombreEvento" id="nombreEvento" required maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Fecha</label>
                        <br>
                        <input type="date" class="form-control"  id="fechaEvento" name="fechaEvento" required >
                    </div>

                    <div class="form-group">
                        <label>Edad del evento</label>
                        <input type="number" class="form-control" name="edadEvento" id="edadEvento" required maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Precio</label>
                        <input type="number" class="form-control" name="precioEvento" id="precioEvento" required maxlength="30" />
                    </div>

                    <div class="form-group">
                        <label>Artista</label>
                        <input type="text" class="form-control" name="artistaEvento" id="artistaEvento" required/>
                    </div>

                    <div class="form-group">
                        <label for="animacionEvento">Animación :</label>
                            <select id="animacionEvento"  class="form-control" name="animacionEvento" required>
                                <option value="vacaPantera">Vaca/Pantera</option>
                                <option value="tematico">Animadores temáticos</option>
                                <option value="bailarinas">Bailarinas</option>
                            </select>                    
                    </div>

                    <button type="submit" name="submit" id="submit" class="btn btn-outline-dark btn-lg btn-block">Registrar evento</button>
                </form>

            </div>
            <br>
            <br>
        </div>

    </div>

    


</body>

</html>