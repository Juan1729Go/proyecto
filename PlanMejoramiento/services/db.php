<?php
// Configuración de la conexión a la base de datos
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'proyecto';

// Conexión a la base de datos
$conn = new mysqli($host, $user, $pass, $db);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

$conn->set_charset("utf8");
?>