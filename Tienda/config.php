<?php
                    //Parámetros de conexión
					//Parámetros de conexión
					$servidor="localhost";
					$usuario="root";
					$contraseña="usbw";
					$bdd="tienda";


    //realizamos la conexión
    $con=mysqli_connect($servidor,$usuario,$contraseña,$bdd);
    if(!$con)
    {
        die("Con se ha podido realizar la conexión: ". mysqli_connect_error() . "<br>");
    }
    else
    {
        mysqli_set_charset($con,"utf8");
        //echo "Felicidades lerdo! te has conectado a la BD <br>";
        $_SESSION["con"]=$con;

    }

    $mysqli = new mysqli('localhost', 'root', 'usbw', 'tienda');
    //$mysqli = new mysqli('localhost', 'root', 'usbw', 'midnight');

?>