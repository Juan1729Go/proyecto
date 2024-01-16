<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGERACK</title>

    <!-- css --> 
    <link rel="stylesheet" type="text/css" href="style/index.css">
    <!-- fonts --> 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,400;1,300&family=Poppins:wght@100;200;400;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <!-- cuerpo --> 
    <div class="boxlog"> 

        <div class="reguistro">
            <div class="logHead">
                <img src="style/img/peque.png" alt="">
                <h1 class="title">User Register</h1> 
            </div>
            
            <!-- informacion de reguistro -->
            <div class="form" >
                <form action="../services/auth.php" method="POST">

                    <input class="receive" id="receive" type="text" name="name" placeholder="Name" autocomplete="off" required>
                    <br>

                    <input class="receive" id="receive" type="text" name="lastName" placeholder="Last Name" autocomplete="off" required>
                    <br>

                    <input class="receive" id="receive" type="email" name="email" placeholder="Email" autocomplete="off" required>
                    <br>

                    <input class="receive" id="receive" type="number" name="phone" placeholder="Phone" autocomplete="off" required> 
                    <br>

                    <input class="receive" id="receive" type="password" name="password" placeholder="Password" autocomplete="off" required>
                    
                    <!-- boton enviar -->
                    <div class="sumit">
                        <input class="sumitButton" type="submit" value="Check In">
                        
                    </div>
                    
                </form>
                
            </div>
                
        </div>

    </div> 
    <div class="home">
        <a href="home.php">Home</a>
    </div>
</body>
</html>
