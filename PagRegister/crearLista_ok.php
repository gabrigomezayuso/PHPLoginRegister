<?php
require_once("controlSession.php");
session_start();
$myusername=$_SESSION["user_signin"];


header("Content-Type: text/html;charset=utf-8");

    //Parámetros que vienen del POST
    $nombreCliente=$_POST["nombreCliente"];
    $acomp=$_POST["mail"];
    $fecha=$_POST["fecha"];


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

$consulta=mysqli_query($con,"insert into listas values '$myusername','$nombreCliente','$acomp',$fecha'");

if(!$consulta)
{
    die("Error en la consulta");
}
else
{
    header("Location: /welcome.php");

}




?>