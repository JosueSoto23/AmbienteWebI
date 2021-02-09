<?php

include "Connection_db.php";

if (isset($_POST['register'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password'] >= 1)) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        $consult = "INSERT INTO user(name, email, password) VALUES ('$name', '$email', '$password')";
        $result = mysqli_query($conex, $consult);

        if($result) {
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