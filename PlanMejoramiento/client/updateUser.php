<?php
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['name'])) {
    header("Location: index.php"); // Redirigir si no está autenticado
    exit();
}

//acceder a las variable de sesion 
$name = $_SESSION['name'];
$lastName = $_SESSION['lastName'];
$email = $_SESSION['email'];
$phone = $_SESSION['phone'];
$address = $_SESSION['address'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGERACK</title>

    <link rel="stylesheet" href="style/updateUser.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,400;1,300&family=Poppins:wght@100;200;400;500;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="header">
        <div class="header-log">
            <img class="logo" src="./style/img/mini.png">
            <h2 class="welcome"><?php echo $name; ?></h2> 
        </div>
        <div class="header-nav">
            <ul>
                <li id="text-nav"><a src="home.php" href="#">PAGINA PRINCIPAL</a></li>
                <li id="text-nav"><a href="#">SECCIONES</a></li>
                <li id="text-nav"><a href="#">CONTACTOS</a></li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="boxlog">
            <div class="">
                 <h2 class="title">Actualizar Usuario</h2>
            </div>
           
            <div class="update">

                <form class="form" action="../services/updateUser.php" method="post">

                    <label for="name"><b>Name:</b></label>
                    <br>
                    <input class="receive" type="text" name="name" value="<?php echo $_SESSION['name']; ?>" required>
                    <br>
                    <label for="lastName"><b>Last Name:</b></label>
                    <br>
                    <input class="receive" type="text" name="lastName" value="<?php echo $_SESSION['lastName']; ?>" required>
                    <br>
                    <label for="email"><b>EMail</b></label>
                    <br>
                    <input class="receive" type="text" name="email" value="<?php echo $_SESSION['email']; ?>" required>
                    <br>
                    <label for="phone"><b>Phone</b></label>
                    <br>
                    <input class="receive" type="text" name="phone" value="<?php echo $_SESSION['phone']; ?>" required>
                    <br>
                    <label for="address"><b>Address</b></label>
                    <br>
                    <input class="receive"  type="text" name="address" value="<?php echo $_SESSION['address']; ?>" required>
                    <br>
                    <div class="sumit">
                        <input class="sumitButton "type="submit" value="Actualizar">
                    </div>
                </form>
            </div>
        </div>

    </div>

    <div class="home">
        <a href="../services/logout.php">Cerrar sesión</a>
    </div>
</body>
</html>
