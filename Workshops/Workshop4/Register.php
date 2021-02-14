<?php

include "Connection.php";
date_default_timezone_set("America/Costa_Rica");
    
if (isset($_POST['register'])) {
    if (strlen($_POST['cedula']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['apellidos'] >= 1) 
    && strlen($_POST['correo'] >= 1)  && strlen($_POST['carrera'] >= 1)) {
        $cedula = trim($_POST['cedula']);
        $nombre = trim($_POST['nombre']);
        $apellidos = trim($_POST['apellidos']);
        $correo = trim($_POST['correo']);
        $carrera = trim($_POST['carrera']);
        $fecha = date("Y-m-d H:i:s");

        $consult = "INSERT INTO matricula(cedula, nombre, apellidos, correo, carrera, fecha) 
        VALUES ('$cedula', '$nombre', '$apellidos', '$correo', '$carrera', '$fecha')";
        $result = mysqli_query($connex, $consult);

        if($result) {
            ?>
            <br><h3 class="ok"> ¡Registro exitoso! </h3>
            <?php
        } else {
            ?>
            <br><h3 class="bad"> ¡Registro fallido! </h3>
            <?php
        }
    } else {
        ?>
            <br><h3 class="bad"> Campos requeridos </h3>
            <?php
    }
}

?>