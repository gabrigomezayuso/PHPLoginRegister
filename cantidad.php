<?php
require_once("control/controlSession.php");
include 'config/config.php';
$myusername = $_SESSION["user_signin"];

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = $_POST['btnAct'];
        $cantidad2 = $_POST['cantidad2'];
        echo $_POST['cantidad2'];
        $consulta = mysqli_query($con, "UPDATE `carrito_$myusername` SET `cantidad` = '$cantidad2' WHERE  `evento_id` = $id");

        if (!$consulta){
            echo 'error';
        }
        else{
            echo '....';

            echo $id;
            header("Location: /carrito.php");

        }
    }
?>