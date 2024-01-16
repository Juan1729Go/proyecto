<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGERACK</title>
</head>
<body>
    <h2>Listado de Empleados y Correos</h2>

    <?php
    // Incluir la lógica desde el otro archivo
    $result = include '../services/consultWorker.php';

    // Verificar si hay resultados en la consulta
    if ($result->num_rows > 0) {
        // Mostrar los resultados en una tabla
        echo "<table border='1'>
                <tr>
                    <th>Nombre</th>
                    <th>Email</th>
                </tr>";

        // Recorrer los resultados y mostrar en la tabla
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>{$row['name']}</td>
                    <td>{$row['email']}</td>
                </tr>";
        }

        echo "</table>";
    } else {
        echo "No se encontraron empleados.";
    }
    
    ?>
    <div class="sub-buton">
            <a href="home.php">
                <input type="button" value="Home">
            </a>
    </div>
</body>
</html>
