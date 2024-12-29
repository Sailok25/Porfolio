<?php
$host = 'sql7.freemysqlhosting.net';
$usuario = 'sql7754339';
$contrasenya = 'PJSRZPnx31'; 
$nombre_bd = 'sql7754339';
$port = 3306;

$conn = new mysqli($host, $usuario, $contrasenya, $nombre_bd, $port);
$conn->set_charset("utf8");
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>

