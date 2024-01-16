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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/home.css">
    <title>INGERACK</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,400;1,300&family=Poppins:wght@100;200;400;500;700&display=swap" rel="stylesheet">
</head>

<body>
    

    <div class="header">

        <div class="header-log">
            <img class="logo" src="./style/img/mini.png">
            <h2 >Welcome </h2> <h2 class="welcome"><?php echo $username; ?>!</h2> 
        </div>
            
        <div class="header-nav">
            <ul>
                <li id="text-nav"><a href="#">PAGINA PRINCIPAL</a></li>

                <li id="text-nav"><a href="#">SECCIONES</a></li>

                <li id="text-nav"><a href="#">CONTACTOS</a></li>
            </ul>
        </div>
    </div>
    <hr>
    <section class="cuerpo">
        <div class="cards">

            <div class="cards-body">
                <div class="body-title">
                    <h2>Employees</h2>
                </div>
                <div class="body-text">
                    <ul>
                        
                        <a class="routs" href="profile.php">
                            <li>Profile</li>
                        </a>

                        <a class="routs" href="">
                            <li>Contact information</li>
                        </a>

                        <a class="routs" href="">
                            <li>Projects</li>
                        </a>

                    </ul>
                </div>
            </div>

            <div class="cards-body">
                <div class="body-title">
                   <h2>INVENTORY</h2>
                </div>
            
                <div class="body-text">
                    <ul>
                        <a class="routs" href="">
                            <li>Tools</li>
                        </a>

                        <a class="routs" href="">
                            <li>Materials</li>
                        </a>

                        <a class="routs" href="">
                            <li>Requests</li>
                        </a>
                        
                    </ul>
                </div>
            </div>
            
            <div class="cards-body">
                <div class="body-title">
                    <h2>PROJECTS</h2>
                </div>
               
                <div class="body-text">
                    <ul>
                        <a class="routs" href="">
                            <li>In Progress</li>
                        </a>

                        <a class="routs" href="">
                            <li>Takes</li>
                        </a>

                        <a class="routs" href="">
                            <li>training</li>
                        </a>
                        
                    </ul>
                </div>
            </div>

        </div>
        
    </section>
    <div class="newClose">
               <a href="NuevoEmpleadou.html">Nuevo Empleado</a>

               <a href="../services/logout.php">Cerrar sesión</a>
    </div>
    
</body>
</html>
