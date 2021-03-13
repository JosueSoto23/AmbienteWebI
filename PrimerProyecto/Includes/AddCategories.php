<?php

include "Connection.php";

if(isset($_POST['add-categories'])) {
    if (strlen($_POST['name'] >= 1)) {

        $name  = $_POST['name'];

        $consult = "INSERT INTO categories VALUES ('','$name') ";
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