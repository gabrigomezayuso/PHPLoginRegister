<?php
require_once("control/controlSessionAdmin.php");
include 'config/config.php';
$myusername = $_SESSION["user_signin"];
$borrar_id = $_POST["borrar"];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo $borrar_id;

  // username and password sent from form 
  $consulta = mysqli_query($con, "DELETE FROM `eventos` WHERE id_evento = '$borrar_id' ");
  if (!$consulta) {
    echo "Error Consulta";
  } else {
    header("Location: /eventos.php");
    die();
  }
}
?>