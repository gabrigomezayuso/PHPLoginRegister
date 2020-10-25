<?php
require_once("controlSession.php");
session_start();
$myusername=$_SESSION["user_signin"];
$servidor="localhost";
$usuario="root";
$contraseña="usbw";
$bd="test";

//realizamos la conexión
$con=mysqli_connect($servidor,$usuario,$contraseña,$bd);
?>
<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styleList.css">
    <title>Listas</title>
    <!-- jQuery + Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="App">
        <div class="vertical-center">
            <div class="inner-block">
                <div class="table">
                        <table>
                            <tr>
                                <th>Nombre RRPP</th>
                                <th>Nombre Cliente</th>
                                <th>Acompañantes</th>
                                <th>Fecha</th>
                            </tr>
                                    <?php
                                        $consulta = "SELECT * FROM listas";
                                        $ejecutarConsulta = mysqli_query($con, $consulta);
                                        $verFilas = mysqli_num_rows($ejecutarConsulta);
                                        $fila = mysqli_fetch_array($ejecutarConsulta);

                                        if(!$ejecutarConsulta){
                                            echo"Error en la consulta";
                                        }else{
                                            if($verFilas<1){
                                                echo"<tr><td>Sin registros</td></tr>";
                                            }else{
                                                for($i=0; $i<=$fila; $i++){
                                                    echo'
                                                        <tr>
                                                            <td>'.$fila[0].'</td>
                                                            <td>'.$fila[1].'</td>
                                                            <td>'.$fila[2].'</td>
                                                            <td>'.$fila[3].'</td>
                                                        </tr>
                                                    ';
                                                    $fila = mysqli_fetch_array($ejecutarConsulta);

                                                }

                                            }
                                        }


                                    ?>
                        </table>
                </div>
            </div>
        </div>
</div>