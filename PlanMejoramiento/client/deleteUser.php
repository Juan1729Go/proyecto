<!-- client/deleteUser.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGERACK</title>

    <link rel="stylesheet" type="text/css" href="style/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,400;1,300&family=Poppins:wght@100;200;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
<div class="boxlog">
    <div id="contenedor" class="contenedor">
        <h1 class="title">Delete User</h1>
    
        <?php
        session_start();
        // Verificar si el usuario está autenticado
        if (!isset($_SESSION['name'])) {
            header("Location: index.php"); // Redirigir si no está autenticado
            exit();
        }
        ?>
    
        <p>¿Estás seguro de que deseas eliminar tu cuenta?</p>
    </div>
    <div class="sub-buton" id="sub-buton">
        <form action="../services/deleteUser.php" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar tu cuenta? Esta acción no se puede deshacer.');">
            <input class="sumitButton" type="submit" value="Sí, eliminar cuenta">
        </form>

        <a href="index.php">
            <input class="sumitButton" type="button" value="Cancelar">
        </a>
    
    </div>
</div>
</body>
</html>
