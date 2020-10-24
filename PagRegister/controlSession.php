<?php
session_start();
header("Cache-control: private");
header("Cache-control: no-cache, must-revalidate");
header("Pragma: no-cache");
if(!isset($_SESSION["user_signin"]) !="") {
header('Location: index.php');
}
?>