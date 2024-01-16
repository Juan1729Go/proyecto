<?php
// services/deleteUser.php
session_start();
require_once 'db.php';

// Verificar si el usuario está autenticado
if (!isset($_SESSION['name'])) {
    header("Location: ../client/index.php"); // Redirigir si no está autenticado
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Eliminar el usuario de la base de datos
    $stmt = $conn->prepare("DELETE FROM empleados WHERE name = ?");
    $stmt->bind_param("s", $_SESSION['name']);

    if ($stmt->execute()) {
        // Cerrar la sesión y redirigir a la página de inicio
        session_destroy();
        header("Location: ../client/index.php?account_deleted=true");
        exit();
    } else {
        $error = "Error al eliminar la cuenta: " . $stmt->error;
    }

    $stmt->close();
}
?>
