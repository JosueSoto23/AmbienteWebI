<?php

include "Connection_db.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['desc'])) {
        $name = trim($_POST['name']);
        $desc = trim($_POST['desc']);

        $consult = "INSERT INTO movie(name, description) VALUES ('$name', '$desc')";
        $result = mysqli_query($conex, $consult);

        if($result) {
            $name = "";
            $desc = "";
            ?>
            <h3 class="ok"> ¡Registro exitoso! </h3>
            <?php
        } else {
            ?>
            <h3 class="bad"> ¡Registro fallido! </h3>
            <?php
        }
    } else {
        ?>
            <h3 class="bad"> Campos requeridos </h3>
            <?php
    }
}

?>