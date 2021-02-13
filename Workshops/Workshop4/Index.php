<?php

include "Register.php";
include "Carrers.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="Style/Style.css">

    <title> Workshop 4 </title>

</head>

<body>

    <header>
        <div>
            <h2> Registro de Matrícula </h2>
        </div>
    </header>

    <div>
        <form method="POST">
            <input type="text" id="" name="cedula" placeholder="Cédula">
            <br><br>
            <input type="text" id="" name="nombre" placeholder="Nombre">
            <br><br>
            <input type="text" id="" name="apellidos" placeholder="Apellidos">
            <br><br>
            <input type="email" id="" name="correo" placeholder="Correo">
            <br><br>
            <label for="carrera"> Carrera: </label>
            <select id="carrera" name="carrera">
                <?php fillList($list) ?>
            </select>
            <br><br>
            <input type="submit" name="register">
        </form>
    </div>

</body>

</html>