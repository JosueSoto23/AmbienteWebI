<?php

include "Connection.php";
    
if (isset($_POST['register'])) {
    if (strlen($_POST['cedula']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['rol'] >= 1) 
    && strlen($_POST['contra'] >= 1)) {
        $cedula = trim($_POST['cedula']);
        $nombre = trim($_POST['nombre']);
        $rol = trim($_POST['rol']);
        $contra = trim($_POST['contra']);

        $consult = "INSERT INTO usuario(nombre, cedula, contra, rol) 
        VALUES ('$nombre', '$cedula', '$contra', '$rol')";
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