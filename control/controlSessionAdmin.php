<?php
session_start();
header("Cache-control: private");
header("Cache-control: no-cache, must-revalidate");
header("Pragma: no-cache");
if(!isset($_SESSION["user_signin"]) !="") {
header('Location: index.php');
}

if($_SESSION["rol"]!=2){
    header('Location: welcome.php');
    }
?>
