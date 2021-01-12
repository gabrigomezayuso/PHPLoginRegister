<?php
    require_once("control/controlSession.php");
    $myusername=$_SESSION["user_signin"];
include 'config.php';



    // // Check to make sure the id parameter is specified in the URL
    //     $product=$_POST["product"];


    // $consulta = "SELECT e.id_usuario, e.id_entrada, e.id_evento , u.username FROM entrada e, usuarios u WHERE $myusername = u.username AND e.id_evento = $product";
    // $ejecutarConsulta = mysqli_query($con, $consulta);
    // $verFilas = mysqli_num_rows($ejecutarConsulta);
    // $fila = mysqli_fetch_array($ejecutarConsulta);

    // if(!$ejecutarConsulta){
    // }else{
    //     if($verFilas<1){
    //     }else{
    //     echo'
    //     ';
    //         for($i=0; $i<=1; $i++){
    //         $id=$fila[0];
    //         echo $id;
    //         }
    //     }
    //     }

    //     $consulta0 = "SELECT e.id_evento, e.id_local, l.id_local, l.nombre_local  FROM eventos e, locales l  WHERE  $product = e.id_evento and e.id_local = l.id_local ;";
    //     $ejecutarConsulta = mysqli_query($con, $consulta0);
    //     $verFilas = mysqli_num_rows($ejecutarConsulta);
    //     $fila = mysqli_fetch_array($ejecutarConsulta);
    
    //     if(!$ejecutarConsulta){
    //     }else{
    //         if($verFilas<1){
    //         }else{
    //         echo'
    //         ';
    //             for($i=0; $i<=1; $i++){
    //             $idLocal=$fila[1];
    //             }
    //         }
    //         }
                    

    //         $query = $mysqli -> query ("SELECT e.id_usuario, e.id_entrada, e.id_evento , u.username FROM entrada e, usuarios u WHERE $myusername = u.username AND e.id_evento = $product");
    //         while ($valores = mysqli_fetch_array($query)) {
    //           echo '
    //             <a href="product_page.php?page=product&id='.$valores[0].'"><img class="imgevento elevation-4" src="'.$valores[0].'" alt="'.$valores[1].'" width="600"></a>
    //           ';
    //         }                                                




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
            src="https://api.qrserver.com/v1/create-qr-code/?data=<?php echo '1232312312';?>&amp;size=300x300" 
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
