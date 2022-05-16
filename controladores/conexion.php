<?php
$host = "localhost";
$database ="photo_stock";
$user ="root";
$pass ="";
$conexion  = new mysqli($host, $user, $pass, $database);

if ($conexion ->connect_error){
    die ("Base de datos no encontrada, créela o active el servidor");
}
?>