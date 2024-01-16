<?php
//llamar base de datos
require_once '../services/db.php';

// Consulta SQL para obtener los empleados y sus correos
$sql = "SELECT name, stock FROM herramientas";
$result = $conn->query($sql);

// Cerrar la conexión a la base de datos
$conn->close();

// Retornar el resultado para ser utilizado en el archivo de diseño
return $result;
?>

?>