<?php
$host = '127.0.0.1';
$usuario = 'root';
$contrasenya = ''; 
$nombre_bd = 'porfolio';
$port = 3308;

$conn = new mysqli($host, $usuario, $contrasenya, $nombre_bd, $port);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>