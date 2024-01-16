<?php
require_once '../services/login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGERACK</title>

    <link rel="stylesheet" type="text/css" href="style/index.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> 
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100;0,200;0,400;1,300&family=Poppins:wght@100;200;400;500;700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="boxlog">
        <div class="logHead">
            <img src="style/img/peque.png" alt="">
            <h2 class="title">LOGIN</h2>
            <?php if (isset($error)) { echo "<p>$error</p>"; } ?>
        </div>
        
        <form class="form" action="index.php" method="post">
            <div class="group">
                <input class="receive" type="text" name="email" required placeholder="Email">
                <input class="receive" type="password" name="password" required placeholder="Password">
            </div>
            
            <div class="sumit">
                <input class="sumitButton" type="submit" value="Log In">
                <button class="sumitButton" onclick="location.href='login.php'" type="button">Check In</button>
            </div>
        </form>
    </div>
</body>
</html>
