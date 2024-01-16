<?php
session_start();

if (!isset($_SESSION['name'])) {
    echo "Error: Sesión no iniciada. Redirigiendo a login.php...";
    header("Location: index.php");
    exit();
}

$username = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGERACK</title>
</head>
<body>
    <h2>Bienvenido, <?php echo $username; ?>!</h2>
    <a href="logout.php">Cerrar sesión</a>
</body>
</html>
