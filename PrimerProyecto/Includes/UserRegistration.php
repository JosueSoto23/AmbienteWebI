<?php

include "Connection.php";

if(isset($_POST['register'])) {
    if (strlen($_POST['name'] >= 1) && strlen($_POST['email'] >= 1) && strlen($_POST['pass'] >= 1) && strlen($_POST['role'] >= 1)) {

        $name  = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $role = $_POST['role'];

        $consult = "INSERT INTO users VALUES ('','$name','$email','$pass','$role') ";
        $connect = getConnection();
        $result = mysqli_query($connect, $consult);

        if ($result) {

    ?>

        <div class="alert alert-success" role="alert">
            ¡Registro exitoso!
        </div>

    <?php

        } else {

    ?>

        <div class="alert alert-danger" role="alert">
            ¡Registro fallido!
        </div>

    <?php

        }

    } else {

    ?>
        <div class="alert alert-danger" role="alert">
            ¡Campos requeridos!
        </div>

    <?php

    }

}

?>