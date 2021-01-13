<?php
require_once("control/controlSession.php");
include 'config/config.php';
$myusername = $_SESSION["user_signin"];
$borrar_id = $_POST["btnBorrar"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // username and password sent from form 
  $consulta = mysqli_query($con, "DELETE FROM `carrito_$myusername` WHERE evento_id = '$borrar_id' ");
  if (!$consulta) {
    echo "Error Consulta";
  } else {
    header("Location: /carrito.php");
    die();
  }
}


?>