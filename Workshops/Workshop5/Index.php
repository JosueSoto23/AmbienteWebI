<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="Style/Style.css">

    <title> Workshop 5 </title>

</head>

<body>

    <header>
        <div>
            <h2> Inicio de Sesión </h2>
        </div>
    </header>

    <div>
        <form method="POST">
            <input type="text" id="" name="cedula" placeholder="Cédula">
            <br><br>
            <input type="password" id="" name="contra" placeholder="Contraseña">
            <br><br>
            <input type="submit" name="auth"><br>
            <a href="UserRegister.php"> Registrarse </a>
        </form>
    </div>

</body>

</html>

<?php

    include "Auth.php";

?>
