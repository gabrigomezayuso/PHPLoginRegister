<?php
    require_once("control/controlSession.php");
    $myusername=$_SESSION["user_signin"];
    $servidor="localhost";
    $usuario="root";
    $contraseña="usbw";
    $bd="tienda";
    $con=mysqli_connect($servidor,$usuario,$contraseña,$bd);


    // Check to make sure the id parameter is specified in the URL
    if (isset($_GET['asistentes'])) {
        $asistentes = $_GET['asistentes'];
    }if (isset($_GET['product'])) {
        $product = $_GET['product'];
    } else {
        // Simple error to display if the id wasn't specified
        die ('Lo siento, no esta disponible');
    }

    $consulta = "SELECT id, username FROM usuarios  WHERE username = '$myusername';";
    $ejecutarConsulta = mysqli_query($con, $consulta);
    $verFilas = mysqli_num_rows($ejecutarConsulta);
    $fila = mysqli_fetch_array($ejecutarConsulta);

    if(!$ejecutarConsulta){
    }else{
        if($verFilas<1){
        }else{
        echo'
        ';
            for($i=0; $i<=1; $i++){
            $id=$fila[0];
            }
        }
        }


												$consulta=mysqli_query($con,"INSERT INTO entrada  VALUES ( '$product', '$id','1')");
								
												if(!$consulta)
												{
													echo"Error";
													
												}
												else
												{
													header("Location: /index.php");
								
												}

?>

<!doctype html>
<html lang="es">

<html>
    <head>
        <title>Testing QR code</title>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript">
            function generateBarCode()
            {
                var nric = $('#text').val();
                var url = 'https://api.qrserver.com/v1/create-qr-code/?data=' + nric + '&amp;size=50x50';
                $('#barcode').attr('src', url);
            }
        </script>
    </head>
    <body>

      <img id='barcode' 
            src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo 5;?>&amp;size=300x300" 
            alt="" 
            width="500" 
            height="500" />


    <nav id="topNav" class="navbar fixed-bottom navbar-toggleable-sm navbar-inverse bg-inverse">
    <button onclick="window.location.href=''" class="form-inline butIzq fas fa-home bottom-icon-actived"></button>
    <button onclick="window.location.href='/search.php'" class="form-inline butIzq fas fa-search bottom-icon"></button>
    <a class="navbar-brand mx-auto" href="index.php"><img src="https://i.imgur.com/BHfYfVP.png" width="100" class="d-inline-block align-top" alt=""></a></a>
    <button onclick="window.location.href='/entradas.php'" class="form-inline butDer fas fa-ticket-alt bottom-icon"></button>
    <button onclick="window.location.href='/profile.php'" class="form-inline butDer fas fa-user bottom-icon"></button>
    </nav>

</body>
</html>
