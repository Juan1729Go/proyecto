<?php
session_start();
//lamo DB
require_once '../services/db.php';

//verifico datos
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Para mejorar la seguridad, se recomienda usar sentencias preparadas
    $stmt = $conn->prepare("SELECT * FROM empleados WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password);

    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows == 1) {
        //obtengo informacion del usuario
        $user_date = $result->fetch_assoc();

        //almaceno informacion de usario
        //llamo , nombre de columna, nombre en app

        $_SESSION['idEmpleados'] = $user_date['idEmpleados'] ;
        $_SESSION['name'] = $user_date['name'] ;
        $_SESSION['lastName'] = $user_date['lastName'] ;
        $_SESSION['email'] = $user_date['email'] ;
        $_SESSION['phone'] = $user_date['phone'] ;
        $_SESSION['address'] = $user_date['address'] ; 

        header("Location: home.php");
        exit();
    } else {
        $error = "Nombre o contraseña incorrectos";
    }

    $stmt->close();
}
?>