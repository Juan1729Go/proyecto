<?php
session_start();
require_once '../services/db.php';

// Verificar si el usuario está autenticado
if (!isset($_SESSION['name'])) {
    header("Location: ../client/index.php"); // Redirigir si no está autenticado
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Actualizar los datos del usuario en la base de datos
    $stmt = $conn->prepare("UPDATE empleados SET name = ?, lastName = ?, email = ?, phone = ?, address = ? WHERE name = ?");
    $stmt->bind_param("ssssss", $name, $lastName, $email, $phone, $address, $_SESSION['name']);
    
    if ($stmt->execute()) {
        // Actualizar las variables de sesión con los nuevos datos
        $_SESSION['name'] = $name;
        $_SESSION['lastName'] = $lastName;
        $_SESSION['email'] = $email;
        $_SESSION['phone'] = $phone;
        $_SESSION['address'] = $address;

        // Establecer un mensaje de éxito en la variable de sesión
        $_SESSION['mensaje'] = "Usuario actualizado exitosamente.";

        header("Location: updateUser.php?success=true");
        exit();
    } else {
        $error = "Error al actualizar el usuario: " . $stmt->error;
    }

    $stmt->close();
}

// Obtener los datos del usuario para mostrar en el formulario
$name = $_SESSION['name'];
$lastName = $_SESSION['lastName'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGERACK</title>

    <link rel="stylesheet" href="../client/style/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,400;1,300&family=Poppins:wght@100;200;400;500;700&display=swap" rel="stylesheet">

    
</head>
<body>

<div class="boxlog">
    <div class="contenedor">
        <?php
        // Mostrar mensaje de éxito o error si está presente en la variable de sesión
        if (isset($_SESSION['mensaje'])) {
            echo '<h1>' . $_SESSION['mensaje'] . '</h1>';
            unset($_SESSION['mensaje']); // Limpiar la variable de sesión después de mostrar el mensaje
        } elseif (isset($error)) {
            echo '<h1 style="color: red;">' . $error . '<h1/>';
        }
        ?>
    </div>
    <br>
    <div class="sub-buton">
        <a href="../client/home.php">
            <input class="sumitButton" type="button" value="Home">
        </a>
    </div>
</div>


</body>
</html>
