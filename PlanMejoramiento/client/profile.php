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

    <link rel="stylesheet" href="style/profile.css">

    <title>INGERACK</title>

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
                <li id="text-nav"><a href="#">PAGINA PRINCIPAL</a></li>
                <li id="text-nav"><a href="#">SECCIONES</a></li>
                <li id="text-nav"><a href="#">CONTACTOS</a></li>
            </ul>
        </div>
    </div>

    <div class="body">
        <div class="container">
            <div class="cont">
                <div class="contacTitle">
                    <h3>Contac Information</h3>
                </div>
                <div class="contacCont">
                    <h4>Email</h4>
                    <p><?php echo $email;?></p>
                    <h4>Phone</h4>
                    <p><?php echo $phone; ?></p>
                    <h4>Address</h4>
                    <p><?php echo $address; ?></p>
                </div>    
            
                <div class="button">
                    <div class="header-nav">
                        <a class="UDUser" href="updateUser.php">
                            Update User
                        </a>
                    </div>
                    <div class="header-nav">
                        <a class="UDUser" href="deleteUser.php">
                            Delete User
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home">
        <a href="home.php">Home</a>
    </div>
    
</body>
</html>